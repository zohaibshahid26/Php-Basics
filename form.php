<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <h1>Form</h1>
    <form class="userform" action="form.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter your name"><br>
        <label for="age">Age</label>
        <input type="text" name="age" placeholder="Enter your age"><br>
        <label for="password">password</label>
        <input type="password" name="password" placeholder="Enter your password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
<?php
$name = $_POST['name'];
$age = $_POST['age'];
$password = $_POST['password'];

    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo "Name is $name";
    }
    echo "<br>";
    if (empty($age)) {
        echo "Age is empty";
    } else if (!is_numeric($age)) {
        echo "Age is not numeric";
    } else {
        if($age<18)
            echo "Age is less than 18";
        else
            echo "Age is $age";
    }
    echo "<br>";
    if (empty($password)) {
        echo "Password is empty";
    }
?>