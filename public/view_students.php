<?php

    // configuration
        require("../includes/config.php"); 
        $rows = CS50::query("SELECT * FROM admins WHERE id = ?", $_SESSION["id"]);
        $positions = [];
        $student_count = ["jss1" => 0, "jss2" => 0, "jss3" => 0,"sss1" => 0,"sss2" => 0,"sss3" => 0];
        foreach ($rows as $row){
            $positions[] = [
                "first_name" => $row["first_name"],
                "last_name" => $row["last_name"]
            ];
        }
        $students = CS50::query("SELECT * FROM students");
        $student_info = [];
        foreach ($students as $student){
            if($student["class"] == "jss_1a" || $student["class"] == "jss_1b" || $student["class"] == "jss_1c"){
                $student_count["jss1"] = $student_count["jss1"] + 1;
            }
            else if($student["class"] == "jss_2a" || $student["class"] == "jss_2b" || $student["class"] == "jss_2c"){
                $student_count["jss2"] = $student_count["jss2"] + 1;
            }
            else if($student["class"] == "jss_3a" || $student["class"] == "jss_3b" || $student["class"] == "jss_3c"){
                $student_count["jss3"] = $student_count["jss3"] + 1;
            }
            else if($student["class"] == "sss_1a" || $student["class"] == "sss_1b" || $student["class"] == "sss_1c"){
                $student_count["sss1"] = $student_count["sss1"] + 1;
            }
            else if($student["class"] == "sss_2a" || $student["class"] == "sss_2b" || $student["class"] == "sss_2c"){
                $student_count["sss2"] = $student_count["sss2"] + 1;
            }
            else if($student["class"] == "sss_3a" || $student["class"] == "sss_3b" || $student["class"] == "sss_3c"){
                $student_count["sss3"] = $student_count["sss3"] + 1;
            }
            $student_info[] = [
                "first_name" => $student["first_name"],
                "last_name" => $student["last_name"],
                "username" => $student["username"],
                "class" => $student["class"],
                "pin" => $student["pin"]
            ];
        }
        render("view_students_view.php", ["positions" => $positions, "title" => "View Students", "student_info" => $student_info, "student_count" => $student_count]);
?>

