@extends('admin.futsal.index')

@section('content')
    <div class="content-wrapper">

        <div class="container-fluid">
            
            <!-- 4-blocks row start -->
            <div class="row">
                <div class="col-sm-12">
                    <!-- Basic Table starts -->
                    <div class="card">
                       
                        <div class="card-block">
                            <div class="row">
                                <div class="col-sm-12 table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                               
                                                <th>Futsal Name</th>
                                                <th>User </th>
                                                <th>Amount </th>
                                               
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($data as $item)
                                            <tr>
                                                <td>this</td>
                                                <td>that</td>
                                                <td>and</td>
                                               
                                            </tr>
                                           @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Main content ends -->
        <!-- Container-fluid ends -->
        
    </div>
@endsection