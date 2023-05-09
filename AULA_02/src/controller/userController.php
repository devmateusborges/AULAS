<?php

require_once "./conePDO/connect.php";
require_once "./model/userModel.php";

class UserController
{
    public  function getAllUsers()
    {
        $modelUser = UserModel::getAllUsers();

        $loader = new \Twig\Loader\ArrayLoader([
            'index' => 'Hello {{ name }}!',
        ]);
        $twig = new \Twig\Environment($loader);

        echo $twig->render('index', ['name' => 'Fabien']);
    }

    public function addUser()
    {
        $userName = $_POST['name'];
        $userPhone = $_POST['phone'];

        if (!isset($_POST['name']) || !$_POST['phone']) {
            echo "Campos não existe";
        }

        $modelUser = UserModel::addUser($userName, $userPhone);


        return $modelUser;
    }

    public function getFilterName()
    {
    }

    public function deleteUser()
    {
    }
}