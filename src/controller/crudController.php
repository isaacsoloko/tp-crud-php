<?php
    if (isset($_POST['create'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        if (!empty($name) && !empty($email) && !empty($password)) {
            require_once('../../db/db.php');
            require_once('../model/crudModel.php');
            $crud = new CrudModel(DB::get_instance());
            $crud->createUser($name, $email, md5($password));
        }
        header('Location:../../');
    }
?>