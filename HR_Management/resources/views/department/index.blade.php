@extends('layout.master')

@section('title')
Department
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Department</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Department</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Department in HROnline</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Department ID</th>
                    <th>Department Name</th>
                    <th>Branch</th>
                    <th>Details</th>
                    <th>Option</th>
                  </tr>
                  </thead>
                  <tbody>
                  	@foreach($department_list as $d)
                  		<tr>
		                    <td>{{$d->id}}</td>
		                    <td>{{$d->dp_name}}</td>
		                    <td>{{$d->br_name}}</td>
		                    <td>{{$d->dp_details}}</td>
		                    <td>X</td>
                  		</tr>
                  	@endforeach()
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection