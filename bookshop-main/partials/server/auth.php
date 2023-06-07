<?php 

function login()
{

}


function register()
{

}

if (isset($_POST['loginemail']) && isset($_POST['loginpassword'])) {
    login($_POST['loginemail'],$_POST['loginpassword']);
}

?>