@extends('layouts.app')

@section('content')

<div class="container col-xxl-8 px-4 py-5">
        <div class="px-4 py-5 my-5 text-center">
            <img class=" mx-auto mb-4 img-formations" src="img/logo.png" alt="" >
            <h1 class="display-5 fw-bold">Le meilleure des formations</h1>
            <div class="col-lg-6 mx-auto">
            <p class="lead mb-4"> Des meilleures formations en informatiques , pratiques , avec um suivie rewgulier de la part des enseignat de notre plate forme . vous avez la possibilite d'obtenir un certificat de formation , et une possibile d'emploi dans nos structure partenaire.</p>

            </div>
        </div>
  


        <div class="row row-cols-1 row-cols-md-4 g-4">
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
</div>
@endsection