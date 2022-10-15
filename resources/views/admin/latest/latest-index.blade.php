@extends('admin.main')
@section('content')
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- /.row -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">slider data table</h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <a type="button" href="{{url('latest-create')}}" class="btn btn-info">Add-data</a>
                </div>
              </div>

            <div class="card-tools">

            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive " style="height: 490px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th>id</th>
                  <th>image</th>
                  <th>car</th>
                  <th>description</th>
                  <th>price</th>
                  <th>image1</th>
                  <th>car1</th>
                  <th>description1</th>
                  <th>price1</th>
                  <th>image2</th>
                  <th>car2</th>
                  <th>description2</th>
                  <th>price2</th>
                  <th>image3</th>
                  <th>car3</th>
                  <th>description3</th>
                  <th>price3</th>
                  <th>status</th>


                </tr>
              </thead>
              <tbody>

              @foreach ($key as $value)

                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><img src="{{asset($value->image)}}" width="90px"  heigh="70px" alt="no image" /></td>

                    <td>{{$value->car}}</td>
                    <td>{{$value->description}}</td>
                    <td>{{$value->price}}</td>
                    <td><img src="{{asset($value->image1)}}" width="90px"  heigh="70px" alt="no image" /></td>

                    <td>{{$value->car1}}</td>
                    <td>{{$value->description1}}</td>
                    <td>{{$value->price1}}</td>
                    <td><img src="{{asset($value->image2)}}" width="90px"  heigh="70px" alt="no image" /></td>

                    <td>{{$value->car2}}</td>
                    <td>{{$value->description2}}</td>
                    <td>{{$value->price2}}</td>
                    <td><img src="{{asset($value->image3)}}" width="90px"  heigh="70px" alt="no image" /></td>

                    <td>{{$value->car3}}</td>
                    <td>{{$value->description3}}</td>
                    <td>{{$value->price3}}</td>









                    <td>@if($value->status == true) <span class = "text-info" > Active </span> @else <span class = "text-danger" > Inactive </span> @endif</td>
                    <td>
                    <a type="button" href="{{url('latest-edit', $value->id)}}" class="btn btn-secondary"><i class="far fa-edit"></i></a>
                    <a type="button" href="{{url('latest-view', $value->id)}}" class="btn btn-success"><i class="far fa-eye-slash"></i></a>
                    <a type="button" href="{{url('latest-delete', $value->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </tr>
                </tr>
            @endforeach
            </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
