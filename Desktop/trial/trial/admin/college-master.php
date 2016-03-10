<?php 
include "adminHeader.php"; 
if($_POST){
	$college_name = trim(mysql_real_escape_string($_POST['college_name']));
	$address = trim(mysql_real_escape_string($_POST['address']));
	if(!empty($_POST['college_id'])){
	$college_id = trim(mysql_real_escape_string($_POST['college_id']));
	$sql = "update college_master set college_name ='$college_name', address='$address' where MD5(college_id) ='$college_id'";
	}else{
	$sql = "insert into college_master(college_name,address,created_on) values('$college_name','$address','$current_date')";
	}
	$executeQuery = mysql_query($sql);
	if($executeQuery){
	echo "<script type='text/javascript'>; alert('College added/updated successfully');window.location.href = 'college-master.php';</script>"; die;
	}else{
	echo "<script type='text/javascript'>; alert('error in db..Try again '".mysql_error()."');window.location.href = 'college-master.php';</script>"; die;
	}
}

//Fetching record for updating city
if($_GET['edit']){
$sql = "select * from college_master where MD5(college_id)='$_GET[edit]'";
$cityDetails = mysql_query($sql);
$college_name = mysql_result($cityDetails, 0, "college_name");
$college_id = mysql_result($cityDetails, 0, "college_id");
$address = mysql_result($cityDetails, 0, "address");
}

//deleting record for updating city
if($_GET['delete']){
$sql = "delete from college_master where MD5(college_id)='$_GET[delete]'";
$deleteRecord = mysql_query($sql);
if($deleteRecord){
	echo "<script type='text/javascript'>; alert('Record deleted successfully');window.location.href = 'college-master.php';</script>"; die;
	}else{
	echo "<script type='text/javascript'>; alert('error in deleting record '".mysql_error().");window.location.href = 'college-master.php';</script>"; die;
	}
}
?>
	<div class="container-wrapper">
		<form action="" id="frmCollege" name="frmCollege" method="post" onSubmit="return validateCollege();">
			<table>
			<tr>
				<td>College Name</td>
				<td>
				<input type="hidden" name="college_id" id="college_id" value="<?php if(!empty($college_id))echo md5($college_id) ?>" />
				<input type="text" name="college_name" id="college_name" value="<?php echo $college_name ?>" />
				</td>
			</tr>
			
			<tr>
				<td>Address</td>
				<td>
				<textarea name="address" id="address"><?php echo $address ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="btnSubmit" id="btnSubmit" value="Submit">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<span id="msg-container"></span>
				</td>
			</tr>
			</table>
		</form>
		<hr />
		
		<?php	
			/*City Master Pagination */
			if (isset($_GET["pageNo"])) { $pageNo  = $_GET["pageNo"]; } else { $pageNo=1; }; 
			$start_from = ($pageNo-1) * $num_rec_per_page; 
			$sql = "SELECT * FROM college_master LIMIT $start_from, $num_rec_per_page"; 
			//echo $sql;
			$rs_result = mysql_query ($sql); 
			?> 
			<table border="1" width="50%">
				<tr>
					<th>ID</th>
					<th>College Name</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			<?php 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
						<tr>
						<td><?php echo $row['college_id']; ?></td>
						<td><?php echo $row['college_name']; ?></td>            
						<td><a href="college-master.php?edit=<?php echo md5($row['college_id']); ?>">Edit</a></td>            
						<td><a onclick="return confirm('Are you sure want to delete this record?');" href="college-master.php?delete=<?php echo md5($row['college_id']); ?>">Delete</a></td>            
						</tr>
			<?php 
			}; 
			?> 
			</table>
			<?php 
			$sql = "SELECT * FROM college_master"; 
			$rs_result = mysql_query($sql); //run the query
			$total_records = mysql_num_rows($rs_result);  //count number of records
			$total_pages = ceil($total_records / $num_rec_per_page); 
			echo "<span class='pagination'>";
			if(mysql_num_rows($rs_result) > 0){
			
			echo "<a href='college-master.php?pageNo=1'>".'<< &nbsp;&nbsp;'."</a> "; // send user to first page

			for ($i=1; $i<=$total_pages; $i++) { 
						echo "<a href='college-master.php?pageNo=".$i."'>".$i."</a> "; 
			}; 
			echo "<a href='college-master.php?pageNo=$total_pages'>".'&nbsp;&nbsp; >>'."</a> "; // send user to last page
			} else{
				echo '<span>No data available</span>';
			}
			echo "</span>";
		?>
		
	</div><!--end container-wrapper -->
<?php include "adminFooter.php"; ?>