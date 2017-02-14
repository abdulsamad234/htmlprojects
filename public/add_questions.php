<?php

    require("../includes/config.php"); 
    $_SESSION["current_subject"] = $_POST["subject"];
    $_SESSION["current_class"] = $_POST["class"];
    $_SESSION["current_arm"] = $_POST["arm"];
    $row2 = CS50::query("SELECT * FROM admins WHERE id = ?", $_SESSION["id"]);
    $positions = [];
    foreach ($row2 as $row){
        $positions[] = [
            "first_name" => $row["first_name"],
            "last_name" => $row["last_name"]
        ];
    
        
    }
    
    $_SESSION["question_number"] = 1;
    render("add_questions_view.php",["positions" => $positions,"title" => "Add Questions", "question_number" => $_SESSION["question_number"]]);    
?>

