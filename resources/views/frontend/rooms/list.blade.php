@extends('master')
@section('content')
	

<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
        <div class="col-12 mt-2">
            <a class="btn btn-success" href="{{ route('create.room') }}">Thêm mới</a>
            <button class="btn btn-danger delete-product">Delete</button>
              <table>
              <tr>
                    <th>STT</th>
                    <th>ten phong</th>
                    <th>Hình ảnh</th>
                    <th>Thể loại phong</th>
                    <th>Giá tiền(VND)</th>
                    <th>trang thai</th>
                    <th>mo ta phong</th>
                    <th>thoi gian vao phong</th>
                    <th></th>
        
                    <th>thoi gian ra phong</th> 
                </tr>
         
         
                @foreach ($rooms as  $key=>$room)
                <tr>
                    <td>{{$key +1}}</td>
                    <td>{{$room->name}}</td>
                    <td>{{$room->image}}</td>
                    <td>{{$room->category_id}}</td>
                    <td>{{$room->price}}</td>
                    <td>{{$room->room_status}}</td> 
                    <td></td>
                    <td>{{$room->description}}</td>
                    <td></td>
                    <td>{{$room->time_in}}</td>
                    <td></td>
                    
                    <td>{{$room->time_out}}</td>
           
                </tr>
        
                @endforeach

            </table>
	</div>
</div>
@endsection