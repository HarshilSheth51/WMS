<?php 
include("header.php"); 
include("connect.php");
 
if(isset($_GET['Raw_id']))
{
	$Raw_id=$_GET['Raw_id'];
	$qd="delete from raw_materials where Raw_id='$Raw_id'";
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
                  <h3 class="box-title">Raw View </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						<th>Raw Name</th>
						<th>Stock</th>
						<th>Details</th>
						<th>Option</th>
					</tr>
					<?php
					$q="select * from raw_materials";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['Raw_name'];?></td>
						<td><?php print $row['stock'];?></td>
						<td><?php print $row['details'];?></td>
						<td><a href="raw_view.php?Raw_id=<?php print $row['Raw_id'];?>">Delete</a>
					</tr>
					<?php
					}
					?>
					
						
						</td>
					</tr>
				</table>			
			 </div><!-- /.box -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

	  <?php include("footer.php"); ?>