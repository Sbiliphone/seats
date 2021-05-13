<?php
require('../templates/header.php');
?>
<?php
require('../templates/menu.php');
?>

<div style="display: none">
    <?php
    global $db;
    $sql = "SELECT * FROM Bar ;";
    $rs = $db->execute($sql);
    ?>

</div>

<div class="container">
    <br>
    <div class="d-flex">

        <h3>Bar</h3>

        <a href="index.php?action=new-bar" class="btn btn-primary btn-sm ms-auto my-auto">Aggiungi Bar</a>
    </div>

    <div class="table-responsive">
        <table class="table"><br>
            <thead>
            <tr>
                <th>Nome</th>
                <th>Indirizzo</th>
                <th>Città</th>
                <th>Posti a sedere</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($rs as $risultato){
                ?>
                <tr>
                    <th><?php echo $risultato['name'];?></th>
                    <th><?php echo $risultato['address'];?></th>
                    <th><?php echo $risultato['city'];?></th>
                    <th><?php echo $risultato['seats'];?></th>
                    <th><form method="post" action="index.php?action=delete-bar"><input type="hidden" id="bar" name="bar" value="<?php echo $risultato["id"];?>"><button class="btn btn-primary" type="submit">Elimina</button>
                        </form></th>
                    <th><form method="post" action="index.php?action=modify-bar"><input type="hidden" id="bar" name="bar" value="<?php echo $risultato["id"];?>"><button class="btn btn-primary" type="submit">Modifica</button>
                        </form></th>
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