<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        username: <input type="text" name="name">
        password: <input type="text" name="pwd">
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>
<?php
    $fname = $_POST['name'];
    $pwd = $_POST['pwd'];
    $conn = new mysqli('localhost', 'root','', 'tbl_books');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    // echo "Connected successfully";
    $sql = "INSERT INTO `login` (`username`, `password`) VALUES ('$fname', '$pwd')";
   
    if ($conn->query($sql) === TRUE) {
        echo "login Successfull";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>