<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="form.php" method="post">
<label for="name">Name</label>
<input type="text" for="name">

<label for="age">Age</label>
<input type="number" for="age">

<label for="city">City</label>
<input type="text" for="city">

<button type="submit">save</button>
    
</form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $name = $_POST["age"];
        $name = $_POST["city"];
        echo "Nmae: $name<br>";
        echo "Age: $age <br>";
        echo "City: $city<br>";
    } else {
        echo "No data submitted.";
    }
?>