<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Input Binding</title>
<script src="vue1.0.min.js"></script>
</head>

<body>
	<h3>Input Binding - vue1.0</h3>
    <hr>
    
    <div id="app">
    	<input type="text" name="texty" id="texty" v-model="texty" >
        <h4>{{ texty }}</h4>
        
        <hr>
        
        <input type="radio" v-model="gender" value="laki - laki">
        Laki - Laki
        <input type="radio" v-model="gender" value="Perempuan">
        Perempuan 
        
        <h4>{{ gender}}</h4>
    </div>
    
    <script>
		var a = new Vue({
		
			el:"#app",
			data:{
				
					
				
			}
		
		
		});
	
	</script>
</body>
</html>