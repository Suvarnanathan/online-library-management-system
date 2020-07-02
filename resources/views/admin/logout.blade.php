<?php
session_start();
if($_SESSION['username']){
    unset($_SESSION['username']);
    return redirect('/admin');
}

?>