@extends('layouts.app')


@section('formations')
@foreach ($formations as $formation)
<li><a class="dropdown-item" href="#">{{$formation->name}}</a></li>
@endforeach
@endsection

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>--}}

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/hero.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Profites de la meilleure experience des formations en ligne</h1>
        <p class="lead"> Des meilleures formations en informatiques , pratiques , avec um suivie rewgulier de la part des enseignat de notre plate forme . vous avez la possibilite d'obtenir un certificat de formation , et une possibile d'emploi dans nos structure partenaire.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            @guest

            <a  class="btn btn-login btn bgm cw btn-lg px-4 me-md-2" href="{{route('login')}}">Login</a>
            <a  class="btn btn-register btn-lg  px-4" href="{{route('register')}}">Register</a>   
    
            @endguest

 
        </div>
      </div>
    </div>


 
      <h1 class="display-5 fw-bold lh-1 mb-5">
          Suivez les meilleures formations sur <br>
          E-TRAINIG
      </h1>

  

    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4  row-cols-sm-2  g-5">

            @php
                $i=1;

            @endphp



            @foreach ($formations as $formation) 

                @php
                  $path="img/formation".$i.'.png';
                  $avatar="img/avatar.png"
                @endphp

                <div class="col">
                <div class="card h-100">

                    @if ($i<5)
                    <img class=" d-block img-fluid" src="{{$path}}" class="card-img-top" alt="...">
                    @else
                    <img class=" d-block img-fluid" src="{{$avatar}}" class="card-img-top" alt="...">  
                    @endif
                    
                    <div class="card-body">
                    <h5 class="card-title">{{$formation->name}}</h5>
                    <p class="card-text">
                        {{$formation->description}}
                    </p>

                    <a href="{{route('formation.show' , ['formation'=>$formation->id])}}" class="btn btn-action">Get Started</a>
                </div>
                </div>
                </div>

                <?php
                     $i++
                ?>
           
            @endforeach
        </div>   
        
        <a class="btn btn-action mt-3" href="{{route('formation.index')}}">voir plus</a>
    </div>



</div>
@endsection
