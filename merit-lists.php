<?php
include_once "links.php";
include_once "headerb.php";
?>
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Merit Lists</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                  <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                    <h3>Links</h3>
                    <ul class="probootstrap-side-menu">
                      <li><a href="index.php">Home</a></li>
              <li><a href="index.php#about">About Us</a></li>
              <li><a href="index.php#Events">Events</a></li>
              <li><a href="index.php#Courses">Courses</a></li>
              <li><a href="contact-us.php">Contact Us</a></li>
                      <li class="active"><a>Merit Lists</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2>Merit Lists</h2>
                  <!--<p>MBBS Details for Students and Parents.</p>-->
<?php
$q=mysqli_query($con,"SELECT * FROM `uploads` ORDER BY `id` DESC");
while($row=mysqli_fetch_array($q)){
?>
                 
                  <a href="uploads/<?php echo $row['file'];?>" target="_blank">
<button type="button" class="btn btn-primary">Download <?php echo $row['filename'];?></button>
                  </a>
                 
                  <br><br>
<?php } ?>                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
include_once "footerb.php";
?>