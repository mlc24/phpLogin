<?php
?>
<title>titulo</title>
<section class="index-login">
    <div class = "wrapper">
        <div class="index-login-signup">
            <h4>signup</h4>
            <p>Nao tem um aconta? faca signup agora</p>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Nome">
                <input type="text" name="pwd" placeholder="Senha">
                <br>
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="pwdRep" placeholder="Repita Senha">
                <br>
                <button type="submit" name="submit">signup</button>
            </form>
        </div>
        <div class="index-login-login">
            <h4>login</h4>
            <p>Nao tem um aconta? faca signup agora</p>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="uid" placeholder="Nome">
                <input type="text" name="pwd" placeholder="Senha">
                <br>
                <button type="submit" name="submit">login</button>
            </form>
        </div>
    </div>
</section>
