@extends('layouts.app')

@section('content')

<div class="container col-xxl-8 px-4 py-5">

    <div>
        <h1 class="display-5 fw-bold">Bien venue dans votre formation en </h1>
        <h1 class="h1">{{$formation->name}}</h1>

        <div class="col-lg-6 ">
            <p class="lead mb-4">{{$formation->description}}</p>
        </div>
        
    </div>


    <ul class="list-group list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center bgm cw">
          <div class="ms-2 me-auto">
            <h3 class="fw-bold h-25">Liste des modules<h3>
          </div>
        </li>
        @php
            $i=1;
        @endphp

        @foreach ($formation->modules as $module) 
            
            <a href="{{route('module.show' , ['module'=>$module->id])}}" class="btn">
                <li class="list-group-item d-flex justify-content-between align-items-start ">
                    <div class="ms-2 me-auto">
                    <div class="fs-4">Module{{$i}}: <span class="cm">{{$module->name}}</span></div>
                    </div>
                    <span class="badge bgs cw rounded-pill">{{$module->chapitres->count()}}</span>
                </li>
            </a>
        @endforeach 
      </ul>

</div>  
    
@endsection