@extends('layouts.base')
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">My Skills </h3>
              </div> <a href="{{ route('skil.view')}}" class="btn btn-dark">Add new Skill</a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>IMG</th>
                    <th>Class</th>
                    <th>Action</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ( $skils as $skil)
                  <tr>

                    <td>{{ $skil->id }} </td>
                    <td>{{ $skil->name }}</td>
                    <td> <img src="{{ $skil->img }}" alt="{{ $skil->name }}" width="40"
                    height="40"> </td>
                    <td> {{ $skil->class }} </td>
                    <td> <a href="{{ route('skil.edit', ['id' => $skil->id ]) }}" class="btn btn-primary">Edit</a> </td>
                    <td> <a href="{{ route('skil.delete', ['id' => $skil->id ]) }}" class="btn btn-danger">Delete</a> </td>


                  </tr>
                  @endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
