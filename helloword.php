<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello World</title>
<script src="vue.min.js"></script>
</head>

<body>
	<div id="app">
    	{{ nama }} berumur {{ umur }}
    </div>
	
    <script>
		new Vue({
			
			el:"#app",
			data:{
				
				nama:"dimas",
				umur:20	
			}
			
			
		});
		
		/*
		
		bisa berbentuk ini 
		
		var dt = {
				
				nama:"dimas",
				umur:20	
			}
		
		new Vue({
			
			el:"#app",
			data: dt
			
			
		}); */
	
		
	</script>
    
    <script>
		var b = new Vue({
			
			
		});
	
	</script>
</body>
</html>