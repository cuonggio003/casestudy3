
@extends('master')
@section('content')

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


   <section class="get-in-touch">
   <h1 class="title">Thêm mới phòng</h1>
   <form class="contact-form row">
      <div class="form-field col-lg-6">
        <input class="form-control" type="text" placeholder="Id" required>
      </div>
      <div class="form-field col-lg-6">
        <input class="form-control" type="text" placeholder="Tên phòng" required>
     </div> 
     
     <div class="form-group">
        <label for="exampleFormControlFile1"></label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" required>
      </div>
      <div class="form-field col-lg-12">
        <select class="form-control" id="Thể loại" required>
          <option>Thể loại</option>
          <option>Phòng đơn</option>
          <option>Phòng đôi</option>
          <option>Phòng VIP</option>
        </select>
      </div>
      <div>

      </div>

      <div class="form-field col-lg-6 ">
         
         <input class="form-control" type="text" placeholder="Giá phòng" required>
      </div>
       <div class="form-field col-lg-6 ">
        <select class="form-control">
            <option>Trạng thái phòng</option>
            <option>Phòng trống</option>
            <option>Phòng đã cho thuê</option>
          </select>
      </div>
      <div class="form-field col-lg-6" >
        <label for="exampleFormControlTextarea1" ></label>
        <textarea class="form-control" type="text" placeholder="mô tả phòng" rows="3" required></textarea>
      </div>
      
      <div class="form-field col-lg-12">
         <input class="submit-btn" type="submit" value="Submit">
      </div>
   </form>
   </section>

    </div>
</div>

@endsection