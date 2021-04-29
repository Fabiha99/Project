<?php 

require_once '../model/model_r.php';

if (deleteTeacher($_GET['id'])) {
    header('Location: ../view/ShowAllTeachers.php');
}
