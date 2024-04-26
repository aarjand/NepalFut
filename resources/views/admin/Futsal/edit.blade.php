@include('admin.include.sidebar')
@include('admin.include.header')
@include('admin.include.footer')


<div class="container">
    <div class="row">
    <div class="content-wrapper">
        <div class= "col-md-8">
            <div class="card p-3">
                <h3>Edit Futsal "{{$futsal->name}}"</h3>
            <form action="/update/{{$futsal->id}}" method="post" enctype="multipart/form-data">
    @csrf

    @method('PUT')

    <div class="form-group">
        <label>Futsal Name</label>
        <input type="text" name="name" class="form-control"
        value="{{old('name', $futsal->name)}}">
        @error('name')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Futsal Image</label>
        <input type="file" name="image" class="form-control" value='{{old('image', $futsal->image)}}'>
        @error('image')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Futsal Docs</label>
        <input type="file" name="pan_vat_img" class="form-control" value='{{old('pan_vat_img', $futsal->pan_vat_docs)}}'>
        @error('pan_vat_img')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Location</label>
        <input type="text" name="location" class="form-control"
        value="{{old('location', $futsal->location)}}">
        @error('location')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Ratings</label>
        <input type="number" name="ratings" class="form-control"
        value="{{old('ratings', $futsal->ratings)}}">
        @error('ratings')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <label>Price per Hour</label>
        <input type="number" name="price_per_hour" class="form-control"
        value='{{old('price_per_hour', $futsal->price_per_hour)}}'>
        @error('price_per_hour')
        <span class="text-danger" role="alert">
        <i>{{ $message }}</i>
        </span>
        @enderror
    </div>

    <div class="form-group">
                            <label>Available Date</label>
                            <input type="date" name="available_date" class="form-control" value="{{ old('available_date') }}">
                            @error('available_date')
                                <span class="text-danger" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Time Slots</label>
                            @for ($hour = 6; $hour < 20; $hour++)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="time_slots[]" value="{{ $hour }}:00-{{ $hour+1 }}:00">
                                        {{ $hour }}:00 - {{ $hour+1 }}:00
                                    </label>
                                </div>
                            @endfor
                            @error('time_slots')
                                <span class="text-danger" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>
    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control"
        value='{{old('status', $futsal->status)}}'>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
       
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
</form>

            </div>
        
        </div>
        </div>   
    </div>
</div>