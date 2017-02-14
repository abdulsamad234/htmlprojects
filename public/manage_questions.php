<?php

        require("../includes/config.php"); 
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $rows = CS50::query("SELECT * FROM admins WHERE id = ?", $_SESSION["id"]);
            $positions = [];
            foreach ($rows as $row){
                $positions[] = [
                    "first_name" => $row["first_name"],
                    "last_name" => $row["last_name"]
                ];
            }
            $subjects = CS50::query("SELECT * FROM subjects");
            $subs =[];
            foreach ($subjects as $subject){
                    $subs[] = ["subject" => $subject["subject"]];
                
            }
            render("manage_questions_view.php", ["positions" => $positions, "title" => "Manage Questions", "subjec" => $subs]);     
            }
            else if($_SERVER["REQUEST_METHOD"] == "POST"){
                $questions = CS50::query("SELECT * FROM questions WHERE subject = ? AND class = ?", $_POST["subject"], $_POST["class"]);
                $quests = [];
                foreach($questions as $question){
                    $quests[] = [
                        "id" => $question["id"],
                        "question" => $question["question"],
                        "a" => $question["a"],
                        "b" => $question["b"],
                        "c" => $question["c"],
                        "d" => $question["d"],
                        "e" => $question["e"],
                        
                        "correct_answer" => $question["correct_answer"]
                    ];
                }
                $row2 = CS50::query("SELECT * FROM admins WHERE id = ?", $_SESSION["id"]);
                $positions = [];
                foreach ($row2 as $row){
                    $positions[] = [
                        "first_name" => $row["first_name"],
                        "last_name" => $row["last_name"]
                    ];
                }
                
                render("view_questions_view.php",["positions" => $positions,"title" => "View Questions", "questions" => $quests]);
            }
        
?>

