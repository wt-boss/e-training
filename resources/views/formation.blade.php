@extends('layouts.app')

@section('content')

<div class="container col-xxl-8 px-4 py-5">

    <div>
        <h1 class="display-5 fw-bold">Bien venue dans votre formation en {{$formation->name}}</h1>

        <div class="col-lg-6 ">
            <p class="lead mb-4">{{$formation->description}}</p>
        </div>
        
    </div>


    <ul class="list-group list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center bg-light">
          <div class="ms-2 me-auto">
            <h1 class="fw-bold h-25">Liste des modules<h1>
          </div>
        </li>

        @foreach ($formation->modules as $module) 
            <a href="{{route('module.show' , ['module'=>$module->id])}}" class="btn">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                    <div class="fs-3">{{$module->name}}</div>
                    </div>
                    <span class="badge bg-primary rounded-pill">{{$module->chapitres->count()}}</span>
                </li>
            </a>
        @endforeach 
      </ul>

</div>  
    
@endsection