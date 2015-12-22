<?php
if(isset($_POST['submit-logoff'])){
    session_start();
    session_unset($_SESSION['logado']);
    header("Location: home");
}