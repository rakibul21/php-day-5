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
                        <p><span class="fw-bold">Roll :</span><?php echo $blog['roll'];?></p>
                        <p><span class="fw-bold">Email :</span><?php echo $blog['email'];?></p>
                        <p><span class="fw-bold">Section :</span><?php echo $blog['section'];?></p>
                        <p><span class="fw-bold">Mobile :</span><?php echo $blog['Mobile'];?></p>
                        <p><span class="fw-bold">Prresent Address :</span><?php echo $blog['present-address'];?></p>
                        <p><span class="fw-bold">Permanent Address :</span><?php echo $blog['permanant-address'];?></p>
                        <p><span class="fw-bold">About :</span><?php echo substr($blog['about'],0,50).'....' ;?></p>
                        <a href="action.php?page=details&&id=<?php echo $blog['id'] ?>" class="btn btn-outline-primary px-5">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>