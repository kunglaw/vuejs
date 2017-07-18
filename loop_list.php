<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Loop List</title>
<script src="vue.min.js"></script>
</head>

<body>
	<h3> Loop List </h3>
    <hr>
    
    <div id="app">
    	<p> Member </p>
		<ul> 
        	<li v-for="member in members">{{ member.nama }} - {{ member.umur }} </li>   
    	</ul>
        
        <p> VIP MEMBER</p>
        <ul>
        	<?php //( value, key ) bentuknya harus value dulu di set, baru key di set ?>
        	<li v-for="(value,key) in anggota">{{ key }} : {{ value }}</li>
        </ul>
        
        <p> Angka - angka  </p>
        <ul >
        	<li v-for="n in 10">{{ n }}</li>
        
        </ul>
        
        
    </div>
    
    <script>
		new Vue({
			
			el:"#app",
			data:{
				
				members:[
				
					{ nama:"Ardito",umur:23 },
					{ nama:"Agus",umur:34},
					{ nama:"Waringin",umur:33} 
					
				],
				
				anggota: {
					
					nama:"Aries Dimas Yudhistira",
					umur:26,
					alamat:"Jl. Warakas 4 GG 17"
					
				}
			}
			
		});
	
	</script>
    
</body>
</html>