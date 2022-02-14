<?php include 'header.php'; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">All User</div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="input-group mb-4">
                                <input type = "text" class="form-control" name="search" />
                                <div class="input-group-append">
                                    <button type="submit" name="search_btn" class="btn btn-success">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>price</th>
                                <th>Detail</th>
<!--                                <th>Address</th>-->
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($students as $student){ ?>
                            <tr>
                                <td><?php echo $student['name'];?></td>
                                <td><?php echo $student['id'];?></td>
                                <td><?php echo $student['description'];?></td>
                                <td><?php echo $student['price'];?></td>
                            </tr>
                           <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
