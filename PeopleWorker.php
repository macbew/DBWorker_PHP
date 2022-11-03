/**
* Автор: Михаил Михальчук
*
* Дата реализации: 03.11.2022
*
* Дата изменения: 03.11.2022
*
* Утилита для работы с данными полученными из базы

/**
* TODO:
* [+] Создать Конструктор котоыре ведет поиск id людей по всем полям БД (поддержка
выражений больше, меньше, не равно)
* [+] Создать метод для получение массива экземпляров класса 1 из массива с id людей
полученного в конструкторе;
* [+] Создать метод для удаление людей из БД с помощью экземпляров класса 1 в
соответствии с массивом, полученным в конструкторе


<?php

require_once "DBUtil.php";

if (!class_exists('DBUtil')) {
  die('Class DBUtil is not exist.');
}

class PeopleWorker extends DBUtil
{
  private $people = [];

  function __construct($id = '', $condition = '')
  {
    $people[] = parent::getPerson($id, $condition);
    return $this;
  } 
}