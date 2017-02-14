<?php

        require("../includes/config.php"); 
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            $rows = CS50::query("SELECT * FROM admins WHERE id = ?", $_SESSION["id"]);
            $positions = [];
            $student_count = ["jss1" => 0, "jss2" => 0, "jss3" => 0,"sss1" => 0,"sss2" => 0,"sss3" => 0];
            foreach ($rows as $row){
                $positions[] = [
                    "first_name" => $row["first_name"],
                    "last_name" => $row["last_name"]
                ];
            }
            $subjects = CS50::query("SELECT * FROM subjects");
            $jss1 = [];
            $jss2 = [];
            $jss3 = [];
            $sss1 = [];
            $sss2 = [];
            $sss3 = [];
            foreach ($subjects as $subject){
                if($subject["jss_1"] == TRUE){
                    $jss1[] = $subject["subject"];
                }
                if($subject["jss_2"] == TRUE){
                    $jss2[] = $subject["subject"];
                }
                if($subject["jss_3"] == TRUE){
                    $jss3[] = $subject["subject"];
                }
                if($subject["sss_1"] == TRUE){
                    $sss1[] = $subject["subject"];
                }
                if($subject["sss_2"] == TRUE){
                    $sss2[] = $subject["subject"];
                }
                if($subject["sss_3"] == TRUE){
                    $sss3[] = $subject["subject"];
                }
            }
            render("add_subject_view.php", ["positions" => $positions, "title" => "Add Subject", "student_count" => $student_count
            , "jss1" => $jss1, "jss2" => $jss2, "jss3" => $jss3, "sss1" => $sss1, "sss2" => $sss2, "sss3" => $sss3]);     
            }
            else if($_SERVER["REQUEST_METHOD"] == "POST"){
                $subjects = CS50::query("SELECT * FROM subjects");
                $subject_exists = false;
                foreach ($subjects as $subject){
                    if($_POST["subject"] == $subject["subject"]){
                        $subject_exists = true;
                    }
                    else{
                        $subject_exists = false;
                    }
                }
                if($subject_exists == true){
                    CS50::query("INSERT INTO subjects (?) VALUES (1)", $_POST["class"]);
                }
                else{
                    CS50::query("INSERT INTO subjects (".$_POST["class"].", subject) VALUES (1,?)", $_POST["subject"]);
                }
                redirect("add_subject.php");
            }
        
?>

