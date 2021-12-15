@extends('admin.layout.giadien')
@section('content')

<table class="table">
    <thead>
        <tr >
            <td >id</td>
            <td >tên tiêu chí</td>
            <td >điểm</td>
            <td >delete</td>
            
            
        </tr>
    </thead>
    <tbody>

  
        @foreach ($data as $value)
            
            <tr>
                
                
                <td >
                    <p>{{$value->id}}</p>
                </td>
                <td >
                    <p>{{$value->tentieuchi}}</p>
                </td>
                <td >
                    <p>{{$value->diem}}</p>
                </td>
                
               
                
                <td >
                    <a  class="btn btn-primary" href="{{url('admin/qltieuchi/delete/'.$value->id)}}">delete</a>
                    
                </td>
                
            </tr>
                
        @endforeach
        
        
        

        
    </tbody>
</table>

<button class="ml-5"><a href="{{url('admin/qltieuchi/add')}}">add</a></button>
@if (session('success'))
    <div class="ml-5 mt-5">
        <p>{{ session('success') }}</p>
    </div>
@endif

@endsection