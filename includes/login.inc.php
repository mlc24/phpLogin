<?php

if(isset($_POST["submit"]))
    {
        //pegando dados
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];

        //instancia da classe SignupContr

        include "../classes/dbh.classes.php";
        include "../classes/login.classes.php";
        include "../classes/login-contr.classes.php";

        //$signup vira objeto da classe SignupContr
        $login = new LoginContr($uid, $pwd);

        //rodar handlers de erro e signup
        $login->loginUser();

        //voltar pra frontpage
        header("location ../indexPhp.php?error=none");

    }