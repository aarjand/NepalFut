
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
 {{-- Time Slots Display --}}
 <div>
            <strong>Available Dates and Time Slots:</strong>
            <form action="{{ url('/book-slot') }}" method="post">
                @csrf
                <input type="hidden" name="futsal_id" value="{{ $futsal->id }}">
                <label for="booking_date">Select Date:</label>
                <input type="date" name="booking_date" id="booking_date" class="form-control" required>

                <div id="time-slots-container" class="d-flex flex-wrap">
                    @foreach($futsal->time_slots as $slot)
                        <button class="btn btn-outline-secondary m-2">{{ $slot }}</button>
                    @endforeach
                </div>
                
                <button type="submit" class="btn btn-primary mt-2">Book Slot</button>
            </form>
        </div>
    
<!-- test -->
    </div>
</div>


@endsection