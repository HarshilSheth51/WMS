<?php 
include("header.php");
include("connect.php"); 
if(isset($_GET['product_id']))
{
	$product_id=$_GET['product_id'];
	$qd="delete from finish_good where product_id='$product_id'";
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
                  <h3 class="box-title">finishgood View </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						<th>Product Name</th>
						<th>stock</th>
						<th>image</th>
						<th>Option</th>
						
					</tr>
					<?php
					$q="select * from finish_good";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['product_name'];?></td>
						<td><?php print $row['stock'];?></td>
						<td><?php print $row['image'];?></td>
						<td><a href="finishgood_view.php?product_id=<?php print $row['product_id'];?>">Delete</a></td>
						
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