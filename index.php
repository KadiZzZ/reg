<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <?php
    $connect = mysqli_connect('localhost', 'root', '', 'practice');

    if (isset($_POST ['username']) && isset($_POST ['password']) && isset($_POST ['email']))   {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];



        $query = "INSERT INTO users (username, password, email) VALUES('$username', '$password', '$email')";
        $result = mysqli_query($connect, $query);

        if($result) {
            $smsg = "Регистрация прошла успешно";
        } else {
            $fsmsg= "Ошибка";
        }
    }


    ?>




    <div class="containter">
        <form class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php if (isset($smsg)){?><div class="alert alert-success" role="alert"> <?php echo $smsg;?> </div> <?php } ?>
            <?php if (isset($fsmsg)){?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg;?> </div> <?php } ?>
            <input type="text" name="username" class="form-control" placeholder="username" required>
            <input type="text" name="email" class="form-control" placeholder="email" required>
            <input type="text" name="password" class="form-control" placeholder="password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <a href ="login.php" class="btn btn-lg btn-primary btn-block">Login</a>
        </form
    </div>

</body>
</html>