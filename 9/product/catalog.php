<?php
include "../lib/db.php";
include "../lib/settings.php";

//connect
$dbc = new DB($dbHost,$dbUser,$dbPass,$dbName,$dbcharset);

//select qurey
$sql = "SELECT * FROM product
ORDER BY id DESC
LIMIT 15";
//EXECUTE QUERY
$result =$dbc -> query($sql);
$product=$dbc -> fetchAll();
//Var_dump

$dbc -> close();

// include view
include "view/show_product.php";;

?>