@include('admin.include.sidebar')
@include('admin.include.header')

<div class="container">
    <div class="row">
        <div class="content-wrapper">
            <div class="col-md-8">
                <div class="card p-3">
                    <form action="{{ url('/store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Futsal Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
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
                            <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                            @error('location')
                                <span class="text-danger" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Ratings</label>
                            <input type="number" name="ratings" class="form-control" value="{{ old('ratings') }}">
                            @error('ratings')
                                <span class="text-danger" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Price per Hour</label>
                            <input type="number" name="price_per_hour" class="form-control" value="{{ old('price_per_hour') }}">
                            @error('price_per_hour')
                                <span class="text-danger" role="alert">
                                    <i>{{ $message }}</i>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="available_date">Available Date</label>
                            <input type="date" id="available_date" name="available_date" class="form-control" value="{{ old('available_date') }}">
                            @error('available_date')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="time_slots">Time Slots</label>
                            @for ($hour = 6; $hour < 20; $hour++)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="time_slots[]" value="{{ $hour }}:00-{{ $hour+1 }}:00">
                                        {{ $hour }}:00 - {{ $hour+1 }}:00
                                    </label>
                                </div>
                            @endfor
                            @error('time_slots')
                                <span class="text-danger"><i>{{ $message }}</i></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>   
    </div>
</div>

@include('admin.include.footer')
