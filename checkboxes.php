<?php
    $errors=[];
    $java=$_GET['skill1'];
    $python=$_GET['skill2'];
    $C=$_GET['skill3'];
     $skills=[$java,$python,$C];
     if ($java===){
        $errors[] ="please check the box";
    }

    if ($python===""){
        $errors[]="please check the box";
    }
    if ($C===""){
        $errors[]="please check the box";
    }
  

  

    if (empty($errors)){
     foreach($skills as $skill){
        echo "<ul>";
         echo "<li>".
        htmlspecialchars($skill).
        "</li>";
        echo "</ul>";
     }
    

    }

     if (!empty($errors)){
     foreach($errors as $error){
        echo "<ul>";
         echo "<li>".
        htmlspecialchars($error).
        "</li>";
        echo "</ul>";
     }
    

    }


?>


