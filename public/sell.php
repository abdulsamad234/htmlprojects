<?php
 // configuration
    require("../includes/config.php"); 
    $rows = CS50::query("SELECT symbol, shares FROM portfolios WHERE user_id = ?", $_SESSION["id"]);
    $cash = CS50::query("SELECT cash FROM users WHERE id = ?", $_SESSION["id"]);
    if($rows == false){
            apologize("You have no stock(s) to sell");
        }
$positions = [];
foreach($cash as $buck){
    $money = $buck["cash"];
}

foreach ($rows as $row)
{
    $stock = lookup($row["symbol"]);
    if ($stock !== false)
    {
        $positions[] = [
            "name" => $stock["name"],
            "price" => number_format($stock["price"], 2, ".", ","),
            "shares" => $row["shares"],
            "symbol" => $row["symbol"]
            
        ];
        $total = $stock["price"] * $row["shares"];
        
    }
    
}


    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("sell_form.php", ["title" => "Sell", "positions" => $positions]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $currentprice = lookup($_POST["symbol"]);
        $shares = CS50::query("SELECT shares FROM portfolios WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
        foreach ($shares as $share){
            $sharelast = $share["shares"];
        }
        
        $mon = $sharelast * $currentprice["price"];
      
        $transaction = "SELL";
        // validate submission
        if (empty($_POST["symbol"]))
        {
            apologize("You must provide the symbol you want to sell.");
        }
        else{
            CS50::query("INSERT INTO history (user_id, transaction, symbol, shares, price) VALUES( ?, ?, ?, ?, ?)", $_SESSION["id"], $transaction, $_POST["symbol"], $sharelast,$mon);
            CS50::query("DELETE FROM portfolios WHERE user_id = ? AND symbol = ?", $_SESSION["id"], $_POST["symbol"]);
            CS50::query("UPDATE users SET cash = cash + ? where id = ?", $total, $_SESSION["id"]);
            render("sell_success.php", ["title" => "Success"]);
            redirect("/");
        }
        
    }
?>