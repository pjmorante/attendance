<?php 

    require_once 'db/conn.php';

    if (isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $spec = $_POST['area'];
    

        $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $spec);

        if ($result) {
            header("Location: index.php");
        }else {
            include 'includes/errorMessage.php';
        }

    }else {
        include 'includes/errorMessage.php';
    }
?>