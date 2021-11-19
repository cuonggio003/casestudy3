@extends('master')
@section('content')
	

<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">
        <div class="col-12 mt-2">
            <a class="btn btn-success" href="#">Thể loại</a>
            
        </div>
        <div class="card mt-2">
            <h5 class="card-header">Danh sách Thể loại</h5>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                       <th></th>
                        <th>ID</th>
                         <th></th>
                        <th>Thể loại</th>
                       
    
                    </tr>
                    @foreach($categories as $key => $category)
    
                        <tr>
                          
                            <td><input type="checkbox"></td>
                            <td>{{$key + 1}}</td>
                              <td></td>
                            <td>{{$category->name}}</td>
                          
                            
                        </tr>
    
                    @endforeach
                </table>
            </div>
        </div>
		
		
	</div>
</div>
@endsection