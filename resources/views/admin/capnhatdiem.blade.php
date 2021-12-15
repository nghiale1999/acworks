@extends('admin.layout.giadien')
@section('content')


<form class="table" action="" method="POST" enctype="multipart/form-data">
    @csrf
    
    

    <div >
        <label >Tên nhân viên:</label>
        <div >
            <select  name="nhanvien" >
                                       
                @foreach ($nhanvien as $value)
                    <option value="{{$value->id}}" >{{$value->name}}</option>
                    
                @endforeach
                
            
            
            </select>
        </div>
    </div>


    <div >
        <label >Tiêu chí đánh giá:</label>
        <div >
            <select  name="tieuchi">
                                       
                @foreach ($tieuchi as $value)
                    <option value="{{$value->id}}" >{{$value->tentieuchi}}</option>
                    
                @endforeach

            </select>
        </div>
    </div>





    <div >
        <label >Ngày đánh giá:</label>
        <div >

            <input type="text" placeholder="dd-mm-yyyy" name="ngay">
        </div>
    </div>


    
   
    


   
    
    <input class="mt-2 btn btn-primary" type="submit" value="đánh giá">
</form>
@if (session('success'))
    <div class="ml-5 mt-5">
        <p>{{ session('success') }}</p>
    </div>
@endif
@endsection