<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Databinding</title>
<script src="vue1.0.min.js"></script>
</head>

<body>
	<h3> harus pake vue1.0.min.js </h3>
    <hr>
    
	<div id="app">

	<?php // * artinya variable permanent ?>
    	
        <div>{{{ raw }}} <!-- its not a safe way --></div>
        <div>Nama : {{ nama + " Yudhistira"}}</div>
        <div>Umur : {{ umur }}</div>
        <div>Gender : {{ gender }}</div>
        
        {{ raw.split('').reverse().join('') }}
    </div>
	
    <script>
		new Vue({
			
			el:"#app",
			data:{
				
				nama:"dimas",
				umur:20	,
				raw:"<p><b> Mantap jaya !</b></p>",
				gender:"male"
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