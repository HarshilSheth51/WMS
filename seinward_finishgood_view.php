<?php 
include("header.php");
include("connect.php");
if(isset($_GET['in_id']))
{
	$in_id=$_GET['in_id'];
	$qd="delete from inward_finishgood where in_id='$in_id'";
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
                  <h3 class="box-title">Inward finish-good view</h3>
				  <form method="get">
				  <input type="text"  style="border: 2px line black; border-radius:9px; text-align:center; margin-left: 15% ; border-left-width:7px; font-family: serif; border-top-right-radius:10px;"name="search" placeholder="Enter date" />
				  <input type="submit" value="Search" style="border-radius:10px; border:2px solid black; background-color:white; border-style:outset; font-family: serif; border-left-width:5px;">
				  </form>
				  
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						<th>Place</th>
						<th>Product</th>
						<th>Qty</th>
						<th>Remark</th>
						<th>Date</th>
						<th>Option</th>
					</tr>
					<?php
					
					
					$q="select place_master.location,finish_good.product_name,inward_finishgood.* from inward_finishgood,place_master,finish_good where inward_finishgood.place_id=place_master.place_id and inward_finishgood.product_id=finish_good.product_id";
					
					if(isset($_GET['search']))
					{
						if($_GET['search']!="")
						{
							$search=$_GET['search'];
							$q="select place_master.location,finish_good.product_name,inward_finishgood.* from inward_finishgood,place_master,finish_good where inward_finishgood.place_id=place_master.place_id and inward_finishgood.product_id=finish_good.product_id and inward_finishgood.date='$search'";
							
						}
					}
					
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['location'];?></td>
						<td><?php print $row['product_name'];?></td>
						<td><?php print $row['qty'];?></td>
						<td><?php print $row['reamrks'];?></td>
						<td><?php print $row['date'];?></td>
						<td><a href="inward_finishgood_view.php?in_id=<?php print $row['in_id'];?>">Delete</a></td>
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