@extends('layouts.app')

@section('css')

    
@endsection

@section('content')


<div class="container col-md-8  justify-content-md-center px-4 py-5">

<ul class="list-group list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center bgm">
      <div class="ms-2 me-auto">
        <h3 class="cw">{{$chapitre->name}}<h1>
      </div>
    </li>

</ul>

<ul class="list-group list-group-flush">

  <?php
    $i=1;  
  ?>
  @foreach ($chapitre->lecons as $lecon)
        
    
    <li class="list-group-item"> 
        <a href="#lecon{{$i}}" class="btn" >
            LECON{{$i}} :<span class="cm">{{$lecon->name}}</span> 
        </a> 
    </li>

      @php
          $i++;
      @endphp
  @endforeach 

  @php
  $i=1;
 @endphp

    

  </ul>

  
</div>

<div class="container col-md-8  justify-content-md-center px-4 py-5">
  @foreach ($chapitre->lecons as $lecon)
      <div class="container mb-5" id="lecon{{$i}}">
        <h3 class="cm"> <span class="cs">#</span> {{$lecon->name}}</h3>
        <p>{{$lecon->content}}</p>
      </div>

      @php
      $i++;
      @endphp
  @endforeach
    
</div>

@endsection