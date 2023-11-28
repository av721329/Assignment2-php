<?php
  include "./inc/database.php";
  
require './inc/header.php';

  $user_id="";
  $Name="";
  $Email="";

  $error="";
  $success="";

  if($_SERVER["REQUEST_METHOD"]=='GET'){
    if(!isset($_GET['user_id'])){
      header("location:details.php");
      exit;
    }
    $user_id = $_GET['user_id'];
    $sql = "SELECT * FROM phpadmins WHERE user_id = $user_id";
    $result = $conn->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    while(!$row){
      header("location:details.php");
      exit;
    }
    $Name=$row["Name"];
    $Email=$row["Email"];

  }
  else{
    $user_id = $_POST["user_id"];
    $Name=$_POST["Name"];
    $Email=$_POST["Email"];

    $sql = "update phpadmins set Name='$Name', Email='$Email' where user_id='$user_id'";
    $result = $conn->query($sql);
    
  }
  
?>
<!DOCTYPE html>
<html lang="en">
    <!--Starting of head tag-->
<head>
    <!-- Define character encoding -->
    <meta charset="UTF-8">
    <!-- Define viewport settings for responsive design -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
    <!-- Favicon - Uncomment and modify the line below to set your favicon -->
<!-- <link rel="icon" type="image/x-icon" href="radio.png"> -->
    <link rel="icon" type="image/x-icon" href="radio.png">

    <!-- Font Awesome CDN link for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="stylesheet.css">

    <style>


body, h1, h2, h3, p, input, label {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
}

/* Style for the form container */
.container {
    max-width: 600px;
    margin: 20px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

/* Style for form elements */
form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
}

input {
    margin-bottom: 15px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

/* Style for the submit and cancel buttons */
.eaton {
    padding: 10px;
    background-color: #ffc107;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    color: #212529;
    font-weight: bold;
}

.eaton:hover {
    background-color: #ffca2c;
}

/* Style for the card */
.card {
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    margin-top: 20px;
}

/* Style for the card header */
.card-header {
    background-color: rgb(32, 104, 85);
    padding: 20px;
    text-align: center;
    border-radius: 8px 8px 0 0;
}

/* Style for the title in the card header */
.card-header h1 {
    margin: 0;
    color: #fff;
}


      </style>
<style>
        body {
            background-image: url('img/candy_image.jpg'); /* Replace with the actual path to your image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }/* Additional styles for content */
        main {
            padding: 20px; /* Add padding for content */
        }

        .form-row {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
        }

        .col-sm-12, .col-md-6, .col-lg-6 {
            flex: 1;
            min-width: 0;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .btn {
            display: inline-block;
            padding: 15px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            border: 1px solid #333;
            border-radius: 4px;
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }

        .btn-dark {
            background-color: #333;
        }

        .btn-dark:hover {
            background-color: #45a049;
        }
    </style>

</head>
<body>
    <form method="post">

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-warning">
 <h1 class="text-white text-center">  Update Member </h1>
 </div><br>

 <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" class="form-control"> <br>

 <label>First Name: </label>
 <input type="text" name="Name" value="<?php echo $Name; ?>" class="form-control"> <br>

 <label> Email: </label><br>
 <input type="text" name="Email" value="<?php echo $Email; ?>" class="form-control"> <br>

 <input type="submit" class="eaton" value="Submit">
 <a  type="submit" class="eaton" name="cancel" href="user.php"> Cancel </a><br>

 </div>
 </form>
 </div>
 <br><br>
</body>
</html>
<?php 
require './inc/footer.php';
?>