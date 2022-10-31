<?php include 'header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <h1 class="text-center mb-5 text-color">STUDENTS LIST</h1>
            <?php foreach ($blogs as $blog) { ?>
            <div class="col-md-3 col-sm-4 mb-3 h-50">
                <div class="card shadow border-0">
                    <img src="assets/img/<?php echo $blog['image'];?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <p><span class="fw-bold">Id :</span><?php echo $blog['id'];?></p>
                        <p><span class="fw-bold">Name :</span><?php echo $blog['name'];?></p>
                        <p><span class="fw-bold">Roll :</span><?php echo substr($blog['roll'],0,4).'....';?></p>

                        <a href="action.php?page=details&&id=<?php echo $blog['id'] ?>" class="btn btn-outline-primary px-5">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>