<?php

    // configuration
require("../includes/config.php"); 
$rows = CS50::query("SELECT time, transaction, symbol, shares, price FROM history WHERE user_id = ?", $_SESSION["id"]);

$positions = [];


foreach ($rows as $row)
{
    
        $positions[] = [
            "time" => $row["time"],
            "transaction" => $row["transaction"],
            "shares" => $row["shares"],
            "symbol" => $row["symbol"],
            "price" => $row["price"]
            
        ];
         
    
}


    // render portfolios
    render("history_display.php", ["positions" => $positions, "title" => "History"]);
   


?>
