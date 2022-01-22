<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data->title }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
    <div class="nav-container">

        <header>
            <a href="" class="logo">{{ $data->name }}</a>
            <nav>
                <button type="button"><i class="fas fa-bars"></i> Menu</button>
                <ul>
                    <li><a href="#section-three">Works</a></li>
                    <li><a href="#section-two">Skills</a></li>
                    <li><a href="#">Hire me</a></li>
                </ul>
            </nav>
        </header>
            <div class="social-media-header">

                <ul>
                    <li><a href="{{ $data->github }}"><i class="fab fa-github" ></i></a></li>
                    <li><a href="{{ $data->instagram }}"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{ $data->facebook }}"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>
    </div>

    <div class="section-one" >
        <div class="content-one">
            <div class="svg-one">
                <img src="{{ asset('assests/svg/web_developer.svg') }}" alt="Web-developer">
            </div>

            <h3>{{ $data->name }}</h3>
            <h4>{{ $data->role }}</h4>
            <div class="button">
                <button class="primary" type="button">hire me</button>
                 <a class="secondary" href="{{ $data->wp }}">Connect me</a>
            </div>

        </div>

      <div class="content-two">
          <img src="{{ asset('./assests/svg/undraw_programming_2svr.svg') }}" alt="abstract">
      </div>

    </div>
    <div class="svgnew">
        <div>
            <img src="{{ asset('./assests/svg/triangle.svg') }}" alt="Test">
        </div>


    </div>
    <div class="section-two" id="section-two">
        <h3 >My Skills</h3>
        <div class="skills">
            <div class="col-one">
                @foreach ( $skills as $skill )
                <div class="img">
                    <img src="{{ $skill->img }}" alt="{{ $skill->name }}" width="40"
                    height="40">
                    <p class="{{ $skill->class }}">{{ $skill->name }}</p>
                </div>
                @endforeach


            </div>




        </div>

    </div>
    <div class="section-three" id="section-three">
        <h3>MY WORKS</h3>
        <div class="all-projects">
@foreach ($projects as $project )
<div class="card">
    <img src="{{ asset($project->img) }}" alt="Avatar" style="width:100%">
    <div class="container">
      <h4><b>{{ $project->name}}</b></h4>
      <p>Coding Langauge : {{ $project->lang }}</p>
      <p>{{ $project->description}}</p>
      <div class="icons">
            <button type="button" {{ $project->rep_visit}} > @if($project->repo_url)
                <a class="fab fa-github fa-2x" href="{{ $project->repo_url}}"></a>
              @else
              <i class="fab fa-github fa-2x "></i>
               @endif </button>
          <button type="button" {{ $project->visit}} >
            @if($project->link)
                <a class="fas fa-eye fa-2x" href="{{ $project->link}}"></a>
              @else
              <i class="fas fa-eye fa-2x"></i>
               @endif </button>
            </a></button>


      </div>
    </div>
  </div>
@endforeach


    </div>
</div>

    <footer>
        <div class="footer">
            <div class="logo"> <h4>{{ $data->name }}</h4></div>
            <div class="icons">

                <ul>
                    <li><a href="{{ $data->github }}"><i class="fab fa-github" ></i></a></li>
                    <li><a href="{{ $data->instagram }}"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{ $data->facebook }}"><i class="fab fa-facebook"></i></a></li>
                </ul>
            </div>

        </div>

    </footer>

</body>
</html>
