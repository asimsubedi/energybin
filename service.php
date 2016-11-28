<?php include_once('includes/include-head.php'); ?>
<div id="main-wrapper">
    <?php include_once('includes/include-header.php'); ?>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<!-- About Us -->
<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-8">
            <div class="main-heading">
                <h1>Bio Gas Plant Installation</h1>
                <p>We are Expert in Bio Gas Plant Installation to your desired place.</p>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad tempore quod eum animi et eos beatae ab, natus aliquam. Voluptate hic ipsum consequatur, repellendus quia architecto praesentium, blanditiis nisi adipisci.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque deleniti natus nostrum voluptate, tempore assumenda accusamus quae exercitationem illo perferendis. Aut temporibus rem nesciunt inventore nobis iure et velit molestias.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe doloremque dolorem perspiciatis dignissimos dolore, error voluptate explicabo, voluptatibus dolorum accusamus officiis! Distinctio fugiat necessitatibus obcaecati, quo error eligendi dolorem soluta.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum porro quidem nihil, officia consectetur facere alias repudiandae natus molestias dolores hic at cupiditate dolore doloremque voluptates dicta ducimus, laborum voluptate!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor atque, fuga nemo quidem, eos consequuntur itaque iusto quia magnam ad perspiciatis tempore quasi optio repellat iste. Et deserunt ipsa quod?</p>
            <h3>Our Features</h3>
            <ul>
                <li>feature of this service is placed here</li>
                <li>We are more than awesome as we are too good in saving earth</li>
                <li>Another Thing that is our feature of this service is this</li>
            </ul>
        </div>
        <div class="col-md-3 col-sm-4 side-bar">
            <div class="row grid-list-row">
                <?php for ( $i=1; $i<5; $i++){ ?>
                    <div class="col-sm-12">
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
                    <a href="" class="minor-link pull-right">View All Services +</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('includes/include-footer.php'); ?>