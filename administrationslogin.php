<?php
include_once "links.php";
include_once "headerb.php";
?>
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Login</h1>
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
              <li><a href="mbbs.php">MBBs</a></li>
                      <li class="active"><a>Login</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                  <h2>Login Account</h2>
                  <p>Login your Administrator Account</p>
                  <form action="log.php" method="post" class="probootstrap-form">
                    
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="pass">
                    </div>
                    
                    <div class="form-group">
  <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Login Account">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
include_once "footerb.php";
?>