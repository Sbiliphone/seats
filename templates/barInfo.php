<?php
require('../templates/header.php');
require('../templates/menu.php');
$bar = (isset($_REQUEST['bar'])) ? $_REQUEST['bar'] :  header('Location:index.php?action=homepage');
?>
<body ng-app="app">
<div ng-controller="ctrl1">
    <iframe width="100%" height="500" src="https://maps.google.com/maps?q=<?php echo "15"; ?>,<?php echo "56"; ?>&output=embed"></iframe>
</div>
</body>



<?php
require('../templates/footer.php');
?>