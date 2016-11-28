<?php include_once('includes/include-head.php'); ?>
<div id="main-wrapper">
    <?php include_once('includes/include-header.php'); ?>
    <div class="clearfix"></div>
    <!-- CAROUSEL -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="assets/dist/img/slide0.jpg" alt="slideZero">
                <div class="carousel-caption">
                    <h1>Welcome Home Energy Bin</h1>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="clearfix"></div>
<!-- Services Listing -->
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="main-heading">
                <h1>Our Services</h1>
                <p>We offer Services that are non-environment degradable</p>
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
        <div class="col-sm-12">
            <a href="service-list.php" class="minor-link pull-right">View All Services +</a>
        </div>
    </div>
</div>
<?php include_once('includes/include-footer.php'); ?>