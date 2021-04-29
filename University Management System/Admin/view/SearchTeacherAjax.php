<html>
 
    <div align="right">  
    <br><br>
    </div>
   
    <head>
	<title>  teacher list </title>
    
	<script type="text/javascript" src="SearchTeacher.js"></script>

    </head>
    
</head>
<body>

    
    <body bgcolor="Thistle" >
    
    <form>
        <h1 > Teacher list</h1>
        <p><H2>Search by name </H2></p>
		<input type="text" name="Name" id="Name" value=""  onkeyup="Services_ajax()" />
		<input type="button" name="" value="Show" onclick="Services_ajax()">
	</form>

	<div  id='table2' > 
    
    </div>
    
	

    </body>
</html>