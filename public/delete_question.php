<?php

    require("../includes/config.php"); 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST["delete"])){
            foreach($_POST["delete"] as $to_delete){
                CS50::query("DELETE FROM questions WHERE id = ?", $to_delete);
                redirect("manage_questions.php");
            }
        }
        else{
            apologize("Please choose questions to delete");
        }
    }
?>

