<?php 
    // setcookie('mycookie','abc');
?>

<!DOCTYPE html>
<html lang="zh-TW">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>麥當勞語音點餐</title>
        <!--用jinja語法匯入網頁ico圖示-->
        <link rel="icon" href="{{ url_for('static', filename='images/turkey.ico') }}"> 
    </head> 
    <body>
        
        <!-- <header></header> -->
        <main>
            <section>
                <img src="../static/images/EVM_160x160_0619.jpg"></img>
                <h3><a href="./EVM.php">套餐</a></h3>

                <img src="../static/images/Dessert_160x160_1230.jpg"></img>
                <h3><a href="./dessert.html">點心</a></h3>

                <img src="../static/images/hsb-mfc-6pcs-carousel-211109.jpg"></img>
                <h3><a href="./hsbmfc.html">分享餐</a></h3>
            </section>
        </main>
        <!-- <aside> </aside> -->
        <!-- <footer></footer> -->
    </body>
</html>