<?php
    $errors=[];
    $name=$_GET['name'];
    $age=$_GET['age'];
    $email=$_GET['email'];
    

    
     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors="email is requird";
    }
      if(filter_var($age,FILTER_VALIDATE_INT)===false){
        $errors="valid age is requird";
    }

    if(empty($errors)){
        header('Location:success.php');
        exit;

    }

    if (!empty($errors)) {
    echo "<ul>";

    foreach ($errors as $error) {
        echo "<li>" .
            htmlspecialchars($error) .
            "</li>";
    }

    echo "</ul>";
}

?>