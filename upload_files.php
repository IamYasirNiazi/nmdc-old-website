<?php session_start();
if(!isset($_SESSION['admins'])){header('Location:logout.php');}
include_once "links.php";
include_once "headerb.php";
?>
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Upload File</h1>
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
              <li><a href="logout.php">Log Out</a></li>
                      <li class="active"><a>Upload File</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
<?php
if(isset($_REQUEST['success']))
{
?>
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Data Inserted.
</div>
<?php
}
if(isset($_REQUEST['delete']))
{
?>
<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Data Deleted.
</div>
<?php } ?>
                
                  <h2>Upload File</h2>
                  <p>Upload Merit List</p>
<form action="uploadfile.php" method="post" class="probootstrap-form" enctype="multipart/form-data">
                    
                    <div class="form-group">
                      <label for="filename">File Name</label>
                      <input type="text" class="form-control" id="filename" name="filename" required>
                    </div>
                    <div class="form-group">
                      <label for="lastdate">Last Date</label>
                      <input type="date" class="form-control" id="lastdate" name="lastdate" required>
                    </div>
                    <div class="form-group">
                      <label for="file">File</label>
                      <input type="file" class="form-control" id="file" name="img" required>
                    </div>
                    
                    <div class="form-group">
  <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Upload File">
                    </div>
                  </form>
                </div>
              </div>
            </div>

<div class="col-md-12">
<table class="table table-bordered">
<thead>
<tr>
<th>Sr#</th>
<th>Entry Date</th>
<th>File Name</th>
<th>Last Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
$cnt=1;
$q=mysqli_query($con,"SELECT * FROM `uploads` ORDER BY `id` DESC");
while($row=mysqli_fetch_array($q)){
?>
<tr>
<td><?php echo $cnt; ?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['filename'];?></td>
<td><?php echo $row['lastdate'];?></td>
<td>
<a href="delfile.php?id=<?php echo $row['id'];?>" onclick="alert('Are Your Sure, You want to Permanently delete it.')"><button type="button" class="btn btn-danger">Delete</button></a>
</td>
</tr>
<?php $cnt++; } ?>
</tbody>
</table>
</div>            
            
          </div>
        </div>
      </section>      
<?php
include_once "footerb.php";
?>