@extends('layout.master')

@section('title')
Add Branch
@endsection

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Branch</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add new Branch</li>
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
                <h3 class="card-title">Branch</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" action="{{url('/savebranch')}}" method="post">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="branchName">Branch Name</label>
                    <input type="text" class="form-control" required name="br_name" placeholder="Enter Branch name">
                  </div>
                  <div class="form-group">
                    <label for="companyName">Company Name</label>
                    <select name="brname_cid" class="form-control">
                        @foreach($company_list as $c)
                            <option value="{{$c->id}}">{{$c->cpname}}</option>
                        @endforeach()
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="branchDetails">Branch Details</label>
                    <textarea name="br_details" class="form-control"></textarea>
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