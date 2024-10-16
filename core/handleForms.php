<?php
    require_once 'dbConfig.php'; 
    require_once 'queryFunctions.php';


    // ADDING A NEW STUDENT RECORD
    if (isset($_POST['add_Applicant_Btn'])) {
        $first_Name = trim($_POST['first_Name']);
        $last_Name = trim($_POST['last_Name']);
        $degree = trim($_POST['degree']);
        $college = trim($_POST['college']);
        $residence = trim($_POST['residence']);
        $prev_exp = trim($_POST['prev_exp']);
        $contact_Num = trim($_POST['contact_Num']);

        if (!empty($first_Name) && !empty($last_Name) && !empty($degree) && !empty($college) && !empty($residence)  && !empty($prev_exp)  && !empty($contact_Num)) {
                $func = addEngineer($pdo, $first_Name, $last_Name, $degree, $college, $residence, $prev_exp, $contact_Num);

            if ($func) {
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


    // UPDATING AN EXISTING STUDENT RECORD
    if (isset($_POST['edit_Engineer_Btn'])) {
        $applicant_id = $_GET['applicant_id'];
        $first_Name = trim($_POST['first_Name']);
        $last_Name = trim($_POST['last_Name']);
        $degree = trim($_POST['degree']);
        $college = trim($_POST['college']);
        $residence = trim($_POST['residence']);
        $prev_exp = trim($_POST['prev_exp']);
        $contact_Num = trim($_POST['contact_Num']);

        if (!empty($applicant_id) && !empty($first_Name) && !empty($last_Name) && !empty($degree) && !empty($college) && !empty($residence)  && !empty($prev_exp)  && !empty($contact_Num)) {

            $func = update_Record($pdo, $applicant_id, $first_Name, $last_Name, $degree, $college, $residence, $prev_exp, $contact_Num);

            if ($func) {
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


    // DELETING A STUDENT RECORD
    if (isset($_POST['del_Engineer_Btn'])) {

        $func = remove_Engineer($pdo, $_GET['applicant_id']);

        if ($func) {
            header("Location: ../index.php");
        }
        else {
            echo "Deletion failed";
        }
    }

?>
