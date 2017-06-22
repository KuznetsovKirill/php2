<?php
session_start();

class InformUsers
{
//    private $Name;
//    private $Familia;
//    private $age;
//    private $Date;

    public function shyi(){
        echo $_POST['FirstName'].'<br>';
        echo $_POST['SecondName'].'<br>';
        echo $_POST['Age'].'<br>';
        echo $_POST['Date'].'<br>';

    }
}
