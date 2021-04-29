function Services_ajax()
{
	
	
	const data = document.getElementById('Name').value;
	const xhttp = new XMLHttpRequest();

	xhttp.open('POST','Search_ajax_model.php',true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){

			document.getElementById('table2').innerHTML = this.responseText;
		}
	}
	xhttp.send('Name='+data);

}