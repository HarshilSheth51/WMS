<?php 
include("header.php"); 
include("connect.php");
if(isset($_GET['user_id']))
{
	$user_id=$_GET['user_id'];
	$qd="delete from user where user_id='$user_id'";
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
                  <h3 class="box-title">User View </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						<th>User Name</th>
						<th>Password</th>
						<th>EmailId</th>
						<th>Contact No</th>
						<th>Option</th>
					</tr>
					<?php
					$q="select * from user";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['user_name'];?></td>
						<td><?php print $row['password'];?></td>
						<td><?php print $row['Email'];?></td>
						<td><?php print $row['contact_number'];?></td>
						<td><a href="user_view.php?user_id=<?php print $row['user_id'];?>">Delete</a></td>
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