<?php

    require("../includes/config.php");
    $class = "";
    
    $row2 = CS50::query("SELECT * FROM students WHERE id = ?", $_SESSION["id"]);
    $positions = [];
    foreach ($row2 as $row){
        $positions[] = [
            "first_name" => $row["first_name"],
            "last_name" => $row["last_name"]
        ];
        $class = $row["class"];
        
    }
    $questions = CS50::query("SELECT * FROM questions where subject = ? AND class = ? ORDER BY RAND()", $_GET["sub"], $class);
    $_SESSION["question_number"] = 1;
    $questions_array = [];
    foreach ($questions as $question){
        $questions_array[] = [
            "id" => $question["id"],
            "question"  =>$question["question"],
            "a" => $question["a"],
            "b" => $question["b"],
            "c" => $question["c"],
            "d" => $question["d"],
            "e" => $question["e"],
            "correct_answer" => $question["correct_answer"] 
        ];
        
    }
    
    student_render("student_exam_view.php", ["positions" => $positions, "title" => $_GET["sub"]." Exam", "questions" => $questions_array]);
    
    
?>

