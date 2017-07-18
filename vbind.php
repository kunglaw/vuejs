<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> v-on dan v-bind </title><br>
<script src="vue.min.js"></script>
</head>

<body>
	<div id="app">
    	<div>
        	<span> Name </span>
            <input type="text" name="name" >
            <input type="button" name="c" id="c" v-on:click="hello" value="click me">
            
            <a v-bind:href="url_google"> Link </a>
            <hr>
            <img v-bind:src="src" v-bind:alt="alt" v-bind:title="title" height="200" width="200">
            <img v-bind="{id:'dimas',src:'alhusna901.jpg',title:'dimas',height:200,width:200}">
            <img @src="src" @alt="alt" @title:"title" height="200" width="200">
        </div>
    </div>
    <script>
		new Vue({
			el:"#app",
			data:{
				
				url_google:"https://www.google.com",
				src:"alhusna901.jpg",
				alt:"alhusna901",
				title:"Dimas"
				
			},
			methods:{
				
				hello:function()
				{
					alert("hello world");	
				}
				
			}
			
			
		});
	</script>
</body>
</html>