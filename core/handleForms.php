<?php

require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['insertNewEmployeeBtn'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $position = $_POST['position'];
    $status = $_POST['status'];
    $department = $_POST['department'];

    if (!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($birthday) && !empty($position)  && !empty($status) && !empty($department)) {
        $query = insertIntoEmployeeRecords($pdo, $firstName, $lastName, 
        $gender, $birthday, $position, $status, $department);

        if ($query) {
            header("Location: ../index.php");
        }

        else {
            echo "Insertion failed";
        }
    }

    else {
        echo "Make sure that no fields are empty";
    }

}

if (isset($_POST['editEmployeeBtn'])) {
    $employee_id = $_POST['employee_id'];
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$gender = trim($_POST['gender']);
	$birthday = trim($_POST['birthday']);
	$position = trim($_POST['position']);
	$status = trim($_POST['status']);
	$department = trim($_POST['department']);

    if (!empty($employee_id) && !empty($firstName) && !empty($lastName) && !empty($gender) && !empty($birthday) && !empty($position) && !empty($status) && !empty($department)) {
        
        $query = updateAnEmployee($pdo, $employee_id, $firstName, $lastName, $gender, $birthday, $position, $status, $department);

        if ($query) {
            header("Location: ../index.php");
        }

        else {
            echo "Update failed";
        }
    }

    else {
        echo "Make sure that no fields are empty";
    }


}

if (isset($_POST['deleteEmployeeBtn'])) {
    $query = deleteAnEmployee($pdo, $_GET['employee_id']);

    if ($query) {
        header("Location: ../index.php");
    }
    else {
        echo "Deletion failed";
    }
}

?>