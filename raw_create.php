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
                  <h3 class="box-title">Raw Master </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="raw_create_code.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Raw Name</label>
                      <input type="text" name="name"   required  title="Please enter Your name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name ">
                    </div
					<div class="form-group">
                      <label for="exampleInputEmail1">Stock</label>
                      <input type="number" name="stock" min="0" max="1000" step="10" required  title="Please enter Stock" class="form-control" id="exampleInputEmail1" placeholder="Enter Stock">
                    </div>
					
                    <div class="form-group">
                      <label for="exampleInputPassword1">Detail</label>
                      <textarea class="form-control" name="detail" pattern="[a-z]{4,100}" autofocus  required  title="Please enter Detail" id="exampleInputPassword1" placeholder="Detail"></textarea>
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
