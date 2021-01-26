@extends('layout.master')

@section('title')
Add Department
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Department</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add new Department</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Department</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" action="{{url('/savedepartment')}}" method="post">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="departmentName">Department Name</label>
                    <input type="text" class="form-control" required name="dp_name" placeholder="Enter Department name">
                  </div>
                  <div class="form-group">
                    <label for="branchName">Branch Name</label>
                    <select name="dpname_cid" class="form-control">
                        @foreach($branch_list as $b)
                            <option value="{{$b->id}}">{{$b->br_name}}</option>
                        @endforeach()
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="departmentDetails">Department Details</label>
                    <textarea name="dp_details" class="form-control"></textarea>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection