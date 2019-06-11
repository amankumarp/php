<html>
<head>
<style>
</style>
<script>
function ajax(r)
{
if(r)
{
d=document.getElementById("d");
var http=new XMLHttpRequest;
http.onreadystatechange=function(){
	if(http.readyState==4 && http.status==200)
		d.innerHTML=http.responseText;
}
http.open("GET","res.php?data="+r,true)
http.send();	
}
else
d.innerHTML="";
}
</script>
</head>
<body>
	<input type="text" onkeyup="ajax(this.value)" list="d">
	<datalist id="d">
			
	</datalist>
</body>
</html>
