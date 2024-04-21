@include('admin.include.header')
@extends('admin.futsal.index')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class='content-wrapper'>
            <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title" style="margin-top: 8px; font-weight: bold;">Futsal</h3>
                        
                        <a href="{{url('/create')}}" class="btn btn-success float-right"
                            style="margin-bottom: 0px"><i class="fa fa-plus" style="font-size: 12px">
                                Add Futsal
                            </i>
                        </a>
                    </div>
                   
                    <form action="{{route('futsaldetails')}}" method='GET' >
                        <div class="form-group container-fluid">
                            <input type="search" name="search" class="form-control" aria-describedby="helpId" placeholder="Search by Futsal Name" value="{{$searchfutsal}}">
                            <button class="btn btn-success ">
                                Search
                            </button>
                        </div>
                        </form>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">S.N.</th>
                                    <th>Futsal Name</th>
                                    <th>Futsal Image</th>
                                    <th>Pan/VAT Docs</th>
                                    <th>Address</th>
                                    <th>Price</th>
                                    <th>Available Date</th>
                                    <th>Available Timeslots</th>
                                    <th>Ratings</th>
                                    <th style="width: 50px">Status</th>
                                    <th style="width: 250px">Action</th>
                                </tr>c
                            </thead>
                            <tbody>
                            
                            @foreach($data as $Futsals)
                                        <tr>
                                            <td>{{$Futsals->id}}</td>
                                            <td>{{$Futsals->name}}</td>
                                            <td>
                                               
                                                <img src="storeimg/{{$Futsals->image}}"
                                                    alt="" class="img img-responsive img-fluid"/>
                                            </td>
                                            <td>
                                               
                                                <img src="pan_vatimg/{{$Futsals->pan_vat_docs}}"
                                                    alt="" class="img img-responsive img-fluid"/>
                                            </td>
                                            
                                            <td>{{$Futsals->location}}</td>
                                            <td>{{$Futsals->price_per_hour}}</td>
                                            <td>{{$Futsals->available_date}}</td>
                                            <td>
                                                @if(is_array($Futsals->time_slots))
                                                    <ul>
                                                        @foreach($Futsals->time_slots as $slot)
                                                            <li>{{ $slot }}</li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    {{ $Futsals->time_slots }}
                                                @endif
                                            </td>
                                            <td>{{$Futsals->ratings}} </td>
                                            <td>{{$Futsals->status}} </td>

                                        
                                            <td>
              
                                                <a href="edit/{{$Futsals->id}}" class="btn btn-success">
                                                    <i class="fa fa-pen">

                                                    </i>
                                                </a>
                                            
                                                <form action="/deletefutsaldetails/{{$Futsals->id}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" onclick="return confirm('Do you want to delete this Futsal?');">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>

                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                     
                            </tbody>
                            
                        </table>
                        
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    
    
    @endsection