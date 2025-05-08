<?php 
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
require_once('header.php'); 
?>

<div class="page">
    <div class="container">
        <div class="row">            
            <div class="col-md-12">
                <p>
                    <h3 style="margin-top:20px;"><?php echo LANG_VALUE_121; ?></h3>
                    <a href="dashboard.php" class="btn btn-success"><?php echo LANG_VALUE_91; ?></a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>