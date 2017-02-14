<!DOCTYPE html>
<html>
<table>
    <head>
        <title>Print Pins</title>
        <link href = "../css/print_template.css" rel = "stylesheet" type = "text/css">
        
    </head>
    <body>
        <table>
            <?php
                $rows = (count($keys) / 10);
                $low = 0;
                $high = 10;
                for ($i = 1; $i <= $rows + 1; $i++){
                    print("<tr>");
                    for ($j = $low; $j < $high; $j++){
                        if($j >= count($keys)){
                            $keys[$j] = null;
                        }
                        if($keys[$j] != null){
                            print("<td>Pin: {$keys[$j]}</td>");    
                        }
                        else{
                            print("<td>none</td>");
                        }
                    }
                    print("</tr>");
                        $low += 10;
                        $high += 10; 
                    
                }
                
            ?>
        </table>
    </body>
</html>