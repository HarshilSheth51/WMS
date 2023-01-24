<?php 
include("uheader.php");
include("connect.php");
if(isset($_GET['admin_id']))
{
	$admin_id=$_GET['admin_id'];
	$qd="delete from admin_user where admin_id='$admin_id'";
	mysqli_query($cn,$qd); 
}

 
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">admin_user</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						<th>user_name</th>
						<th>password</th>
						<th>Email</th>
						<th>Option</th>
						
					</tr>
					<?php
					$q="select * from admin_user";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['user_name'];?></td>
						<td><?php print $row['password'];?></td>
						<td><?php print $row['Email'];?></td>
						<td><a href="home_view.php?admin_id=<?php print $row['admin_id'];?>">Delete</a></td>
					</tr>
					<?php
					}
					?>
					

				</table>			
			 </div><!-- /.box -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

	  <?php include("footer.php"); ?>