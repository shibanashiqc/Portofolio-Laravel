@extends('layouts.base')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->

  <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit Projects</h3>
      @if ( Session::has('msg'))

    <center><span class="badge badge-success"> {{ Session::get('msg') }} </span></center>

    @endif
    </div>
    <!-- /.card-header -->
    <!-- form start -->


    <form enctype="multipart/form-data" method="POST" action="{{ route('projects.update', ['id' => $edits->id]) }}">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="name">Project Name</label>
          <input type="text" class="form-control" value="{{ $edits->name }}" name="name" placeholder="Enter Project name">

        @error('name')
           <span> {{ $message }}</span>
        @enderror
    </div>
        <div class="form-group">
          <label for="description">Description</label>
          <input type="text" class="form-control"  value="{{ $edits->description }}" name="description" placeholder="Enter Description......">

        @error('description')
        <span > {{ $message }}</span>
     @enderror
    </div>
        <div class="form-group">
            <label for="repo_url">Repositoy Url</label>
            <input type="text" class="form-control" name="repo_url"  value="{{ $edits->repo_url }}" placeholder="https://github.com/shibanashiq/example">
            @error('repo_url')
        <span > {{ $message }}</span>
     @enderror
        </div>

        <div class="form-group">
            <label for="link">Visit Url</label>
            <input type="text" class="form-control"  value="{{ $edits->link }}" name="link" placeholder="url..">
            @error('link')
        <span > {{ $message }}</span>
     @enderror
        </div>

        <div class="form-group">
            <label class="control-label">Project Screenshot</label>
            <input type="file" id="photo"  value="{{ $edits->photo }}" name="photo" style="background-color: #fff;" class="form-control" placeholder="Choose File">
            @error('photo')
                  <span>{{ $message }}</span>
                  @enderror
          </div>


          <div class="form-group">
            <label>Select Visit URL ( true/false )</label>
            <select name="visit" class="form-control">
              <option value="true">True</option>
              <option value="disabled"> False </option>

            </select>
          </div>

        <div class="form-group">
            <label>Select Repository Visit URL ( true/false )</label>
            <select name="rep_visit" class="form-control">
              <option value="true">True</option>
              <option value="disabled"> False </option>

            </select>
          </div>

          <div class="form-group">
            <label for="lang"> Coding Langauge</label>
            <input type="text"  value="{{ $edits->lang }}" class="form-control" name="lang" placeholder="PHP,LARAVEL,JAVASCRIPT">
            @error('lang')
        <span > {{ $message }}</span>
     @enderror
        </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->
          <!-- /.card-body -->

        </div>
        <!-- /.card -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
