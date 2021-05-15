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
    }else if($_SESSION['order'] == "hour"){
        $sql = "SELECT * FROM Report ORDER BY hour";
        $rs = $db->execute($sql);
    }
    ?>

</div>

<div class="container">
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
                <th>Ora</th>
                <th>Bar</th>
                <th>User</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <select onchange="location.href='index.php?action=report-list-'+this.value" ="<?php echo $_SESSION['order']?>">
                <option value="default" <?php if($_SESSION['order'] == 'default'){echo ("selected");} ?>>Riordina per:</option>
                <option value="used" <?php if($_SESSION['order'] == 'used'){echo ("selected");} ?>>Posti a sedere</option>
                <option value="date" <?php if($_SESSION['order'] == 'date'){echo ("selected");} ?>>Data</option>
                <option value="hour" <?php if($_SESSION['order'] == 'hour'){echo ("selected");} ?>>Ora</option>
                <option value="day" <?php if($_SESSION['order'] == 'day'){echo ("selected");} ?>>Giorno</option>
                <option value="bar" <?php if($_SESSION['order'] == 'bar'){echo ("selected");} ?>>Bar</option>
                <option value="user" <?php if($_SESSION['order'] == 'user'){echo ("selected");} ?>>User</option>
            </select>

            <?php
            foreach($rs as $risultato){
                ?>
                <tr>
                    <th><?php echo $risultato['used'];?></th>
                    <th><?php echo $risultato['day'];?></th>
                    <th><?php echo $risultato['fullDate'];?></th>
                    <th><?php echo $risultato['hour'];?></th>
                    <th>
                        <div style="display: none">
                        <?php  $bar = $risultato['bar'];
                        $sql = "SELECT name FROM Bar WHERE id='$bar';";
                        $rs = $db->execute($sql);
                        ?>
                        </div>

                        <?php
                            foreach($rs as $risultatoBar) {
                                echo $risultatoBar['name'];
                            }?></th>
                    <th>

                        <div style="display: none">
                        <?php  $user = $risultato['user'];
                        $sql = "SELECT username FROM User WHERE id='$user';";
                        $rs = $db->execute($sql);
                        ?>
                        </div>

                        <?php

                            foreach($rs as $risultatoUser) {
                                echo $risultatoUser['username'];
                            }?></th>
                    <th><form method="post" action="index.php?action=delete-report"><input type="hidden" id="report" name="report" value="<?php echo $risultato["id"];?>"><button class="btn btn-primary" type="submit">Elimina</button>
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