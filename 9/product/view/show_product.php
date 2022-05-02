<!DOCTYPE html>
<html lang="en" lang="fa-IR" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css" >
    <title>محصولات</title>
</head>
<body>
    <h1>محصولات</h1>
    <?php
        if (count($product)==0) {
            echo"<p>can't find product</p>";
        } else {
            echo"<div class='grid'>";
            foreach ($product as $product) {
                include "template/card.php";
            }
            echo"</div>";
        }
        
    ?>
</body>
</html>