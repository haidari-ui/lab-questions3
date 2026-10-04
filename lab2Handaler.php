 <?php
        $search=$_GET['search-bar'];
        if(empty($search)){
            echo "please enter some text";
        }
        else{
            echo "you have serched for :".htmlspecialchars($search);
        }
        
    
    ?>