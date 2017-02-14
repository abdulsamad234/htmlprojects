<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        require("../views/register_form.html");
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $pin = CS50::query("SELECT * FROM pins WHERE pin = ?", $_POST["pin"]);
        $check = CS50::query("SELECT * FROM students WHERE username = ?", $_POST["username"]);
        if($_POST["password"] !== $_POST["confirmation"]){
            apologize("Passwords do not match! Go back");
        }
        else if($pin == false){
            apologize("Incorrect pin! Go back");
        }
        else if($check == true){
            apologize("Username already exists! Go back");
        }
        else{
            CS50::query("DELETE FROM pins WHERE pin = ?", $_POST["pin"]);
            CS50::query("INSERT INTO students (first_name, last_name, username, password, class, arm, pin) VALUES(?, ?, ?, ?, ?, ?, ?)", $_POST["first_name"], 
            $_POST["last_name"],$_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["class"], $_POST["arm"], $_POST["pin"]);

            {
                $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
                $id = $rows[0]["id"];
                $_SESSION["id"] = $id;
                redirect("/student_dashboard.php");
            }
        }
    }

?>