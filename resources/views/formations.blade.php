@extends('layouts.app')

@section('content')

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="display-5 fw-bold">Centered hero</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
      </div>
    </div>
</div>
  


<div class="px-4 py-5 my-5 text-center">
        <div class="row row-cols-1 row-cols-md-4 g-4">

            @foreach ($formations as $formation) 

                <div class="col">
                <div class="card h-100">
                    <img class=" d-block" src="{{ asset('img/formation.PNG')}}" class="card-img-top" alt="...">
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
</div>   

<button class="btn">voir plus</button>
</div>
@endsection