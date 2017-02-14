<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("quote_form.php", ["title" => "Get Quote"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // validate submission
        if (empty($_POST["symbol"]))
        {
            apologize("You must enter a symbol");
        }
        else if(lookup($_POST["symbol"]) == false){
            apologize("Enter a valid symbol");
        }
        else 
        {
            $price = lookup($_POST["symbol"]);
            $price["price"] = number_format($price["price"], 2, ".", ",");
            $_POST["name"] = $price["name"];
            $_POST["price"] = $price["price"];
            render("quote_display.php", ["title" => "Quote"]);
        }
    }

?>