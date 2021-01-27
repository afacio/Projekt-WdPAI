<!DOCTYPE html>
<head>
    <title>HOME PAGE</title>
    <link rel="stylesheet" type="text/css" href="public/css/home-style.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="container">
        <div class="pasek">
            <a class="kostka" href="addProject">
                <img src="public/img/plus.svg">
            </a>
            <a class="kostka" href="login">
                <img src="public/img/logout.svg">
            </a>
            
            <img src="public/img/male-logo-z-napisem.svg" class="male-logo">
            
            <a class="kostka" href="https://www.instagram.com/" target="_blank">
                <img src="public/img/insta.svg">
            </a>
            <a class="kostka" href="https://www.facebook.com/" target="_blank">
                <img src="public/img/fb.svg">
            </a>
            
        </div>
        <div class="tresc" style="clear: both; width: 100%; height: auto;">
            <div class=galeria>

                <section class="projects">
                    <?php foreach ($projects as $project): ?>
                        <div id="<?= $project->getId(); ?>">
                            <img src="public/uploads/<?= $project->getImage(); ?>">
                            <div>
                                <h2><?= $project->getTitle(); ?></h2>
                                <div class="social-section">
                                    <i class="fas fa-heart"> <?= $project->getLike(); ?></i>
                                    <i class="fas fa-minus-square"> <?= $project->getDislike(); ?></i>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </section>
            </div>
        </div>
    </div>
</body>