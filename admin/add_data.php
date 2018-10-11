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
  Name:<br>
  <input type="text" name="name">
  <br>
  Price:<br>
  <input type="text" name="price">
  <br><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>

<?php
    $fname = $_POST['name'];
    $price = $_POST['price'];
    $conn = new mysqli('localhost', 'root','', 'tbl_books');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    // echo "Connected successfully";
    $sql = "INSERT INTO `tbl_books` (`fname`, `price`) VALUES ('$fname', '$price')";
   
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>