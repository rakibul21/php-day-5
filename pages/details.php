<?php include "header.php"; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="assets/img/<?php echo $singleBlog['image'];?>" alt="" class="card-img-top">
                </div>
            </div>
            <div class="col-md-6">
                <p><span class="fw-bold">Id :</span><?php echo $singleBlog['id'];?></p>
                <p><span class="fw-bold">Name :</span><?php echo $singleBlog['name'];?></p>
                <p><span class="fw-bold">Roll :</span><?php echo $singleBlog['roll'];?></p>
                <p><span class="fw-bold">Email :</span><?php echo $singleBlog['email'];?></p>
                <p><span class="fw-bold">Section :</span><?php echo $singleBlog['section'];?></p>
                <p><span class="fw-bold">Mobile :</span><?php echo $singleBlog['Mobile'];?></p>
                <p><span class="fw-bold">Prresent Address :</span><?php echo $singleBlog['present-address'];?></p>
                <p><span class="fw-bold">Permanent Address :</span><?php echo $singleBlog['permanant-address'];?></p>
                <p><span class="fw-bold">About :</span><?php echo $singleBlog['about'];?></p>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>