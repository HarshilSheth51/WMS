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
                  <h3 class="box-title">User Create </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="user_create_code.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">User Name</label>
                      <input type="text" name="username" pattern="[A-z]{4,15}" autofocus required title="Please enter UserName" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name">
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="pw"  name="enter password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name="email"   name="enter email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required  title="Please enter Emailid" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Contact No</label>
                      <input type="text" name="contact_no" name="enter contact no" pattern="[0-9]{10}" required title="Please Enter contactno" class="form-control" id="exampleInputEmail1" placeholder="Enter Contact Number">
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