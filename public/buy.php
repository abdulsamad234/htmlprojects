<?php
 // configuration
    require("../includes/config.php"); 
    $cash = CS50::query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
    $positions = [];
    foreach($cash as $buck){
        $money = $buck["cash"];
    }


 
    


    // if user reached page via GET (as by clicking a link or via redirect)
    
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("buy_form.php", ["title" => "Buy"]);
        
    }
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $stock = lookup($_POST["symbol"]);
        $total = $stock["price"] * $_POST["shares"];
        $symbol = strtoupper($_POST["symbol"]);
        $transaction = "BUY";
        // validate submission
        if (empty($_POST["symbol"]))
        {
            apologize("You must provide the symbol you want to buy.");
        }
        else if(empty($_POST["shares"])){
            apologize("Provide the amount of shares to buy");
        }
        else if(preg_match("/^\d+$/", $_POST["shares"]) == false){
            apologize("You must provide a non-negative integer as shares");
        }
        else if($total > $money){
            apologize("You do not have enough money!");
        }
        else{
            CS50::query("INSERT INTO history (user_id, transaction, symbol, shares, price) VALUES( ?, ?, ?, ?, ?)", $_SESSION["id"], $transaction, $symbol, $_POST["shares"],$total );
            CS50::query("INSERT INTO portfolios (user_id, symbol, shares) VALUES(?, ?, ?) ON DUPLICATE KEY UPDATE shares = shares + ?", $_SESSION["id"], $symbol, $_POST["shares"], $_POST["shares"]);
            CS50::query("UPDATE users SET cash = cash - ? where id = ?", $total, $_SESSION["id"]);
            render("buy_success.php", ["title" => "Success"]);
            redirect("/");
        }
        
    }
?>