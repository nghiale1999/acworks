@extends('admin.layout.giadien')
@section('content')

<form class="table" action="" method="POST" enctype="multipart/form-data">
    @csrf
    
     
   <b>Tên :</b>  <input type="text" name="ten"">
   <b>Email :</b>  <input type="text" name="email">
   <b>Chức vụ :</b>  <input type="text" name="chucvu">
   <b>password :</b>  <input type="text" name="password">
   <b>level :</b>  <input type="text" name="level">
    


   
    <br>
    <input class="ml-4 mt-2 btn btn-primary" type="submit" value="add">
</form>
@if (session('success'))
    <div class="ml-5 mt-5">
        <p>{{ session('success') }}</p>
    </div>
@endif

@endsection