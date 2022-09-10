@extends('layouts.dashboard')
@section('content')

@push('styles')
<link rel="stylesheet" href="dist/css/adminlte.min.css">
@endpush



<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h3 class="m-0">Admin - Employee Leaves Managment System</h3>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">

        <!-- /.col-md-6 -->
        <div class="col-lg-6">


          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">All Department</h5>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Dep. Name</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td><input class="btn btn-primary" type="submit" value="Edit"></td>
                    <td><input class="btn btn-primary" type="submit" value="Delete"></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-6">

          <div class="card card-primary card-outline">
          <div class="card-header">
              <h5 class="m-0">Insert Department</h5>
            </div>
            <div class="card-body">
          
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Department Name" aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Add</button>
              </div>
              <!-- <a href="#" class="btn btn-primary">Add Department</a> -->

            </div>
          </div><!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>

@endsection