<?php
require('../templates/header.php');
?>
<?php
require('../templates/menu.php');
?>
    <div style="position: relative; min-height: 100vh;">
    <div class="container paddingFooter">
        <form method="post" action="index.php?action=set-password">
            <h3>Cambia password</h3>
            <div class="mb-3">
                <label for="newPassword_first" class="form-label">Nuova password</label>
                <input type="password" class="form-control" id="newPassword_first" name="newPassword_first">
            </div>
            <div class="mb-3">
                <label for="newPassword_second" class="form-label">Ripeti nuova password</label>
                <input type="password" class="form-control" id="newPassword_second" name="newPassword_second">
            </div>


            <div class="d-flex">
                <button type="submit" class="btn btn-primary">Aggiorna</button>
                <?php
                if (isset($_SESSION['change_password_error'])) {
                    ?>
                    <div class="text-danger my-auto ms-3"><?= $_SESSION['change_password_error']; ?></div>
                    <?php
                }
                ?>
            </div>
        </form>
    </div>

<?php
require('../templates/footer.php');
?>