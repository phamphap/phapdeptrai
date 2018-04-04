@include('header')



@include('slide')
<div class="container text-center">    
    <h3>Sản Phẩm Mới</h3>
    <br>
    <div id="row-border"></div>
      <div class="row">
        @foreach($slide as $sl)
          <div class="col-sm-2">
            <img src="upload/sanpham/{{$sl->Hinh}}" class="img-responsive" style="width:100%" alt="Image">
            <p>{{$sl->Ten}}</p>
          </div>
        @endforeach
      </div> 
 </div>
@include('template2')
@include('template3') 
@include('footer-top')




@include('footer-button')