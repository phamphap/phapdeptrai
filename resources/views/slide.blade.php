<div id="container">
		<img class="slides" src="{{asset('images/s1.jpg')}}">
		<img class="slides" src="{{asset('images/s2.jpg')}}">
		<img class="slides" src="{{asset('images/s3.jpg')}}">
		<img class="slides" src="{{asset('images/s4.jpg')}}">
		<img class="slides" src="{{asset('images/s5.jpg')}}">
		<button class="btn" onclick="plusIndex(-1)" id="btn1">&#10094;</button>
		<button class="btn" onclick="plusIndex(1)" id="btn2">&#10095;</button>
	</div>
	<script>
		var index=1;
		showImage(index);
		function plusIndex(n){
			//index=index+1;
			showImage(index +=n);
		}
		function showImage(n){
			var i;
			var x = document.getElementsByClassName("slides");
			if(n > x.length){index = 1};
			if(n < 1){index = x.length};
			for (i=0; i < x.length; i++){
				x[i].style.display="none";
			}
			x[index-1].style.display="block";
		}
	</script>