<?php 
include("header.php"); 
include("connect.php");

if(isset($_GET['place_id']))
{
	$place_id=$_GET['place_id'];
	$qd="delete from place_master where place_id='$place_id'";
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
                  <h3 class="box-title">Place View </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						<th>Location</th>
						<th>Address</th>
						<th>Place Contactnumber</th>
						<th>Option</th>
					</tr>
					<?php
					$q="select * from place_master";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['location'];?></td>
						<td><?php print $row['address'];?></td>
						<td><?php print $row['place_contactnumber'];?></td>
						<td><a href="place_view.php?place_id=<?php print $row['place_id'];?>">Delete</a></td>
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