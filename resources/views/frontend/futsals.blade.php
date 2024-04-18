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

					</div> 
				</section>




		

		<section class="Futsal">
			<div class="container">
				<div class="futsal-post">
					<hr>
					@foreach ($futsal as $Futsals)
				<div class="row g-0 bg-body-secondary position-relative">
  					<div class="col-md-6 mb-md-0 p-md-4">
  						<div class="left-image">
    						<img src="storeimg/{{$Futsals->image}}" class="w-100" alt="...">
						</div> 
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

				<a href="{{route('showfutsaldetails',[$Futsals->id])}}"><button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Show Details
				</button></a>

 				</div>




					

 				</div>  
				 <hr>
				@endforeach
				</div>  


			</div> 


		</section>




@endsection
