
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
                                    <th>User Name</th>
                                    <th>Futsal Booked</th>
                                    <th>Date</th>
                                    <th>Timeslots</th>
                                    <th>Payments</th>
                                    <th style="width: 250px">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                       
                                        <tr>
                                            <td>1</td>
                                            <td>Perish Ghimire</td>
                                            <td>ABC</td>
                                            <td>2024-01-24</td>
                                            <td>6-7</td>
                                            <td>1450</td>
                                            <td>Booked</td>
                                            <td>
                                        
                                                
                                            </td>
                                        </tr>
                                       
                                        
                                     
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