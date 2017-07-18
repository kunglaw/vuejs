<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>List Method </title>
<script src="vue.min.js"></script>
</head>

<body>
	<div id="app">
    	<ul>
        	<li v-for="member in members" track-by="">{{ member.nama }} - {{ member.umur }}</li>
        </ul>
    </div>
    <script>
		new Vue({
			
			el:"#app",
			data:{
				
				members:[
					
					{ nama:"Agus Harimurti", umur: 28},
					{ nama:"Basuki Cahya",umur:30},
					{ nama:"Anies Baswedan",umur:32}
				 
				],
				
				anggota:{
					
					nama:"Aries Dimas Yudhistira",
					alamat:"jl. warakas 4 gg. 17",
					umur:26	
					
				}	
				
			}
			
		});	
		
		// MUTATING
		// push, pop, shift, unshift
		
		// NON MUTATING
		// filter, concat, slice
	</script>
</body>
</html>