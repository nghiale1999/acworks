<!doctype html>
<html lang="en">
  <head>
    <title>home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('frontend/frontend.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="#">ACworks</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{url('frontend/home')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  
              </ul>
              
          </div>
      </nav>
    <form class="table" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <p><b>Tìm theo tháng:</b></p><input type="text" placeholder="dd-mm-yyyy" name="ngay">
        <input class="mt-2 btn btn-primary" type="submit" value="tìm">
    </form>


<table class="table">
    <thead>
        <tr >
            <td >username</td>
            <td >email</td>
            <td >chức vụ</td>
            <td >tên tiêu chí</td>
            <td >điểm</td>
            <td >ngày đánh giá</td>
            
            <td></td>
        </tr>
    </thead>
    <tbody>

  
        @foreach ($data as $value)
            
            <tr>
                
                
                <td >
                    <p>{{$value->name}}</p>
                </td>
                
                <td >
                    <p>{{$value->email}}</p>
                </td>
                <td >
                    <p>{{$value->chucvu}}</p>
                </td>
                <td >
                    <p>{{$value->tentieuchi}}</p>
                </td>
                <td >
                    <p>{{$value->diem}}</p>
                </td>
                <td >
                    <p>{{$value->created_at}}</p>
                </td>
                
                
                
                
            </tr>
                
        @endforeach
        
        
        

        
    </tbody>
</table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>