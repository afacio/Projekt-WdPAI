<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Project.php';
require_once __DIR__ . '/../repository/ProjectRepository.php';
require_once __DIR__ . '/../support/Authorization.php';

class ProjectController extends AppController
{

    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    private $projectRepository;

    private $authorization;

    public function __construct()
    {
        parent::__construct();
        $this->projectRepository = new ProjectRepository();
        $this->authorization = new Authorization();
    }

    public function projects()
    {
        $projects = $this->projectRepository->getProjects();
        $this->render('home', ['projects' => $projects]);
    }

    public function projectsLogged()
    {
        if (!$this->authorization->checkIfAuthenticated()) {
            $this->redirect('/login');
        }

        $user = $this->authorization->getAuthenticated();

        $projects = $this->projectRepository->getProjectsByUser($user->getId());
        $this->render('home', ['projects' => $projects]);
    }

    public function addProject()
    {
        if (!$this->authorization->checkIfAuthenticated()) {
            $this->redirect('/login');
        }

        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['file']['name']
            );

            $user = $this->authorization->getAuthenticated();
            $project = new Project($_POST['title'], $_FILES['file']['name'], $user->getId());
            $this->projectRepository->addProject($project);

            return $this->render('home', [
                'messages' => $this->message,
                'projects' => $this->projectRepository->getProjects()
            ]);
        }

        return $this->render('add-project', ['messages' => $this->message]);
    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');

            echo json_encode($this->projectRepository->getProjectByTitle($decoded['search']));
        }
    }

    public function like(int $id) {
        $this->projectRepository->like($id);
    }

    public function dislike(int $id) {
        $this->projectRepository->dislike($id);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }
}
