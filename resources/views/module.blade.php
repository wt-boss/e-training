<?php
  $i=1;
?>

@extends('layouts.app')

@section('css')

    
@endsection

@section('content')


<div class="container col-xxl-8 px-4 py-5">

<ul class="list-group list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center bgm cw">
      <div class="ms-2 me-auto">
        <h3 class="">Liste des Chapitres<h3>
      </div>
    </li>

</ul>

<ul class="list-group list-group-flush">

    @foreach ($module->chapitres as $chapitre)
    <li class="list-group-item"> 
      <a href="{{route('chapitre.show' , ['chapitre'=>$chapitre->id])}}" class="btn">
         <h5>Chapitre{{$i}} :  <span class="cm">{{$chapitre->name}}</span></h5> 
      </a>
      
  </li>
      <?php $i++?>
  @endforeach
    

  </ul>

  
</div>
@endsection