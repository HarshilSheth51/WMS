<?php 
include("header.php");
include("connect.php");
if(isset($_GET['dispatch_id']))
{
	$dispatch_id=$_GET['dispatch_id'];
	$qd="delete from dispatch_raw where dispatch_id='$dispatch_id'";
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
                  <h3 class="box-title">dispatchraw view</h3>
				  <form method="get">
				  <input type="text" style="border: 2px line black; border-radius:9px; text-align:center; margin-left: 15% ; border-left-width:7px; font-family: serif; border-top-right-radius:10px;" name="search" placeholder="Enter Date" >
				  <input type="submit" value="Search" style="border-radius:10px; border:2px solid black; background-color:white; border-style:outset; font-family: serif; border-left-width:5px;">
				  </form>
				  
				  
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						<th>dispatch_date</th>
						<th>RawName</th>
						<th>Place</th>
						<th>qty</th>
						<th>remarks</th>
						<th>Option</th>
						
					</tr>
					<?php
					$q="select raw_materials.Raw_name,place_master.location,dispatch_raw.* from dispatch_raw,raw_materials,place_master where dispatch_raw.Raw_id=raw_materials.Raw_id and  
					dispatch_raw.place_id=place_master.place_id";
					if(isset($_GET['search']))
					{
						if($_GET['search']!="")
						{
							$search=$_GET['search'];
							$q="select raw_materials.Raw_name,place_master.location,dispatch_raw.* from dispatch_raw,raw_materials,place_master where dispatch_raw.Raw_id=raw_materials.Raw_id and  
					dispatch_raw.place_id=place_master.place_id and dispatch_raw.dispatch_date='$search'";
							
							
						}
					}
					
					
					
					
					
					
					
					$rs=mysqli_query($cn,$q); 
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['dispatch_date'];?></td>
						<td><?php print $row['Raw_name'];?></td>
						<td><?php print $row['location'];?></td>
						<td><?php print $row['qty'];?></td>
						<td><?php print $row['remarks'];?></td>
						<td><a href="dispatchraw_view.php?dispatch_id=<?php print $row['dispatch_id'];?>">Delete</a></td>
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