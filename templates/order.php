<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $EVM = $_GET["EVM"];
    $EVMset = $_GET["EVMset"];
    $price = $_GET["price"];

    if (($EVM != null) && ($EVMset != null)) {
        echo "<img src=" . $EVM . "></img><br/>";
        echo "<img src=" . $EVMset . "></img><br/>";
        echo "小計：" . $price . "元</img>";
    }
    ?>

    <select onchange="amount();">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>

    <script type="text/javascript">
        amount();
    </script>
    總金額：<span class="shopping_w2" id="amount">0</span>元
</body>

</html>