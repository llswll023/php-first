<?php

setcookie('name', 'Brad', time() + 86400);//1day, 86400*30=30days

if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}

setcookie('name', '', time() - 86400); //unset cookie
?>