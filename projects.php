<?php include_once('includes/include-head.php'); ?>
<div id="main-wrapper">
    <?php include_once('includes/include-header.php'); ?>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<!-- Projects -->
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="main-heading-left">
                <h1>Completed Projects</h1>
                <p>We are Expert in Bio Gas Plant Installation to your desired place.</p>
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
                <div class="clearfix"></div>
            </div>
            <hr>
            <div class="main-heading-left">
                <h1>Ongoing Projects</h1>
                <p>We are Expert in Bio Gas Plant Installation to your desired place.</p>
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
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php include_once('includes/include-footer.php'); ?>