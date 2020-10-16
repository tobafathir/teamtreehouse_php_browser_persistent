<?php

$password="paSsword";

$encrypt_password=password_hash($password,PASSWORD_BCRYPT);

echo $encrypt_password;

if (password_verify('paSsword',$encrypt_password))
{
    echo "You Have acces to this page";
}else{
    echo "you dont have acces to this page";
}