<?php
//echo $_GET("cadena");
//echo $_POS("cadena");
//echo $_REQUEST("cadena");
//print_r ($_REQUEST);
//print_r ($_SERVER);
if($_REQUEST("cadena") != ""){
    header("location: menu.php");
    //exit();
}else{
    header("location: index.php?error=1");
    //error=1
    //exit();
}


//if($cadena) != ""){
  //  header("location: menu.php?cadena=");
    //exit();
//}else{
  //  header("location: index.php?error=1&cadena=demo");
    //error=1
    //exit();
//}
?>