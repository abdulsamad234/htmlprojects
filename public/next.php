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
    $_SESSION["current_question"] = $_POST["question"];
    CS50::query("INSERT INTO questions (question, a, b, c, d, e, correct_answer, subject, class, arm) VALUES
    (?,?,?,?,?,?,?,?,?,?)", $_POST["question"], $_POST["a"], $_POST["b"],$_POST["c"],
    $_POST["d"], $_POST["e"], $_POST["correct_answer"], $_SESSION["current_subject"], $_SESSION["current_class"], $_SESSION["current_arm"]);
    $_SESSION["question_number"] += 1;
    render("add_questions_view.php",["positions" => $positions,"title" => "Add Questions", "question_number" => $_SESSION["question_number"]]);    
?>

