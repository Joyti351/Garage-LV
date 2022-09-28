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
              <h3 class="card-title">Feature<small>Edit</small></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ url('feature-update') }}" method="post" id="quickForm" enctype="multipart/form-data">
                @csrf
              <div class="card-body">



                <div class="form-group">
                    <label for="exampleInputPassword1">image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->image)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">heading</label>
                    <input type="text" name="heading" class="form-control" id="exampleInputEmail1" value="{{$key->heading}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputEmail1" value="{{$key->description}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" value="{{$key->price}}"/>
                    <p class="text-danger"> </p>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">heading1</label>
                  <input type="text" name="heading1" class="form-control" id="exampleInputEmail1" value="{{$key->heading1}}"/>
                  <p class="text-danger"> </p>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">description1</label>
                    <input type="text" name="description1" class="form-control" id="exampleInputEmail1" value="{{$key->description1}}"/>
                    <p class="text-danger"> </p>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">image2</label>
                    <input type="file" name="image2" class="form-control" id="exampleInputPassword1" >
                    <img src="{{asset($key->image2)}}" width="110px" height="80px" alt="no image"/>
                    <p class="text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">heading2</label>
                    <input type="text" name="heading2" class="form-control" id="exampleInputEmail1" value="{{$key->heading2}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">description2</label>
                    <input type="text" name="description2" class="form-control" id="exampleInputEmail1" value="{{$key->description2}}"/>
                    <p class="text-danger"> </p>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">price2</label>
                    <input type="text" name="price2" class="form-control" id="exampleInputEmail1" value="{{$key->price2}}"/>
                    <p class="text-danger"> </p>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">heading3</label>
                  <input type="text" name="heading3" class="form-control" id="exampleInputEmail1" value="{{$key->heading3}}"/>
                  <p class="text-danger"> </p>
                </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">description3</label>
                    <input type="text" name="description3" class="form-control" id="exampleInputEmail1" value="{{$key->description3}}"/>
                    <p class="text-danger"> </p>
                  </div>




                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="status" class="custom-control-input" id="exampleCheck"{{$key->status==true ? 'checked' : ' '}}  />
                    <label class="custom-control-label" for="exampleCheck1">Active </label>
                  </div>
                </div>
              </div>
              <input type="show" name="id" value="{{ $key->id }}"/>
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
