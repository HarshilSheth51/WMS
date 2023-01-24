<?php include("header.php");?> 

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary" style="border-radius: 10px; box-shadow: 5px 5px 10px lightblue" >
                <div class="box-header">
                  <h3 class="box-title">Place Master</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form"action="place_create_code.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Location</label>
                      <input type="text" name="location"   pattern="[A-z]{4,30}" autofocus required title="Please enter Location" class="form-control" id="exampleInputEmail1" placeholder="Enter Lcoation">
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputPassword1">Address</label>
                      <textarea class="form-control" name="address" pattern="[A-z]{4,100}" autofocus required  title="Please enter Address" id="exampleInputPassword1" placeholder=" Enter Address"></textarea>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Contact Number</label>
                      <input type="text" class="form-control" pattern="[0-9]{10}"  required  title="Please enter Contact Number" name="contactno" id="exampleInputEmail1" placeholder="Enter Contact Number">
                    </div>
					</div><!-- /.box-body -->

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
