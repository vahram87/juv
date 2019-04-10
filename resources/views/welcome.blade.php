@extends("layouts.app")
@section('mine-content')
        <div class="container" style="min-height: 30rem;margin-top: 20px;">
               <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ URL::asset('/storage/juv3.jpg')}}" alt="First slide" style="height: 30rem;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ URL::asset('/storage/juv1.png')}}" alt="Second slide" style="height: 30rem;">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ URL::asset('/storage/juv2.jpg')}}" alt="Third slide" style="height: 30rem;">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
@endsection