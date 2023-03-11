<?php

function runTest()
{
    echo "Проверка класса Student" . PHP_EOL . PHP_EOL;


    $student1 = new Student();
    $student1->setFirstname("Татьяна")->setLastname("Бурлакова")->setFaculty("ФМиИТ")->setCourse(3)->setGroup(302);

    $student2 = new Student();
    $student2->setFirstname("Наталья")->setLastname("Ошина")->setFaculty("ФМиИТ")->setCourse(3)->setGroup(302);

    $student3 = new Student();
    $student3->setFirstname("Дмитрий")->setLastname("Минин")->setFaculty("ФМиИТ")->setCourse(3)->setGroup(302);


    $ids = $student1->getId() . " " . $student2->getId() . " " . $student3->getId();
    $expected = "1 2 3";
    if ($ids == $expected) {
        echo"Автоинкременция поля id ПРОШЛА проверку" . PHP_EOL;
    } else {
        echo"Автоинкременция поля id НЕ ПРОШЛА проверку". PHP_EOL;
    }


    $info = "Id: {$student3->getId()}" . PHP_EOL
        . "Фамилия: {$student3->getLastname()}" . PHP_EOL
        . "Имя: {$student3->getFirstname()}" . PHP_EOL
        . "Факультет: {$student3->getFaculty()}" . PHP_EOL
        . "Курс: {$student3->getCourse()}" . PHP_EOL
        . "Группа: {$student3->getGroup()}" . PHP_EOL;

    $expected = $student3->__toString();

    if ($info === $expected) {
       echo"Все методы get ПРОШЛИ проверку" . PHP_EOL;
    } else {
        echo"Методы get НЕ ПРОШЛИ проверку" . PHP_EOL;
    }


    echo "Метод __toString():" . PHP_EOL . $student1->__toString() . PHP_EOL;


    echo "Проверка класса StudentsList" . PHP_EOL . PHP_EOL;

    $studentsList = new StudentsList();


    $studentsList->add($student1);
    $studentsList->add($student2);
    $studentsList->add($student3);


    $studentNumber = $studentsList->count();
    $expected = 3;
    if ($studentNumber == $expected) {
        echo "Метод count() ПРОШЕЛ проверку" . PHP_EOL;
    } else {
        echo "Метод count() НЕ ПРОШЕЛ проверку" . PHP_EOL;
    }


    if ($student3 === $studentsList->get(2)) {
        echo "Метод get() ПРОШЕЛ проверку" . PHP_EOL;
    } else {
        echo "Метод get() НЕ ПРОШЕЛ проверку" . PHP_EOL;
    }



    $fileName = "students.txt";
    if ($studentsList->store($fileName)) {
        echo "Метод store() ПРОШЕЛ проверку" . PHP_EOL;
    } else {
        echo "Метод store() НЕ ПРОШЕЛ проверку" . PHP_EOL;
    }


    $studentsList1 = new StudentsList();

    if ($studentsList1->load($fileName) && $studentsList1->count() === 3) {
        echo "Метод load() ПРОШЕЛ проверку" . PHP_EOL;
    } else {
       echo "Метод load() НЕ ПРОШЕЛ проверку" . PHP_EOL;
    }
}
