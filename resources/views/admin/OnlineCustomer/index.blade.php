@extends('layout.adminmaster')

@section('content')

    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">

            <div class="card-header">
                <h4>Designation List</h4>
                <div>
                        <a href="{{route('onlineCustomerCreate')}}" class="badge badge-primary">Add</a>

               </div>  
                
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tr>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>User Name</th>
                            <th>Account number</th>
                            <th>Action</th>
                        </tr>
                        @foreach($Onlinecust as $custmoer)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$custmoer->name}}</td>
                            <td>{{$custmoer->address}}</td>
                            <td>{{$custmoer->phone}}</td>
                            <td>{{$custmoer->email}}</td>
                            <td>{{$custmoer->accountUserName}}</td>
                            <td>{{$custmoer->accountNumber}}</td>
                            <td>
                            <div>
                               <a href="{{route('editView',[$custmoer->id])}}" class="badge badge-primary">Edit</a>
                               <a href="{{route('delete',[$custmoer->id])}}" class="badge badge-danger">Delete</a>
                            </div>                 
                            </td>
                        </tr>

                        @endforeach
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
 
@endsection