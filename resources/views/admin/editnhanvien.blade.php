@extends('admin.layout.giadien')
@section('content')

<form class="table" action="" method="POST" enctype="multipart/form-data">
    @csrf
    <b>id :</b>  <input type="text" name="id" value="{{$data[0]->id}}" readonly>
     
   <b>Tên :</b>  <input type="text" name="ten" value="{{$data[0]->name}}">
   <b>Email :</b>  <input type="text" name="email" value="{{$data[0]->email}}" readonly>
   <b>Chức vụ :</b>  <input type="text" name="chucvu" value="{{$data[0]->chucvu}}">
    


   
    <br>
    <input class="ml-4 mt-2 btn btn-primary" type="submit" value="Edit">
</form>
@if (session('success'))
    <div class="ml-5 mt-5">
        <p>{{ session('success') }}</p>
    </div>
@endif

@endsection