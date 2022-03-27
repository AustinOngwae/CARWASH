<?php
include '../db_connect.php';
if(!isset($_SESSION["username"])) {
    header("location:../login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Privilege - Top Touch Car Wash</title>
    <link rel="stylesheet" type="text/css" href="../resources/css/header.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/admin/removeprivilege.css">
</head>

<body>
    <?php
    include "../adminheader.php";
    if(isset($_POST['remove'])) {
        $employeeId = $_POST["empid"];
        $connect->query("DELETE FROM privileges WHERE emp_id=$employeeId") or die($mysqli->error);

    }

    
    ?>
    <main>
        <div class="register">
            <div class="title">Remove Privilege</div>
            <form action="" method="POST" class="form">
               <div class="inputfield">
                    <label>Employee Id</label>
                    <input type="number" class="input" name="empid" placeholder="Employee Id" required/>
                </div>
                
                <div class="inputBtn">
                    <input type="submit" value="Remove" class = "remove-btn" name="remove" />
                </div>
            </form>
        </div>
    </main>
</body>

</html>