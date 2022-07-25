@extends('layouts.app')

@section('css')

    
@endsection

@section('content')


<div class="container col-xxl-8 px-4 py-5">

<ul class="list-group list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center bg-light">
      <div class="ms-2 me-auto">
        <h1 class="fw-bold h-25">{{$chapitre->name}}<h1>
      </div>
    </li>

</ul>

<ul class="list-group list-group-flush">
    @for ($i = 1; $i <= $module->chapitres->count(); $i++)
    <li class="list-group-item"> 
        <a href="" class="btn">
            Chapitre{{$i}} : {{$module->chapitres()->where('id' ,$i)->first()->name}}
        </a>
        
    </li>
    @endfor
    

  </ul>

  
</div>
@endsection