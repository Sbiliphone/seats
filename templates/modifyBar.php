<?php
require('../templates/header.php');
?>
<?php
require('../templates/menu.php');
$id=$_REQUEST['bar'];
?>
    <div style="display: none">
        <?php
        global $db;
        $sql="SELECT * FROM Bar WHERE id='$id';";
        $rs = $db->execute($sql);
        ?>
    </div>
<?php

foreach($rs as $risultato){
    ?>
    <div class="container">
        <form name="user" action="index.php?action=update-bar" method="post">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group"><label for="user_username" class="required">Nome</label><input type="text" id="name" name="name" required="required" maxlength="180" class="form-control"  value="<?php echo $risultato['name'];?>"></div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group"><label for="user_email" class="required">Indirizzo</label><input type="text" id="address" name="address" required="required" maxlength="180" class="form-control" value="<?php echo $risultato['address'];?>"></div>
                </div>
                <div class="col-md mb-3">
                    <div class="form-group"><label for="user_firstname">Città</label><input type="text" id="city" name="city" class="form-control" value="<?php echo $risultato['city'];?>"></div>
                </div>
                <div class="col-md mb-3">
                    <div class="form-group"><label for="user_firstname">Latitudine</label><input type="text" id="latitude" name="latitude" class="form-control" value="<?php echo $risultato['latitude'];?>"></div>
                </div>
                <div class="col-md mb-3">
                    <div class="form-group"><label for="user_lastname">Longitudine</label><input type="text" id="longitude" name="longitude" class="form-control" value="<?php echo $risultato['longitude'];?>"></div>
                </div>
                <div class="col-md mb-3">
                    <div class="form-group"><label for="user_lastname">Posti</label><input type="text" id="seats" name="seats" class="form-control" value="<?php echo $risultato['seats'];?>"></div>
                </div>
            </div>
            <input type="hidden" id="id" name="id" value="<?php echo $risultato["id"]; ?>">
            <button class="btn btn-primary">Salva</button>
    </div>
    <?php
}
?>

<?php
require('../templates/footer.php');
?>