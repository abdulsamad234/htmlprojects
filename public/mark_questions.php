<?php

    require("../includes/config.php"); 
    $row2 = CS50::query("SELECT * FROM students WHERE id = ?", $_SESSION["id"]);
    $positions = [];
    foreach ($row2 as $row){
        $positions[] = [
            "first_name" => $row["first_name"],
            "last_name" => $row["last_name"]
        ];
    
        
    }
    $correct = 0;
    $incorrect = 0;
    $unanswered = 0;
    $total = 0;
    foreach($_SESSION["question_id"] as $id){
        foreach($id as $i){
            $checks = CS50::query("SELECT * FROM questions WHERE id = ?", $i);
            foreach ($checks as $check){
                if(isset($_POST[$i]) && $check["correct_answer"] == $_POST[$i]){
                    $correct++;
                }
                else if(isset($_POST[$i]) && $check["correct_answer"] != $_POST[$i]){
                    $incorrect++;
                }
                else{
                    $unanswered++;
                }
                $total++;
            }
        }
    }
    $score = ($correct / $total) * 100;
    student_render("view_score.php", ["score" => $score, "total" => $total, "correct" => $correct, "incorrect" => $incorrect, "unanswered" => $unanswered]);
    
    //render("add_questions_view.php",["positions" => $positions,"title" => "Add Questions", "question_number" => $_SESSION["question_number"]]);    
?>

