<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Methods dan v-on</title>
<script src="vue.min.js"></script>
</head>

<body>
	<h3> Methods dan v-on </h3>
    <hr>
    
    
	<div id="app">
    <label> Name </label>
    <input v-on:keyup.enter="insert_name()" type="text" >
    <p id="name-here"></p>
    	<button v-on:click="boom('this is me')"> Click me !</button>
    
    </div>
	<script>
		new Vue({
			
			el:"#app",
			data:{
				
			},
				methods:{
					
					boom:function(text)
					{
						alert(" Boom  "+text);	
					},
					insert_name:function(name)
					{
						//alert("aa");
						document.getElementById("name-here").innerHTML = "Hi, "+name;
					}
					
				}
				
			
			
			
		});
	</script>
</body>
</html>