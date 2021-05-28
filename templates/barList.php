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
<body>
<div style="position: relative; min-height: 100vh;">
<div class="container paddingFooter">
    <br>
    <div class="d-flex">

        <h3>Bar</h3>

        <a href="index.php?action=new-bar" class="btn btn-outline-primary btn-sm ms-auto my-auto">Aggiungi Bar</a>
    </div>

    <div class="table-responsive">
        <table class="table"><br>
            <thead>
            <tr>
                <th>Nome</th>
                <th>Indirizzo</th>
                <th>Città</th>
                <th>Orari</th>
                <th>Posti a sedere</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach($rs as $risultato){
                ?>
                <tr>
                    <td><?php echo $risultato['name'];?></td>
                    <td><?php echo $risultato['address'];?></td>
                    <td><?php echo $risultato['city'];?></td>
                    <td><?php echo $risultato['timetables'];?></td>
                    <td><?php echo $risultato['seats'];?></td>
                    <td><form method="post" action="index.php?action=delete-bar"><input type="hidden" id="bar" name="bar" value="<?php echo $risultato["id"];?>"><button class="btn btn-outline-primary" type="submit">Elimina</button>
                        </form></td>
                    <td><form method="post" action="index.php?action=modify-bar"><input type="hidden" id="bar" name="bar" value="<?php echo $risultato["id"];?>"><button class="btn btn-primary" type="submit">Modifica</button>
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