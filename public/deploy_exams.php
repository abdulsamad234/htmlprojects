<?php

    require("../includes/config.php");
    $row2 = CS50::query("SELECT * FROM admins WHERE id = ?", $_SESSION["id"]);
    $positions = [];
    foreach ($row2 as $row){
        $positions[] = [
            "first_name" => $row["first_name"],
            "last_name" => $row["last_name"]
        ];
    
        
    }
    $undeployed_questions = CS50::query("SELECT DISTINCT subject, class, arm FROM questions");
    $deployed_questions = CS50::query("SELECT DISTINCT subject, class, arm FROM deployedexamsquestions");
    $dq = [];
    foreach ($deployed_questions as $deployed_question){
        $dq[] = [
            "subject" => $deployed_question["subject"],
            "class" => $deployed_question["class"],
            "arm" => $deployed_question["arm"]
            ];
    }
    $uq = [];
    foreach ($undeployed_questions as $undeployed_question){
        $uq[] = [
            "subject" => $undeployed_question["subject"],
            "class" => $undeployed_question["class"],
            "arm" => $undeployed_question["arm"],
            ];
    }
    render("deploy_exam_view.php",["positions" => $positions,"title" => "Deploy Exams", "undeployed_questions" => $uq, "deployed_questions" => $dq]);    
?>

