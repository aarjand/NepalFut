@include('admin.include.sidebar')
@include('admin.include.header')
@include('admin.include.footer')


<div class="container">
    <div class="row">
    <div class="content-wrapper">
        <div class= "col-md-8">
            <div class="card p-3">
            <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Futsal Name</label>
        <input type="text" name="name" class="form-control"
        value="{{old('name')}}">
        @error('name')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Futsal Image</label>
        <input type="file" name="image" class="form-control">
        @error('image')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Futsal Docs</label>
        <input type="file" name="pan_vat_docs" class="form-control">
        @error('pan_vat_docs')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>


    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control"
        value="{{old('location')}}">
        @error('location')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Ratings</label>
        <input type="number" name="ratings" class="form-control"
        value="{{old('ratings')}}">
        @error('ratings')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Price per Hour</label>
        <input type="number" name="price_per_hour" class="form-control"
        value='{{old('price_per_hour')}}'>
        @error('price_per_hour')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>
    <div class="form-group">
    <label for="date">Select Date</label>
    <input type="date" id="date" name="date" class="form-control" onchange="getTimeSlots()">
</div>

<div class="form-group">
    <label for="time_slots">Available Time Slots</label>
    <select name="time_slots" id="time_slots" class="form-control">
        <!-- Time slots will be dynamically populated based on the selected date -->
    </select>
</div>

@error('date')
    <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
    </span>
@enderror

@error('time_slots')
    <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
    </span>
@enderror




    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control"
        value='{{old('status')}}'>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
       
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

            </div>
        
        </div>
        </div>   
    </div>
</div>