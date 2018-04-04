<form action= "{{route('postForm')}}" method= "post" >
 	Nhập tên: <input type= "text" name = "name" >
 	Nhập tuổi: <input type= "text" name = "age" >
 <input type= "submit" >
 {{ csrf_field() }}
</form>
<form action="{{route('postFile')}}"
	 method="post"
	 enctype="multipart/form-data" >
	 <input type="file" name="myFile" id="myFile" >
	 <input type="submit" >
	 {{ csrf_field() }}
</form>