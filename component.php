<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Component</title>
<script src="vue.min.js"></script>
</head>

<body>
	<div id="app">
    	<template-baru :nama="nama" :umur="umur" :message="message" ></template-baru>
    
    </div>
    <template id="post-component">
    	<ul>
        	<li> Nama : {{ nama }}</li>
        	<li> Umur : {{ umur }}</li>
            <li> Message : {{ message }}</li>
    	</ul>
    </template>
	<script>
		
		// define
		/* var TemplateBaru = Vue.extend({
			template:"<h1> Sekolah Coding </h1>"
		});
		
		//register 
		Vue.component("template-baru",TemplateBaru)*/
		
		Vue.component("template-baru",{
			
			template:"#post-component",
			props:['nama','umur','message'] // mengirim data ke template 
		
		});
	
		
		var vue = new Vue({
			
			el:"#app",
			data:{
				nama: "Aries Dimas Yudhistira ",
				umur : 24,
				message:"Lorem ipsum sit dolor amet"
				
			}
			
		});
	
	</script>
</body>
</html>