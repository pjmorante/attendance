<?php 
    require_once 'db/conn.php';

    if (!$_GET['id']) 
    {
        include 'includes/errorMessage.php';
    }else
    {
        $id = $_GET['id'];

        $result = $crud->deleteAttendee($id);

        if ($result) 
        {
            header("Location: attendance.php");
        }else 
        {
            echo '';
        }
    }

?>