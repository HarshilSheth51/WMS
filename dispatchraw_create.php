<?php 
include("uheader.php"); 
include("connect.php");

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
                  <h3 class="box-title">DispatchRaw</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"action="dispatchraw_create_code.php" method="post">
				
					<div class="form-group">
                      <label for="exampleInputEmail1">Dispatch Date</label>
                      <input type="date" class="form-control"  required name="dispatchdate" id="exampleInputEmail1" placeholder="date ">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">RawName</label>
                    <select name="rawid"  class="form-control">
					<?php
					$q1="select * from raw_materials";
					$rs1=mysqli_query($cn,$q1);
					while($row1=mysqli_fetch_array($rs1))
					{
						print "<option value=$row1[0]>  $row1[1] </option>";
					}
					?>
					</select>
					
					</div>
					
                  <div class="form-group">
                      <label for="exampleInputEmail1">Place</label>
					  <select name="pid"  class="form-control">
					<?php
					$q1="select * from place_master";
					$rs1=mysqli_query($cn,$q1);
					while($row1=mysqli_fetch_array($rs1))
					{
						print "<option value=$row1[0]>  $row1[1] </option>";
					}
					?>
					</select>
               
                    </div>

                    
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Qty</label>
                      <input type="text" class="form-control"  required name="qty" id="exampleInputEmail1" placeholder="qty">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Remark</label>
                      <input type="text" class="form-control" name="remark" required  id="exampleInputEmail1" placeholder="remark">
                    </div>
					
					<div class="box-body">
                    
					
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

	  <?php include("footer.php"); ?>