
<table style = "width: 100%; max-width: 100%; margin-bottom: 20px; background-color: transparent; border-spacing: 0; border-collapse: collapse;" class = "tabble table-striped">
    <thead style = "display: table-header-group; vertical-align: middle; border-color: inherit">
        <tr style = "display: table-row; vertical-align: inherit; border-color: inherit;">
            <th style = "vertical-align: bottom; border-bottom: 2px solid #ddd;padding: 8px; line-height: 1.42857143;">Transaction</th>
            <th style = "vertical-align: bottom; border-bottom: 2px solid #ddd;padding: 8px; line-height: 1.42857143;">Date Time</th>
            <th style = "vertical-align: bottom; border-bottom: 2px solid #ddd;padding: 8px; line-height: 1.42857143;">Symbol</th>
            <th style = "vertical-align: bottom; border-bottom: 2px solid #ddd;padding: 8px; line-height: 1.42857143;">Shares</th>
            <th style = "vertical-align: bottom; border-bottom: 2px solid #ddd;padding: 8px; line-height: 1.42857143;">Price</th>
        </tr>
    </thead>
    <tbody style ="display: table-row-group;vertical-align: middle;border-color: inherit;">
    <?php

        foreach ($positions as $position)
        {
            $price = number_format($position["price"], 4, ".", ",");
            print("<tr style = 'display: table-row; vertical-align: inherit; border-color: inherit;background-color: #f9f9f9;'>");
            print("<td style = 'text-align: left;padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;'>{$position["transaction"]}</td>");
            print("<td style = 'text-align: left;padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;'>{$position["time"]}</td>");
            print("<td style = 'text-align: left;padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;'>{$position["symbol"]}</td>");
            print("<td style = 'text-align: left;padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;'>{$position["shares"]}</td>");
            print("<td style = 'text-align: left;padding: 8px;line-height: 1.42857143;vertical-align: top;border-top: 1px solid #ddd;'>\${$price}</td>");
            print("</tr>");
            
        }

    ?>
    
    
    </tbody>
</table>