<?php
    if (isset($_GET['id'])) {
        require_once('../../db/db.php');
        require_once('../model/crudModel.php');
        $crud = new CrudModel(DB::get_instance());
        $userId = (int) $_GET['id'];
        $crud->deleteUser($userId);
        header('Location:../../');
    }