<?php 
include("uheader.php");
include("connect.php");

if(isset($_GET['inward_id']))
{
	$inward_id=$_GET['inward_id'];
	$qd="delete from inward_raw where inward_id='$inward_id'";
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
                  <h3 class="box-title">inwardraw view</h3>
				  <form method="get">
				  
				  <input type="text" style="border: 2px line black; border-radius:9px; text-align:center; margin-left: 15% ; border-left-width:7px; font-family: serif; border-top-right-radius:10px;"name="search" placeholder="Enter date" />
				  <input type="submit" value="Search" style="border-radius:10px; border:2px solid black; background-color:white; border-style:outset; font-family: serif; border-left-width:5px;">	
				  </form>
				  
				  
				  
				  
                </div><!-- /.box-header -->
                <!-- form start -->
				<table class="table"> 
					<tr>
						
						<th>InwardDate</th>
						<th>RawName</th>
						<th>place</th>
						<th>party</th>
						<th>qty</th>
						<th>remarks</th>
						<th>expireDate</th>
						<th>Option</th>
						
						
					</tr>
					<?php
					$q="select  raw_materials.Raw_name,place_master.location,party_master.party_name,inward_raw.* from inward_raw,raw_materials,place_master,party_master where inward_raw.Raw_id=raw_materials.Raw_id and inward_raw.place_id=place_master.place_id and inward_raw.party_id=inward_raw.party_id";
					if(isset($_GET['search']))
					{
						if($_GET['search']!="")
						{
							$search=$_GET['search'];
							$q="select  raw_materials.Raw_name,place_master.location,party_master.party_name,inward_raw.* from inward_raw,raw_materials,place_master,party_master where inward_raw.Raw_id=raw_materials.Raw_id and inward_raw.place_id=place_master.place_id and inward_raw.party_id=inward_raw.party_id and inward_raw.inward_date='$search'";
							
							
						}
					}
					
					
					
					
					
					
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>
					<tr>
						<td><?php print $row['inward_date'];?></td>
						<td><?php print $row['Raw_name'];?></td>
						<td><?php print $row['location'];?></td>
						<td><?php print $row['party_name'];?></td>
						<td><?php print $row['qty'];?></td>
						<td><?php print $row['remarks'];?></td>
						<td><?php print $row['expired_date'];?></td>
						<td><a href="inwardraw_view.php?inward_id=<?php print $row['inward_id'];?>">Delete</a></td>
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