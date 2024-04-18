@extends('welcome')
@push('title')
<title>Futsals-Nepal Futsal Manager</title>
@endpush
@section('content')
<!-- Search bar started -->
			
<section class="search-bar">
					<div class="container">
						
						<div class="row">
							<div class="col-lg-9 col-md-10 col-12">
								<form class="search-form" action="{{route('futsals')}}" method='GET'>
								<input placeholder="Search Futsal" type="search" name="search" value="{{$search}}"/>
								<button class="btn" type="submit"><i class="fa fa-search"></i></button>
							</form>
							</div>  <!-- col-lg-6 col-md-6 col-12 -->

							<div class="col-lg-3 col-md-2 col-12">
								
        						<select class="form-select" aria-label="Default select example">
  								<option selected>Location</option>
  								<option value="1">Pokhara</option>
  								<option value="2">Kathmandu</option>
  
								</select>
 
							</div> <!-- col-lg-6 col-md-2 col-12 -->
						
						
						</div> <!-- row -->
						
					</div> <!-- contai
					ner -->
				</section>

				


		<!-- Search bar ended -->

		<section class="Futsal">
			<div class="container">
				<div class="futsal-post">
					<hr>
					@foreach ($futsal as $Futsals)
				<div class="row g-0 bg-body-secondary position-relative">
  					<div class="col-md-6 mb-md-0 p-md-4">
  						<div class="left-image">
    						<img src="storeimg/{{$Futsals->image}}" class="w-100" alt="...">
						</div> <!-- left-image -->
  					</div>
  				<div class="col-md-6 p-4 ps-md-0">
    				<h5 class="mt-0">{{  $Futsals->name}}</h5>
   					 <p style="line-height: 35px;"><i class="fa fa-map-marker" aria-hidden="true"></i>
					{{$Futsals->location}}</p>
				<div class="rate">
    				<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star checked"></span>
					<span class="fa fa-star"></span>
					<span class="fa fa-star"></span>
				</div>
					
				<div  class="price">
					<p>Rs.{{ $Futsals->price_per_hour }}/hr</p>
				</div>

				<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  				Book Futsal
				</button>

 				</div>
				
					@foreach($futsals as $Futsals)
					<!-- Modal -->
					<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
           
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="staticBackdropLabel">{{$Futsals->name}} Futsal</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="futsal-image">
                    <img src="storeimg/{{$Futsals->image}}" class="w-100" alt="...">
                </div>
                <div class="location">
                    <p style="line-height: 35px;"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$Futsals->location}}</p>
                </div>
                <div class="price">
                    <p>Rs.{{ $Futsals->price_per_hour }}/hr</p>
                </div>

				<div class="accomodations">
					<h5>Accomodations</h5>
				<img src="{{asset('frontend/img/accomodations.png')}}" class="w-100" alt="...">
				
				</div>



    <div class="row justify-content-center">
        <div class="col-md-8">
           
                

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="#">
                        @csrf

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" required>

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time_slot" class="col-md-4 col-form-label text-md-right">Time Slot</label>

                            <div class="col-md-6">
                                <select id="time_slot" class="form-control @error('time_slot') is-invalid @enderror" name="time_slot" required>
                                    <option value="6-7">6-7</option>
                                    <option value="7-8">7-8</option>
                                    <option value="8-9">8-9</option>
                                    <!-- Add more time slots as needed -->
                                </select>

                                @error('time_slot')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                    </form>
                </div>
            
        </div>
    </div><div class="form-group row">
    <label for="example-date-input" class="col-xs-2 col-form-label form-control-label">Date</label>
    <div class="col-sm-10">
        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
    </div>
</div>

            </div>
			
			
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn">Book Now</button>
            </div>
           
        </div>
    </div>
</div>
@endforeach

					<!-- Modal -->
				
 				</div>  <!--row-->
				 <hr>
				@endforeach
				</div>  <!--futsalpost-->
				
			
			</div> <!--container-->

			
		</section><!-- futsal -->
		



@endsection