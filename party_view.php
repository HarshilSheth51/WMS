<?php 
include("header.php");
include("connect.php");

if(isset($_GET['party_id']))
{
	$party_id=$_GET['party_id'];
	$qd="delete from party_master where party_id='$party_id'";
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
                  <h3 class="box-title">Party View </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						<th> Name</th>
						<th>Address</th>
						<th>City</th>
						<th>Contact Number</th>
						<th>Email</th>
						<th>Type</th>
						<th>Remark</th>
						<th>Option</th>
					</tr>
					<?php
					$q="select * from party_master";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['party_name'];?></td>
						<td><?php print $row['address'];?></td>
						<td><?php print $row['city'];?></td>
						<td><?php print $row['contactnumber'];?></td>
						<td><?php print $row['Email'];?></td>
						<td><?php print $row['party_type'];?></td>
						<td><?php print $row['remarks'];?></td>
						<td><a href="party_view.php?party_id=<?php print $row['party_id'];?>">Delete</a></td>
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