<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="lab1.php" method="post">
    <label>FullName</label>
    <input type="text" name="Fullname" requird>

    <label>email</label>
    <input type="email" name="email" requird>

    <label>Age</label>
    <input type="number" name="age">

    <label>Semester</label>
    <input type="number" name="semester" requird>
    
    <button type="submit">Submit</button>
</form>

<?php

    $errors=[];
    $fullname=$_POST['Fullname'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $semester=$_POST['semester'];

    if($fullname ===""){
        $errors="Name is requird";
    }

    if($email ===""){
        $errors="email is requird";
    }
    if($age ===""){
        $errors="age is requird";
    }

    if($semester ===""){
        $errors="semester is requird";
    }

    if(empty($errors)){
        echo "page is loaded successfully";
    }

    if (!$errors){
        echo "<ul>";
                foreach($errors as $error){
                echo "<li>".
                htmlspecialchars($error).
                "<li>";
                }
        echo "</ul>";
    }
?>
</body>
</html>