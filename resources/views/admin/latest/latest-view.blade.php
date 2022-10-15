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
              <h3 class="card-title"> <small>View</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->

              <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputPassword1">image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->image)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">car</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->car}}"/>
                    <p class="text-danger"> </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->description}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">price</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->price}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">image1</label>
                    <input type="file" name="image1" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->image1)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">car1</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->car1}}"/>
                    <p class="text-danger"> </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description1</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->description1}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">price1</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->price1}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">image2</label>
                    <input type="file" name="image2" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->image2)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">car2</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->car2}}"/>
                    <p class="text-danger"> </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description2</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->description2}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">price2</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->price2}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">image3</label>
                    <input type="file" name="image3" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->image3)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">car3</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->car3}}"/>
                    <p class="text-danger"> </p>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description3</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->description3}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">price3</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$key->price3}}"/>
                    <p class="text-danger"> </p>
                  </div>


                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="status" class="custom-control-input" {{$key->status==true ? 'checked' : ''}} />
                    <label class="custom-control-label" for="exampleCheck1">Active </label>
                  </div>
                </div>
              </div>
              <input type="show" name="id" value="{{ $key->id }}"/>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

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
