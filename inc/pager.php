<table cellspacing="0" cellpadding="2" >
<thead>
	<tr>
		<th>YEAR</th>
		<th>SUBJECT</th>
		<th>TYPE</th>
		<th>ACTION</th>
		<th>DOWNLOADS</th>
	</tr>
</thead>
<tbody>
	<?php
		include('connect.php');
		if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 10; 		
		$result = $db->prepare("SELECT * FROM knec ORDER BY id ASC LIMIT $start_from, 10");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
	?>
	<tr class="record">
		<td><?php echo $row['yr']; ?></td>
		<td><?php echo $row['subj']; ?></td>
		<td><?php echo $row['examtype']; ?></td>
		
		<td><?php $fl = 'admin/temp/uploads/'.$row['examtype'].$row['yr'].$row['subj'].'.pdf'; echo '<a target="_blank" href='.$fl.'>Download</a>'; ?></td>
		
		<td><?php echo 0; ?></td>
	</tr>
	<?php
		}
	?>
</tbody>
</table>
<div id="pagination">
	<?php 

	$result = $db->prepare("SELECT COUNT(id) FROM knec");
	$result->execute(); 
	$row = $result->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 10); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='kcpe_past_papers.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?>
</div>