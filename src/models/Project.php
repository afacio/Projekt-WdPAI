<?php

class Project
{
    private $title;
    private $image;
    private $assignedBy;
    private $like;
    private $dislike;
    private $id;

    public function __construct($title, $image, $assignedBy, $like = 0, $dislike = 0, $id = null)
    {
        $this->title = $title;
        $this->image = $image;
        $this->assignedBy = $assignedBy;
        $this->like = $like;
        $this->dislike = $dislike;
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getAssignedBy()
    {
        return $this->assignedBy;
    }

    public function setAssignedBy($assignedBy): void
    {
        $this->assignedBy = $assignedBy;
    }

    public function getLike(): int
    {
        return $this->like;
    }

    public function setLike(int $like): void
    {
        $this->like = $like;
    }

    public function getDislike(): int
    {
        return $this->dislike;
    }

    public function setDislike(int $dislike): void
    {
        $this->dislike = $dislike;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }
}