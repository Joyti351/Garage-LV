
@extends('admin.main')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"> data table <small>for Feature</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="" method="post" id="quickForm"
            enctype="multipart/form-data">
            @csrf
            <div class="card-body">

              <div class="form- roup">
                <label for="exampleInputPassword1">image</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">car</label>
                <input type="text" name="heading" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">description</label>
                <input type="text" name="description" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">price</label>
                <input type="text" name="price" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>

              <div class="form- roup">
                <label for="exampleInputPassword1">image1</label>
                <input type="file" name="image2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">car1</label>
                <input type="text" name="heading2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">description1</label>
                <input type="text" name="description2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">price1</label>
                <input type="text" name="price2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form- roup">
                <label for="exampleInputPassword1">image2</label>
                <input type="file" name="image2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">car2</label>
                <input type="text" name="heading2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">description2</label>
                <input type="text" name="description2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">price2</label>
                <input type="text" name="price2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form- roup">
                <label for="exampleInputPassword1">image3</label>
                <input type="file" name="image2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">car3</label>
                <input type="text" name="heading2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">description3</label>
                <input type="text" name="description2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">price3</label>
                <input type="text" name="price2" class="form-control" id="exampleInputPassword1" >
                <p class="text-danger"></p>
              </div>
              <div class="form-group mb-0">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="status" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">Active </label>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection
