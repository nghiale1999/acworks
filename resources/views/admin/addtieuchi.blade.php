@extends('admin.layout.giadien')
@section('content')

<form class="table" action="" method="POST" enctype="multipart/form-data">
    @csrf
    
     
   <b>Tên tiêu chí :</b>  <input type="text" name="tentieuchi"">
   <b>Điểm :</b>  <input type="text" name="diem">
   
    


   
    <br>
    <input class="ml-4 mt-2 btn btn-primary" type="submit" value="add">
</form>
@if (session('success'))
    <div class="ml-5 mt-5">
        <p>{{ session('success') }}</p>
    </div>
@endif

@endsection