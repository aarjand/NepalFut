
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
    						<img src="/storeimg/{{$futsal->image}}" class="w-100" alt="...">
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
<div class="container">
    <form action="{{Route('storefutsaldetails')}}" method="POST">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
        @csrf
        <input type="hidden" name="futsal_id" value="{{ $futsal->id }}">
        <!-- Additional inputs for new fields -->
        <input type="date" name="selected_date" required value="{{$futsal->available_date}}">
        
        <!-- Display timeslots as radio buttons -->
        @foreach($futsal->time_slots as $index => $slot)
<div class="form-check">
    <input class="form-check-input" type="radio" name="selected_timeslots" id="timeslot{{ $index }}" value="{{ $slot }}">
    <label class="form-check-label" for="timeslot{{ $index }}">
        {{ $slot }}
    </label>
</div>
@endforeach
        <button type="submit" class="btn btn-primary">Book</button>
    </form>
</div>
<script>
    
                
                
            </form>
        </div>
    

    </div>
</div>


@endsection