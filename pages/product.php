<?php include 'header.php' ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-md-4 mb4">
                        <div class="card">
                            <img src="assets/img/<?php echo $product['image'] ?>" alt="" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $product['name'] ?></h3>
                                <h5><?php echo $product['brand'] ?></h5>
                                <p><?php echo $product['category'] ?></p>
                                <p>ID : <?php echo $product['id'] ?></p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti et, exercitationem illum maiores officiis quae quo tempora vel! Laudantium, odit.</p>
                                <p class="font-weight-bold"><?php echo $product['price'] ?></p>
                                <hr/>
                                <a href="action.php?pages=details" class="btn btn-outline-success">Details</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


<?php include 'footer.php' ?>