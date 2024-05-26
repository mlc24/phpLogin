<?php

if(isset($_POST["submit"]))
    {
        //pegando dados
        $uid = $_POST["uid"];
        $pwd = $_POST["pwd"];
        $pwdRep = $_POST["pwdRep"];
        $email = $_POST["email"];

        //instancia da classe SignupContr

        include "../classes/dbh.classes.php";
        include "../classes/signup.classes.php";
        include "../classes/signup-contr.classes.php";

        //$signup vira objeto da classe SignupContr
        $signup = new SignupContr($uid, $pwd, $pwdRep, $email);

        //rodar handlers de erro e signup
        $signup->signupUser();

        //voltar pra frontpage
        header("location ../indexPhp.php?error=none");

    }