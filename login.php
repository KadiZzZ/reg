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
?>

<div class="containter">
    <form class="form-signin" method="POST">
        <h2>Login</h2>
        <input type="text" name="username" class="form-control" placeholder="username" required>
        <input type="text" name="password" class="form-control" placeholder="password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a href ="index.php" class="btn btn-lg btn-primary btn-block">Register</a>
    </form
</div>

<?php session_start();
$connect = mysqli_connect('localhost', 'root', '', 'practice');

if (isset($_POST ['username']) and isset($_POST ['password']))   {
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username= '$username' and password= '$password'";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$count = mysqli_num_rows($result);

if($count==1){
    $_SESSION['username']= $username;
}else {
    $flmsg="Ошибка";
}

    if (isset($_SESSION['username'])){
      $username = $_SESSION['username'];
      echo "Добро пожаловать"  . $username . "";
      echo "<a href ='logout.php' class='btn btn-lg btn-primary btn-block'>Logout</a>";

      

    }

}
?>
</body>
</html>