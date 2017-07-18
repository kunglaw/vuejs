<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Conditional Directive </title>
<script src="vue.min.js"></script>
</head>

<body>
<h3>Conditional Directive</h3>
<hr>
<div id="app">
	<span v-if="bool">
    	<?php // element hilang beserta syntaxnya, bila element tersebut bernilai false ?>
		<div v-html="biodata">
    		
    	</div>
    </span>
    <span v-else>
    	<div> Bool false, change again.... </div>
    </span>
    
    <div v-show="bool">
    	<?php // v-show cuma menambahkan display:none pada elemen yg tertuju bila suatu kondisinya false, tapi masih tertulis di syntaxnya ?>
    </div>
    
    <div v-show="!bool">
    	<div> Bool bernilai false namun kareana ada negasinya, makanya nilainya jadi true. sehingga tulisan ini muncul </div>
    </div>
    <p>
    <div v-if="this.umur > 20">
    	{{ nama }} sudah besar 
    </div>
    <div v-else-if="this.umur < 20">
    	{{ nama }} belum cukup umur 
    </div>
    </p>
</div>
<script>
	new Vue({
		
		el:"#app",
		data:{
			nama:"Dimas",
			umur:26,
			alamat:"jl.warakas 4 gg 17",
			jurusan:"System Informasi",
			biodata:"",
			bool:false
		},
		computed:{
			
			biodata:function()
			{
				return "<div> Nama : "+this.nama+" </div>"+
				"<div> Jurusan : "+this.jurusan+" </div>"+
				"<div> Alamat : "+this.alamat+" </div>";	
			}
			
			
		}
		
		
	});

</script>
</body>
</html>