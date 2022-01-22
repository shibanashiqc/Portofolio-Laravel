@extends('layouts.base')
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $project }}</h3>

                <p>Total Projects</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/projects" class="small-box-footer">Manage <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $skils }}<sup style="font-size: 20px"></sup></h3>

                <p>Total Skils </p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/skils" class="small-box-footer">Manage <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('home.edit') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" required  value="{{ $data->name }}"  name="name" placeholder="Enter Name">
                      @error('name')
                          {{ $message }}
                      @enderror
                    </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" required value="{{ $data->email }}" name="email" placeholder="">
                    @error('email')
                    {{ $message }}
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" required   value="{{ $data->title }}" name="title" placeholder="">
                    @error('title')
                    {{ $message }}
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" required  value="{{ $data->role }}" name="role" placeholder="">
                    @error('role')
                    {{ $message }}
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="github">Github URL</label>
                    <input type="text" class="form-control" required  value="{{ $data->github }}" name="github" placeholder="">
                    @error('github')
                    {{ $message }}
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="instagram">Instagram URL</label>
                    <input type="text" class="form-control" required value="{{ $data->instagram }}" name="instagram" placeholder="">
                    @error('instagram')
                    {{ $message }}
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="facebook">Fb URL</label>
                    <input type="text" class="form-control" required value="{{ $data->facebook }}" name="facebook" placeholder="">
                    @error('facebook')
                    {{ $message }}
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="wp">WP URL</label>
                    <input type="text" class="form-control" required  value="{{ $data->wp }}" name="wp" placeholder="">
                    @error('wp')
                    {{ $message }}
                @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->



          </div>

          <!-- ./col -->
        </div>

    </section>
    <!-- /.content -->




  </div>
@endsection
