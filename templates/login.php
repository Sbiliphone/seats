<?php
require('../templates/header.php');
require('../templates/menu.php');
?>

<div class="container my-auto">
    <center>
    <form method="post" action="?action=login-check">
        <div class="mb-3">
            <h2 class="mb-0">Log in</h2><br>

            <label for="username" class="form-label">Username</label>
            <input style="width: 200px" type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
            <div id="usernameHelp" class="form-text">Inserisci il tuo nome utente.</div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input style="width: 200px"  type="password" class="form-control" id="password" name="password">
            </div>
        </div>

            <button type="submit" class="btn btn-primary">Accedi</button>
            <?php
            if (isset($_SESSION['messaggio'])) {
                ?>
                <div class="text-danger my-auto ms-3"><?= $_SESSION['messaggio']; ?></div>
                <?php
            }
            ?><br><br>
        <p>Se non sei registrato clicca qui!</p>
        <a href="index.php?action=new-user" class="btn btn-outline-primary">Registrati</a>
        </div>

    </form>
    </center>
</div>

<?php
require('../templates/footer.php');
?>
