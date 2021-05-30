<?php
require('../templates/header.php');
require('../templates/menu.php');
?>

<div style="display: none">
    <?php
    global $db;
    $sql = "SELECT * FROM User ;";
    $rs = $db->execute($sql);
    ?>
</div>
<div style="position: relative; min-height: 100vh;">
<div class="container paddingFooter">
    <br>
    <div class="d-flex">
        <h3>Utenti</h3>

        <a href="index.php?action=new-user" class="btn btn-outline-primary btn-sm ms-auto my-auto">Crea utente</a>
    </div>

    <div class="table-responsive">
        <table class="table"><br>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Admin</th>
                    <th>Verificato</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($rs as $risultato){
                    ?>
                    <tr>
                        <td><?php echo $risultato['username'];?></td>
                        <td><?php echo $risultato['email'];?></td>
                        <td><?php echo $risultato['name'];?></td>
                        <td><?php echo $risultato['lastname'];?></td>
                        <td><?php if ($risultato['isAdmin'] == 1) {
                                echo "Si";
                            }else{
                            echo "No";
                            }?></td>
                        <td><?php if ($risultato['isVerified'] == 1) {
                                echo "Si";
                            }else{
                                echo "No";
                            }?></td>
                        <td><form method="post" action="index.php?action=delete-user"><input type="hidden" id="user" name="user" value="<?php echo $risultato["id"];?>"><button class="btn btn-outline-primary" type="submit">Elimina</button>
                        </form></td>
                        <td><form method="post" action="index.php?action=modify-user"><input type="hidden" id="user" name="user" value="<?php echo $risultato["id"];?>"><button class="btn btn-primary" type="submit">Modifica</button>
                        </form></td>
                    </tr>
                    <?php
                }
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php
    require('../templates/footer.php');
?> 