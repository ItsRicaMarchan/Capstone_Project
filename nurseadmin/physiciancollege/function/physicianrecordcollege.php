<?php
    session_start();
    include '../../../db.php';
    if(isset($_POST['submit_physiciancollege'])){ // pag get ng data
        $admin_id = $_POST['admin_id'];
        $idnumber = $_POST['idnumber']; 
        $fullname = $_POST['fullname'];
        $cenrolled = $_POST['cenrolled'];
        $role = $_POST['role'];
        $date_time = $_POST['date_time'];
       
        date_default_timezone_set('Asia/Manila');
        $date_created = date('Y-m-d h:i A'); 
    
        $sql = "INSERT INTO physicianapp VALUES ('','$admin_id','$idnumber','$fullname','$cenrolled','$role','$date_time','$date_created')";
        if(mysqli_query($conn, $sql)){
            // echo "<script>window.history.go(-1);</script>";
            header('location: ../physicianapprovedcollege.php');
            echo $_SESSION['success'] ="
                <div id='success-message' style='position:absolute; right:30px; background-color:#15a362; padding: 10px 10px; width:auto; border-radius: 10px;'>
                    <h2 style='
                    color: #fff;
                    font-size: 16px;
                    margin-left: 10px;'>Physician Consultation Appointment Added.</h2>
                </div>
            ";
        }
    } // for physician college
?>
