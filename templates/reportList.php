<?php
require('../templates/header.php');
?>
<?php
require('../templates/menu.php');
?>

<div style="display: none">
    <?php
    global $db;
    if($_SESSION['order'] == "default"){
        $sql = "SELECT * FROM Report;";
        $rs = $db->execute($sql);
    }else if($_SESSION['order'] == "date"){
        $sql = "SELECT * FROM Report ORDER BY fullDate;";
        $rs = $db->execute($sql);
    }else if($_SESSION['order'] == "day"){
        $sql = "SELECT * FROM Report ORDER BY day;";
        $rs = $db->execute($sql);
    }else if($_SESSION['order'] == "used"){
        $sql = "SELECT * FROM Report ORDER BY used;";
        $rs = $db->execute($sql);
    }else if($_SESSION['order'] == "user"){
        $sql = "SELECT * FROM Report ORDER BY user";
        $rs = $db->execute($sql);
    }else if($_SESSION['order'] == "bar"){
        $sql = "SELECT * FROM Report ORDER BY bar";
        $rs = $db->execute($sql);
    }
    ?>

</div>
<div style="position: relative; min-height: 100vh;">
<div class="container paddingFooter">
    <br>
    <div class="d-flex">
        <h3>Report</h3>

    </div>

    <div class="table-responsive">
        <table class="table"><br>
            <thead>
            <tr>
                <th>Posti usati</th>
                <th>Giorno settimana</th>
                <th>Data</th>
                <th>Bar</th>
                <th>User</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <select class="form-select" style="width: 13%" onchange="location.href='index.php?action=report-list-'+this.value" ="<?php echo $_SESSION['order']?>">
                <option value="default" <?php if($_SESSION['order'] == 'default'){echo ("selected");} ?>>Riordina per:</option>
                <option value="used" <?php if($_SESSION['order'] == 'used'){echo ("selected");} ?>>Posti a sedere</option>
                <option value="date" <?php if($_SESSION['order'] == 'date'){echo ("selected");} ?>>Data</option>
                <option value="day" <?php if($_SESSION['order'] == 'day'){echo ("selected");} ?>>Giorno</option>
                <option value="bar" <?php if($_SESSION['order'] == 'bar'){echo ("selected");} ?>>Bar</option>
                <option value="user" <?php if($_SESSION['order'] == 'user'){echo ("selected");} ?>>User</option>
            </select>
            <br>

            <?php
            foreach($rs as $risultato){
                ?>
                <tr>
                    <td><?php echo $risultato['used'];?></td>
                    <td><?php echo $risultato['day'];?></td>
                    <td><?php echo $risultato['fullDate'];?></td>
                    <td>
                        <div style="display: none">
                        <?php  $bar = $risultato['bar'];
                        $sql = "SELECT name FROM Bar WHERE id='$bar';";
                        $rs = $db->execute($sql);
                        ?>
                        </div>

                        <?php
                            foreach($rs as $risultatoBar) {
                                echo $risultatoBar['name'];
                            }?></td>
                    <td>

                        <div style="display: none">
                        <?php  $user = $risultato['user'];
                        $sql = "SELECT username FROM User WHERE id='$user';";
                        $rs = $db->execute($sql);
                        ?>
                        </div>

                        <?php

                            foreach($rs as $risultatoUser) {
                                echo $risultatoUser['username'];
                            }?></td>
                    <td><form method="post" action="index.php?action=delete-report"><input type="hidden" id="report" name="report" value="<?php echo $risultato["id"];?>"><button class="btn btn-primary" type="submit">Elimina</button>
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