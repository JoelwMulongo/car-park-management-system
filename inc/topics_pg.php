<table cellspacing="0" cellpadding="2" >
<thead>
	<tr>
		<th>S/NO</th>
		<th>TOPIC CODE</th>
		<th>TOPIC</th>
		<th>ACTION</th>
		<th>QUESTIONS</th>
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 10; 		
		$result = $db->prepare("SELECT * FROM topics ORDER BY id ASC LIMIT $start_from, 10");
		$result->execute();
		
		for($i=0; $row = $result->fetch(); $i++){
	?>
	
	<tr class="record">
		<td><?php echo $row['sno'];; ?></td>
		<td><?php echo $row['code']; ?></td>
		<td><?php echo $row['topic']; ?></td>
		
		<td><?php echo 'VIEW' ?></td>
		
		<td><?php echo $row['views']; ?></td>
	</tr>
	<?php
	
		}
	?>
</tbody>
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM topics");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 10); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='revision.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?>
</div>