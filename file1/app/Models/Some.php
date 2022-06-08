<?php
namespace App\Models;

// модель, яка буде імітувати якісь дані (наприклад дані про товар чи про юзера).

class Some {
    private $name="Ivan", $surname="Murko", $patronymic="Romanovych", $time_hours=23;
    private $friends=["Ivan Zhuk", "Slava Hvorost", "Valeriy Zhuiko"];


//    public function __construct($name, $surname, $patronymic) {
//        $this->name = $name;
//        $this->surname = $surname;
//        $this->patronymic = $patronymic;
//    }

    public function getName() {
        return $this->name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function getPatr() {
        return $this->patronymic;
    }

    public function getFriends() {
        return $this->friends;
    }

    public function getTH() {
        return $this->time_hours;
    }
}
