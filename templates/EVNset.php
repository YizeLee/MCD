<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>麥當勞語音點餐</title>
        <link rel="icon" href="{{ url_for('static', filename='images/turkey.ico') }}"> 
    </head>    
    <body>
        <?php
            $EVM = $_GET["EVM"];
            $name = $_GET["name"];
            $price = $_GET["price"];

            if ($EVM != null && $name != null) {
            
            echo "<img src=" . $EVM . "></img><br/>";
            echo $name . "<br />";
            }
        ?>
        <img src="../static/images/EVM/EVM-set/EVM_Combo-A.jpg"></img>
        <h3><a href="./order.php?<?php echo "EVM=" . $EVM ?>&<?php echo "price=" . $price + 35 ?>&EVMset=../static/images/EVM/EVM-set/EVM_Combo-A.jpg">薯條+飲料</a></h3>
        <h2>+35元</h2>


        <img src="../static/images/EVM/EVM-set/EVM_Combo-B.jpg"></img>
        <h3><a href="./order.php?<?php echo "EVM=" . $EVM ?>&EVMset=../static/images/EVM/EVM-set/EVM_Combo-B.jpg">沙拉+飲料</a></h3>

        <img src="../static/images/EVM/EVM-set/EVM_Combo-D.jpg"></img>
        <h3><a href="./order.php?<?php echo "EVM=" . $EVM ?>&EVMset=../static/images/EVM/EVM-set/EVM_Combo-D.jpg">炸雞+飲料</a></h3>
    </body>
</html>
