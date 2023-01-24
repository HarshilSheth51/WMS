<?php include("header.php"); ?>

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
                  <h3 class="box-title">Party Master </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="party_create_code.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" pattern="[A-z]{7,20}" autofocus required  title="Please enter Name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name ">
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputPassword1">Addrss</label>
                      <textarea class="form-control" name="address" pattern="[a-z]{7,100}" autofocus required  required  title="Please enter Address" id="exampleInputPassword1" placeholder="Address"></textarea>
                    </div>					
					<div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <input type="text" class="form-control" name="city" pattern="[a-z]{4,12}" autofocus required required  title="Please enter City" id="exampleInputEmail1" placeholder="Enter City">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Contact Number</label>
                      <input type="text" name="contact_no" class="form-control" pattern="[0-9]{10}" required  title="Please enter contact" id="exampleInputEmail1" placeholder="Enter Contact Number">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="text" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required  title="Please enter Emailid" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Type</label>
                      <select class="form-control" name="type" required id="exampleInputEmail1">
						<option>Raw</option>
						<option>Finsh</option>
					</select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputPassword1">Remark</label>
                      <textarea class="form-control" name="remark"   pattern="[a-z]{4,100}" autofocus required title="Please Enter Remarks"; id="exampleInputPassword1" placeholder="Enter Remark"></textarea>
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