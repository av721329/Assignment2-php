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

    <!-- Font Awesome CDN link for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Add your CSS styles here */
        .container {
            margin-top: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        

        th {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            color:#70d7d9;
            font-size: 20px;
        }

        td{
            padding: 8px;
            text-align: left;
            font-size: 15px;
            border-bottom: 1px solid #ddd;
        }

        /* Style for successful (Edit) link */
.successful {
    display: inline-block;
    padding: 10px 15px;
    background-color: #70d7d9; /* Green color */
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.successful:hover {
    background-color: #218838; /* Darker green on hover */
}

/* Style for dangerous (Delete) link */
.dangerous {
    display: inline-block;
    padding: 10px 15px;
    background-color: #70d7d9; /* Red color */
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.dangerous:hover {
    background-color: #c82333; /* Darker red on hover */
}
.ttn-container {
    text-align: center; /* Center align the content within the container */
  }

    </style>                

</head>
<body>


     <!-- Header Section -->
     <header>
        <!-- Main Heading -->
        <h1>Discover the Delight of Chocolate Candy</h1>
        <nav>
            <ul>
              <li><a href="user.php" class="right-align-link">User</a>
                <li><a href="logout.php" class="right-align-link">Log out</a>
            </li>
            </ul>
        </nav>
    </header>


<div class="container my-4">
    <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>FIRST</th>
        <th>email</th>
      </tr>
    </thead>
    <tbody>
      <?php
        include "./inc/database.php";
        $sql = "select * from phpadmins";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            echo "
          <tr>
            <th>{$row['user_id']}</th>
            <td>{$row['Name']}</td>
            <td>{$row['Email']}</td>
            <td>
            <div class='ttn-container'>
              <a class='successful' href='edit.php?user_id={$row['user_id']}'>Edit</a>
              <a class='dangerous' href='delete.php?user_id={$row['user_id']}'>Delete</a>
              </div>
            </td>
          </tr>
          ";
        }
        ?>
    </tbody>
  </table>
      </div>
      <footer>
        <!-- Logo Section -->
        <div id="logo">
            <!-- Company Logo -->
            <img src="logo.png" alt="Candy Logo">
        </div>

        <!-- Company Information Section -->
        <div id="company-info">
            <!-- Company Name -->
            <p>CK COMPANY AND SONS</p>
            <!-- Company Address (Placeholder) -->
            <p>Address: 14 LOMBARDY CRESCENT, L6S2N6 , BRAMPTON , ON.</p>
            <!-- Company Email (Placeholder) -->
            <p>Email: ck123@gmail.com</p>
        </div>

        
        </div>
    </footer>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
  </body>
</html>
