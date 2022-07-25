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
</div --}}>

<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
        <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
        </div>
      </div>
    </div>
</div>

  <div class="container col-xxl-8 px-4 py-5">
      <h2>
          Suivez les meilleures formations sur <br>
          E-TRAINIG
      </h2>

  


        <div class="row row-cols-1 row-cols-md-3 g-4">

            @foreach ($formations as $formation) 

                <div class="col">
                <div class="card h-100">
                    <img class=" d-block " src="{{ asset('img/formation.PNG')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$formation->name}}</h5>
                    <p class="card-text">
                        {{$formation->content}}
                    </p>

                    <a href="{{route('formation.show' , ['formation'=>$formation->id])}}" class="btn btn-action">Get Started</a>
                </div>
                </div>
                </div>
           
            @endforeach
        </div>   
        
        <button class="btn">voir plus</button>
    </div>




@endsection


