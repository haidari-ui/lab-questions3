<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $female=$_POST['female'];
    $male=$_POST['male'];
    $semester=$_POST['semester'];
    $department=$_POST['department'];
    $english=$_POST['skill1'];
    $pashto=$_POST['skill2'];
    $Dari=$_POST['skill3'];
    $checkboxes=[$english,$Dari,$pashto];
    $radios=[$male,$female];
     $radio=[];
     $errors=[];

     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors="email is requird";
    }
      if(filter_var($age,FILTER_VALIDATE_INT)===false){
        $errors="valid age is requird";
    }

    echo "name :".$name."<br>";
    echo "email :".$email."<br>";
    echo "age :".$age."<br>";
    echo "semester :".$semester."<br>";
    echo "department :".$department."<br>";

     foreach($radios as $radio){
      
        echo "<ul>";
         echo "<li>".
        htmlspecialchars($radio).
        "</li>";
        echo "</ul>";
    
    }

    foreach($checkboxes as $checkbox){
      
        echo "<ul>";
         echo "<li>".
        htmlspecialchars($checkbox).
        "</li>";
        echo "</ul>";
    
    }



?>