<?php

	require 'result_list.php';

	$results = getResults();

?>

<!DOCTYPE html>
<html>
<head>
	
</head>
<body>


<div class="container">

	<div class="card">
		<div class="card-header">
			<h3>Scholarship StudentList</h3>
		</div>

		<table class="table table-striped" width="100%"  align="center" border="1">
		<thead class="thead-dark">
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>CGPA</th>
				
			</tr>
		</thead>

		<tbody>
			<?php foreach ($results as $result): ?>
				<tr>
					<td><?php echo $result['id'] ?></td>
					<td><?php echo $result['name'] ?></td>
					<td><?php echo $result['cgpa']?></td>
		
					
				</tr>

			<?php endforeach;; ?>
		</tbody>


	</table>


	</div>
	


</div>


	


	
</body>
</html>
