<?php

    // configuration
        require("../includes/config.php"); 
        $rows = CS50::query("SELECT * FROM students WHERE id = ?", $_SESSION["id"]);
        $positions = [];
        foreach ($rows as $row){
            $positions[] = [
                "first_name" => $row["first_name"],
                "last_name" => $row["last_name"]
            ];
            $class = $row["class"];
        };
        $subs = [];
        $questions = CS50::query("SELECT DISTINCT subject, class, arm FROM questions WHERE class = ?", $class);
        foreach ($questions as $question){
            $subs[] = [
                "subject" => $question["subject"]    
            ];
        }
        student_render("student_dashboard_view.php", ["positions" => $positions, "title" => "Take Exams", "subjects" => $subs]);
?>

