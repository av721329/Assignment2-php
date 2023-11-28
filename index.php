<!-- Here we will add our header file. -->
<?php require('./inc/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- Link to the external stylesheet -->
    <link rel="stylesheet" href="styling\style.css">
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
<main>
    <!-- Form section with two columns -->
    <section class="form-row row">
        <!-- Sign-up form -->
        <div class="col-sm-12 col-md-6 col-lg-6">
            <form method="post" action="save-admin.php">
                <h3 >Sign up!</h3>
                <!-- Form input fields -->
                <p><input class="form-control" name="Name" type="text" placeholder="Name" required/></p>
                <p><input class="form-control" name="Email" type="text" placeholder="Email" required /></p>
                <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                <p><input class="form-control" name="confirm" type="password" placeholder="Confirm Password" required /></p>
                <!-- Submit button -->
                <input class="btn btn-dark" type="submit" name="submit" value="Register" />
            </form>
        </div>
        
        <!-- Login form -->
        <div class="col-sm-12 col-md-6 col-lg-6">
            <form method="post" action="./inc/validate.php">
                <h3>Log in!</h3>
                <!-- Form input fields for login -->
                <p><input class="form-control" name="username" type="text" placeholder="Username" required /></p>
                <p><input class="form-control" name="password" type="password" placeholder="Password" required /></p>
                <!-- Submit button for login -->
                <input class="btn btn-dark" type="submit" value="Login" />
            </form>
        </div>
    </section>
</main>
</body>
</html>

<!-- Let's add our footer file. -->
<?php require('./inc/footer.php'); ?>
</main>

<!-- JavaScript for switching between sign-up and login forms -->
<script>
const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
    item.addEventListener('click', function() {
        switchers.forEach(item => item.parentElement.classList.remove('is-active'))
        this.parentElement.classList.add('is-active')
    })
})
</script>
