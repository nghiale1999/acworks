@extends('admin.layout.giadien')
@section('content')

<table class="table">
    <thead>
        <tr >
            <td >id</td>
            <td >tên</td>
            <td >email</td>
            <td >chức vụ</td>
            <td >level</td>
            <td >delete</td>
            <td >edit</td>
            <td></td>
        </tr>
    </thead>
    <tbody>

  
        @foreach ($data as $value)
            
            <tr>
                
                
                <td >
                    <p>{{$value->id}}</p>
                </td>
                <td >
                    <p>{{$value->name}}</p>
                </td>
                <td >
                    <p>{{$value->email}}</p>
                </td>
                <td >
                    <p>{{$value->chucvu}}</p>
                </td>
                
                @if ($value->level == 0)
                    <td>member</td>
                @else
                    <td>admin</td>
                @endif
                
                <td >
                    <a  class="btn btn-primary" href="{{url('admin/qlnhanvien/delete/'.$value->id)}}">delete</a>
                    
                </td>
                <td >
                    <a  class="btn btn-primary" href="{{url('admin/qlnhanvien/edit/'.$value->id)}}">Edit</a>
                </td>
            </tr>
                
        @endforeach
        
        
        

        
    </tbody>
</table>

<button class="ml-5"><a href="{{url('admin/qlnhanvien/add')}}">add</a></button>
@if (session('success'))
    <div class="ml-5 mt-5">
        <p>{{ session('success') }}</p>
    </div>
@endif

@endsection