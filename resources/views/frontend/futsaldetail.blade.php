
@extends('welcome')

@push('title')
<title>Futsals- Book Futsals</title>
@endpush
@section('content')
<div class="container">
    <div class="card mb-3" style="max-width: 1000px; margin:0 auto;">
        <div class="row g-0">
          
            <div class="col-md-4">
            <div class="left-image">
    						<img src="{{$futsal->image}}" class="w-100" alt="...">
						</div> 
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$futsal->name}}</h5>
                    <p style="line-height: 35px;"><i class="fa fa-map-marker" aria-hidden="true"></i>
					          {{$futsal->location}}</p>
                    <div  class="price">
					    <p>Rs. {{ $futsal->price_per_hour }}/hr</p>
				        </div>

               
                </div>
            </div>
            
        </div>
        <div class = "rowo g-0">
        <div class="accomodations text-center">
        <img src="{{ asset('frontend/img/accomodations.png') }}" class="w-100" style="max-width: 400px; max-height: 200px;" alt="">
                </div>
        </div>

 


<!-- test -->

        <div class="row">
            
            <div class="col-md-6">
                <div class="card mb-3">
                    
                    <div class="card-body">
                      
                        <p class="card-text"><strong>Rating:</strong> {{ $futsal->rating ?? 'N/A' }}</p>
                       <input type='date' name='available_date'> <strong>Available Date:</strong> {{ $futsal->available_date }}
                        <p class="card-text"><strong>Time Slots:</strong> {{ is_array($futsal->time_slots) ? implode(', ', $futsal->time_slots) : 'N/A' }}</p>                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
           
        </div>
   

<!-- test -->

    </div>
</div>


@endsection