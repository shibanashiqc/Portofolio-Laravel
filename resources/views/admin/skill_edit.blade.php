@extends('layouts.base')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Skills</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Skills</li>
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
      <h3 class="card-title">Add Skill</h3>
      @if ( Session::has('msg'))

    <center><span class="badge badge-success"> {{ Session::get('msg') }} </span></center>

    @endif
    </div>
    <!-- /.card-header -->
    <!-- form start -->


    <form method="POST" action="{{ route('skil.update', ['id' => $edits->id]) }}">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="name">Skill Name</label>
          <input type="text" class="form-control" value="{{ $edits->name }}" name="name" placeholder="Enter Skill name">

        @error('name')
           <span> {{ $message }}</span>
        @enderror
    </div>
        <div class="form-group">
          <label for="img">Logo Skill url svg</label>
          <input type="text" class="form-control" value="{{ $edits->img }}" name="img" placeholder="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png">

        @error('img')
        <span > {{ $message }}</span>
     @enderror
    </div>
        <div class="form-group">
            <label for="class">CLass name</label>
            <input type="text" class="form-control" value="{{ $edits->class }}" name="class" placeholder="Class name php,html">
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
