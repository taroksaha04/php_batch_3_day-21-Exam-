<?php include 'header.php' ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product){?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src ="assets/img/<?php echo $product['image'];?>" alt="" class="card-img-top" style="height: 300px;"/>
                    <div class="card-body">
                        <h3 class="card-title"><?php echo $product['name']; ?></h3>
<!--                        <h3>Tk.--><?php //echo $product['price']; ?><!--</h3>-->

                        <p class="card-text">
                            <del><?php echo $product['price']; ?></del><span class="font-weight-bold"> Tk.3400</span>
                        </p>
                        <hr/>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                        <hr/>
                        <a href="" class="btn btn-outline-warning float-right">Add to Cart</a>
                        <a href="action.php?pages=detail&&id=<?php echo $product['id']; ?>" class="btn btn-outline-success">Detail</a>
                    </div>

                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>



<?php include 'footer.php' ?>
