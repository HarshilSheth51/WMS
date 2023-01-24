<?php 
include("header.php");
include("connect.php");
if(isset($_GET['out_id']))
{
	$out_id=$_GET['out_id'];
	$qd="delete from outward_finishgood where out_id='$out_id'";
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
                  <h3 class="box-title">outward finishgood view</h3>
				  <form method="get">
				  <input type="text"  style="border: 2px line black; border-radius:9px; text-align:center; margin-left: 15% ; border-left-width:7px; font-family: serif; border-top-right-radius:10px;"name="search" placeholder="Enter date" />
				  <input type="submit" value="Search" style="border-radius:10px; border:2px solid black; background-color:white; border-style:outset; font-family: serif; border-left-width:5px;">
				  </form>
				  
				  
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						<th>date</th>
						<th>Product</th>
						<th>Place</th>
						<th>qty</th>
						<th>partyId</th>
						<th>Remark</th>
						<th>Option</th>
						
					</tr>
					<?php
					$q="select finish_good.product_name,place_master.location,party_master.party_name,outward_finishgood.* from outward_finishgood,finish_good,place_master,party_master where outward_finishgood.product_id=finish_good.product_id and outward_finishgood.place_id=place_master.place_id and outward_finishgood.party_id=party_master.party_id";
					if(isset($_GET['search']))
					{
						if($_GET['search']!="")
						{
							$search=$_GET['search'];
							$q="select finish_good.product_name,place_master.location,party_master.party_name,outward_finishgood.* from outward_finishgood,finish_good,place_master,party_master where outward_finishgood.product_id=finish_good.product_id and outward_finishgood.place_id=place_master.place_id and outward_finishgood.party_id=party_master.party_id and outward_finishgood.date='$search'";
							
							
						}
					}
					
					
					
					
					
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['date'];?></td>
						<td><?php print $row['product_name'];?></td>
						<td><?php print $row['location'];?></td>
						<td><?php print $row['qty'];?></td>
						<td><?php print $row['party_name'];?></td>
						<td><?php print $row['remarks'];?></td>
						<td><a href="outward_finishgood_view.php?out_id=<?php print $row['out_id'];?>">Delete</a></td>
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