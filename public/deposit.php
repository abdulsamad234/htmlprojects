<?php
 // configuration
    require("../includes/config.php"); 
    


 
    


    // if user reached page via GET (as by clicking a link or via redirect)
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("deposit_form.php", ["title" => "Deposit"]);
        
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $money = $_POST["amount"] * 1000;
    
        if (empty($_POST["amount"]))
        {
            apologize("You must enter the amount to deposit");
        }
        else if(preg_match("/^\d+$/", $_POST["amount"]) == false){
            apologize("You must provide a non-negative integer as amount in thousands");
        }
        else if($_POST["amount"] > 10){
            apologize("You can only deposit \$10,000 at a time");
        }
        else{
            CS50::query("UPDATE users SET cash = cash + ? WHERE id = ?", $money, $_SESSION["id"] );
            render("deposit_success.php", ["title" => "Success"]);
            redirect("/");
        }
        
    }
?>