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
                  <h3 class="box-title">Finishgood </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="finishgood_create_code.php" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ProductName</label>
                      <input type="text" class="form-control"   pattern="[A-z]{4,20}" autofocus required title="Please enter productname" name="product_name" id="exampleInputEmail1" placeholder="Product Name ">
                    </div>
					
                    				
					<div class="form-group">
                      <label for="exampleInputEmail1">Stock</label>
                      <input type="number" class="form-control"  min="0" max="1000" step="10" required title="plase Enter stock" id="exampleInputEmail1" name="stock" placeholder="Stock">
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" required title="Please select image" name="image" id="exampleInputEmail1" placeholder="Image">
                    </div>
					
					

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