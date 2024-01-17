@extends('layout.adminmaster')
@section('content')
<div class="container">
  <h2>Created online Customer</h2>
  <form   method="post" action="{{route('onlineCustUpdate',[$OnlineCust->id])}}"  >
    @csrf
  <div class="form-group">
      <label for="Name">name:</label>
      <input type="text" class="form-control" id="name" value="{{$OnlineCust->name}}" name="name">
    </div>
    <div class="form-group">
      <label for="Address">Addrres:</label>
      <input type="text" class="form-control" id="Address" value="{{$OnlineCust->address}}" name="address">
    </div>
    <div class="form-group">
      <label for="Phone">Phone:</label>
      <input type="number" class="form-control" id="Phone" value="{{$OnlineCust->phone}}" name="phone">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="{{$OnlineCust->email}}" name="email">
    </div>
    <div class="form-group">
      <label for="accountUserName">user Name:</label>
      <input type="text" class="form-control" id="accountUserName" value="{{$OnlineCust->accountUserName}}"name="accountUserName">
    </div>
    <div class="form-group">
      <label for="Account Number"> Accopunt Number:</label>
      <input type="text" class="form-control" id="accountNumber" value="{{$OnlineCust->accountNumber}}" name="accountNumber">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@endsection