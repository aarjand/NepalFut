
@extends('admin.futsal.index')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class='content-wrapper'>
            <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <h3 class="card-title" style="margin-top: 8px; font-weight: bold;">Users</h3>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">S.N.</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Contact</th>
                                    <th style="width: 250px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($data as $futsalusers)
                                        <tr>
                                            <td>{{$futsalusers->id}}</td>
                                            <td>{{$futsalusers->name}}</td>
                                            <td>{{$futsalusers->email}}</td>
                                            <td>{{$futsalusers->address}}</td>
                                            <td>{{$futsalusers->contact}}</td>
                                        
                                            <td>
                                        
                                                <form action="/delete/{{$futsalusers->id}}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    
                                                    @method('DELETE')
                                                    
                                                    <button class="btn btn-danger"
                                                        onclick="return confirm('Do you want to delete this User?');"><i
                                                            class="fa fa-trash"></i></button>
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