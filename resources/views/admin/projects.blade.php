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
                <h3 class="card-title">My Projects </h3>
              </div> <a href="{{ route('projects.view')}}" class="btn btn-dark">Add new Project</a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Repo_url</th>
                    <th>Link</th>
                    <th>Img</th>
                    <th>Visit</th>
                    <th>Lang</th>
                    <th>Rep_visit</th>
                    <th>Action</th>
                    <th>Manage</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ( $projects as $project)
                  <tr>

                    <td>{{ $project->id }} </td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->repo_url }}</td>
                    <td>{{ $project->link }}</td>
                    <td> <img src="{{ $project->img }}" alt="{{ $project->name }}" width="40"
                    height="40"> </td>
                    <td> @if($project->visit)
                         {{ $project->visit }}
                        @else
                        enabled
                        @endif
                     </td>
                    <td> {{ $project->lang }} </td>
                    <td> @if ($project->rep_visit)
                    {{ $project->rep_visit }}
                    @else
                    enabled
                    @endif </td>
                    <td> <a href="{{ route('projects.edit', ['id' => $project->id ]) }}" class="btn btn-primary">Edit</a> </td>
                    <td> <a href="{{ route('projects.delete', ['id' => $project->id ]) }}" class="btn btn-danger">Delete</a> </td>

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
