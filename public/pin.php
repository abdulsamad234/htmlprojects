<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $rows = CS50::query("SELECT * FROM admins WHERE id = ?", $_SESSION["id"]);
        $positions = [];
        foreach ($rows as $row){
            $positions[] = [
                "first_name" => $row["first_name"],
                "last_name" => $row["last_name"]
            ];
        }
        render("pin_form.php", ["positions" => $positions, "title" => "Generate Pin"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $all_keys = [];
        for ($i = 0; $i < $_POST["amount"]; $i++){
            $key = rand(100000, 10000000);
            $check = CS50::query("SELECT * FROM students WHERE pin = ?", $key);
            $check_1 = CS50::query("SELECT * FROM pins WHERE pin = ?", $key);
            while ($check == false || $check_1 == false){
                $key = rand(100000, 10000000);
                $check = CS50::query("SELECT * FROM students WHERE pin = ?", $key);
            $check_1 = CS50::query("SELECT * FROM pins WHERE pin = ?", $key);
            }
            $all_keys[] = $key;
        }
        render1("print_template.php", ["keys" => $all_keys]);
    }

?>
