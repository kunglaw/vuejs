<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Filter </title>
<script src="vue1.0.min.js"></script>
</head>

<body>
	<h3> Fiter - hanya bisa vueJS v 1.0</h3>
    <hr>
    
	<div id="app">
    	<div v-for="member in members" track-by="$index">
        	{{ member.nama }} - {{ member.jurusan }}
    	</div>
        
        <p>Filter </p>
        <ul>
          <li v-for="member in members | filterBy 'Ar' in 'nama' ">
              {{ member.nama }} - {{ member.jurusan }}
          </li>
        </ul>
        
        <p>Order by </p>
        <ul>
          <li v-for="member in members | orderBy 'nama' ">
              {{ member.nama }} - {{ member.jurusan }}
          </li>
        </ul>
    </div>
    <script>
		new Vue({
			
			el:"#app",
			data:{
			
				members:[
				
				{nama:"Baskoro Adi Pratama",jurusan:"Teknik Informatika"},
				{nama:"Aries Dimas Yudhistira",jurusan:"Sistem Informasi"},
				{nama:"Muhammad Fadil Hakim",jurusan:"Sistem Informasi"}
				
				]
				
				
			}
			
		});
	
	
	</script>

</body>
</html>