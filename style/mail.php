</<?php 

if($_POST['message']){
    mail("eugenalx@gmail.com", "Merge emailul", $_POST['message']."from");
    echo "hurray";
}


?>