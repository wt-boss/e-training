@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="module.css">
    
@endsection

@section('content')

 <ul class="list-group list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center bg-light">
      <div class="ms-2 me-auto">
        <h1 class="fw-bold h-25">{{$module->name}}<h1>
      </div>
    </li>
  </ul>



  
    
@endsection