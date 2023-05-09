<?php

class UserModel
{
    public static function getAllUsers()
    {
        $con = ConnectionPDO::getConn();

        $sql = "SELECT * FROM user";
        $sql = $con->prepare($sql);
        $sql->execute();

        $result = array();

        while ($row = $sql->fetchObject('user')) {
            $result[] = $row;
        }


        if (!$result) {
            throw new Exception("Não foi encontrado nenhum registro no banco");
        }

        return $result;
    }

    public static function addUser($name, $phone)
    {
        $con = ConnectionPDO::getConn();

        $sql = $con->prepare('INSERT INTO `user`( `name`, `phone`) VALUES (:name ,:phone) ');
        $sql->bindValue(':name', $name);
        $sql->bindValue(':phone', $phone);

        $res = $sql->execute();

        if ($res == 0) {
            echo "Falha ao inserir usuario";
        }

        return  header("Location: /AULAS/AULA_02/View/Check.html");
    }

    public function updateUser($id, $name, $phone)
    {
        $con = ConnectionPDO::getConn();

        $sql = $con->prepare('UPDATE `user` SET `name`= :name,`phone`= :phone, WHERE id_User = :id');
        $sql->bindValue(':id', $id);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':phone', $phone);

        $res = $sql->execute();

        if ($res == 0) {
            echo "Falha ao atualizar o Usuario";
        }
    }

    public function getFilterName($name)
    {
        $con = ConnectionPDO::getConn();

        $sql = $con->prepare("SELECT * FROM `user` where `name` Like '%" . $name . "%' ");
        $sql->bindValue(':name', $name);
        $sql->execute();

        $result = array();

        while ($row = $sql->fetchObject('user')) {
            $result[] = $row;
        }


        if (!$result) {
            echo "Não foi encontrado nenhum registro no banco [SELECT OF LIKE]";
        }

        return $result;
    }

    public function deleteUser($id)
    {
        $con = ConnectionPDO::getConn();

        $sql = $con->prepare("DELETE from user WHERE id = " . $id);
        $res = $sql->execute();

        if (!$res) {
            echo "usuario não encontrado [DELETE] <br>";
        }
        return "Deletado com sucesso";
    }

    public function deleteAll()
    {
        $con = ConnectionPDO::getConn();

        $sql = $con->prepare('TRUNCATE TABLE user');

        $sql->execute();
    }
}