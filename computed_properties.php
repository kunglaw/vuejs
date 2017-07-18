<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Computed Properties</title>
<script src="vue.min.js"></script>
</head>

<body>

<h3> Computed Properties </h3>
<hr>

<div id="app">
	a {{ a }} + b {{ b }} 
	
    <br>
    <input type="text" name="formar" placeholder="insert format ....">
    
    <div v-html="biodata"> 
    	
    </div>
    
</div>



<script>
	
	new Vue({
		
		el:"#app",
		data:{
			a:1,
			nama:"Aries Dimas",
			umur:26,
			alamat:"Jl. Warakas 4 Gg 17 ",
			jurusan:"System Informasi",
			biodata:""
			
		},
		computed:{
			b:function(){
				return this.a + 2; 	
			},
			biodata:function()
			{
				return "<div> Nama : "+this.nama+" </div>"+
				"<div> Jurusan : "+this.jurusan+" </div>"+
				"<div> Alamat : "+this.alamat+" </div>";	
			},
			set:function(params)
			{
				var cridential = params.split();
				this.nama = cridential[0];
				this.umur = cridential[1];
				
			},
			get:function()
			{
				
				
			}
			
			
		}
	
	
	});
</script>

</body>
</html>