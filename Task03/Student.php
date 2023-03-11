<?php

class Student
{
    protected static int $previousId = 1;

    private int $id;
    private string $lastname;
    private string $firstname;
    private string $faculty;
    private int $course;
    private int $group;

    public function __construct()
    {
        $this->id = self::$previousId++;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getFaculty(): string
    {
        return $this->faculty;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    public function getGroup(): int
    {
        return $this->group;
    }
    public function setFirstname(string $firstname): Student
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLastname(string $lastname): Student
    {
        $this->lastname = $lastname;
        return $this;
    }

    public function setFaculty(string $faculty): Student
    {
        $this->faculty = $faculty;
        return $this;
    }

    public function setCourse(int $course): Student
    {
        $this->course = $course;
        return $this;
    }

    public function setGroup(int $group): Student
    {
        $this->group = $group;
        return $this;
    }

    public function __toString(): string
    {
        $output = "Id: {$this->id}" . PHP_EOL
            . "Фамилия: {$this->lastname}" . PHP_EOL
            . "Имя: {$this->firstname}" . PHP_EOL
            . "Факультет: {$this->faculty}" . PHP_EOL
            . "Курс: {$this->course}" . PHP_EOL
            . "Группа: {$this->group}" . PHP_EOL;

        return $output;
    }

}