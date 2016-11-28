<?php include_once('includes/include-head.php'); ?>
<div id="main-wrapper">
    <?php include_once('includes/include-header.php'); ?>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<!-- About Us -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="main-heading">
                <h1>Our Services</h1>
                <p>We are awesome group of bio gas product compnay who makes this world awesome.</p>
            </div>
        </div>
    </div>
    <div class="row grid-list-row">
        <?php for ( $i=1; $i<5; $i++){ ?>
            <div class="col-sm-6 col-md-3">
                <div class="grid-wrapper">
                    <div class="grid-image">
                        <a href=""><img src="assets/dist/img/service<?php echo $i; ?>.jpg" alt="" class="img-responsive"></a>
                    </div>
                    <div class="grid-caption">
                        <h2><a href="">Bio Gas Plant Installation</a></h2>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php include_once('includes/include-footer.php'); ?>