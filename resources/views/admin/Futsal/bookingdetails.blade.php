
@extends('admin.futsal.index')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class='content-wrapper'>
            <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <h3 class="card-title" style="margin-top: 8px; font-weight: bold;">Bookings</h3>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">S.N.</th>
                                    <th>User Id</th>
                                    <th>Futsal Id</th>
                                    <th>Booked Date</th>
                                    <th>Booked Timeslots</th>
                                    <th>Payments</th>
                                    <th style="width: 250px">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                        @foreach($bookings as $booked)
                                        <tr>
                                            <td>{{$booked->id}}</td>
                                            <td>{{$booked->futsaluser_id}}</td>
                                            <td>{{$booked->id}}</td>
                                            <td>{{$booked->selected_date}}</td>
                                            <td>{{$booked->selected_timeslots}}</td>
                                            <td>{{$booked->price_per_hour}}</td>
                                            <td>Booked</td>
                                            <td>
                                        
                                                
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