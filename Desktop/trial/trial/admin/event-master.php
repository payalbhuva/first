<?php 
include "webHeader.php"; 
if($_POST){
	$fName = trim(mysql_real_escape_string($_POST['fName']));
	$lName = trim(mysql_real_escape_string($_POST['lName']));
	$street = trim(mysql_real_escape_string($_POST['street']));
	$zipCode = trim(mysql_real_escape_string($_POST['zipCode']));
	$city = trim(mysql_real_escape_string($_POST['city']));
	$createdOn = date('Y-m-d H:i:s');
	
	if(!empty($_POST['addressId'])){
	$addressId = trim(mysql_real_escape_string($_POST['addressId']));
	$sql = "update addressmaster set fName ='$fName',lName ='$lName',street ='$street',zipCode ='$zipCode',city ='$city' where MD5(id) ='$addressId'";
	}else{
	$sql = "insert into addressmaster(fname,lname,street,zipcode,city,createdon) values('$fName','$lName','$street','$zipCode','$city','$createdOn')";
	}
	
	$executeQuery = mysql_query($sql);
	if($executeQuery){
	echo "<script type='text/javascript'>; alert('Address book added/updated successfully');window.location.href = 'address-master.php';</script>"; die;
	}else{
	echo "<script type='text/javascript'>; alert('error in db..Try again '".mysql_error()."');window.location.href = 'address-master.php';</script>"; die;
	}
}

//Fetching record for updating city
if($_GET['edit']){
$sql = "select * from addressmaster where MD5(id)='$_GET[edit]'";
$addressDetails = mysql_query($sql);
$addressId = mysql_result($addressDetails, 0, "id");
$fName = mysql_result($addressDetails, 0, "fName");
$lName = mysql_result($addressDetails, 0, "lName");
$street = mysql_result($addressDetails, 0, "street");
$zipCode = mysql_result($addressDetails, 0, "zipcode");
$city = mysql_result($addressDetails, 0, "city");
}
//deleting record for updating city
if($_GET['delete']){
$sql = "delete from addressmaster where MD5(id)='$_GET[delete]'";
$deleteRecord = mysql_query($sql);
if($deleteRecord){
	echo "<script type='text/javascript'>; alert('Record deleted successfully');window.location.href = 'address-master.php';</script>"; die;
	}else{
	echo "<script type='text/javascript'>; alert('error in deleting record '".mysql_error().");window.location.href = 'address-master.php';</script>"; die;
	}
}
?>
	<div class="container-wrapper">
		<form action="" id="frmAddress" name="frmAddress" method="post" onSubmit="return validateAddressBook();">
			<table>
			<tr>
				<td>First Name</td>
				<td>
				<input type="hidden" name="addressId" id="addressId" value="<?php if(!empty($addressId))echo md5($addressId) ?>" />
				<input type="text" name="fName" id="fName" value="<?php echo $fName ?>" />
				</td>
			</tr>
			
			<tr>
				<td>Last Name</td>
				<td>
				<input type="text" name="lName" id="lName" value="<?php echo $lName ?>" />
				</td>
			</tr>
			<tr>
				<td>Street</td>
				<td>
				<input type="text" name="street" id="street" value="<?php echo $street ?>" />
				</td>
			</tr>
			<tr>
				<td>Zip Code</td>
				<td>
				<input type="text" name="zipCode" id="zipCode" value="<?php echo $zipCode ?>" />
				</td>
			</tr>
			<tr>
				<td>City</td>
				<td>
				<select name="city" id="city">
				<option value="">-- Select City --</option>
				<?php 
				
				$citySql = mysql_query('select * from citymaster');
				while ($rowCity = mysql_fetch_assoc($citySql)) { 
					$selected = '';
					if($rowCity['id'] == $city ){$selected = "selected='selected'";}
					echo "<option value='$rowCity[id]' $selected>$rowCity[cityName]</option>";
				}
				
				?>
				</select>
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
			/*Address Master Pagination */
			if (isset($_GET["pageNo"])) { $pageNo  = $_GET["pageNo"]; } else { $pageNo=1; }; 
			$start_from = ($pageNo-1) * $num_rec_per_page; 
			$sql = "SELECT am.*,cm.cityName FROM addressmaster am left join citymaster cm on am.city = cm.id LIMIT $start_from, $num_rec_per_page"; 
			//echo $sql;
			$rs_result = mysql_query ($sql); 
			?> 
			<table border="1" width="50%">
				<tr>
					<th>ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>City</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			<?php 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
						<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['fname']; ?></td>            
						<td><?php echo $row['lname']; ?></td>            
						<td><?php echo $row['cityName']; ?></td>            
						<td><a href="address-master.php?edit=<?php echo md5($row['id']); ?>">Edit</a></td>            
						<td><a onclick="return confirm('Are you sure want to delete this record?');" href="address-master.php?delete=<?php echo md5($row['id']); ?>">Delete</a></td>            
						</tr>
			<?php 
			}; 
			?> 
			</table>
			<?php 
			$sql = "SELECT * FROM addressmaster"; 
			$rs_result = mysql_query($sql); //run the query
			$total_records = mysql_num_rows($rs_result);  //count number of records
			$total_pages = ceil($total_records / $num_rec_per_page); 
			echo "<span class='pagination'>";
			if(mysql_num_rows($rs_result) > 0){
			
			echo "<a href='address-master.php?pageNo=1'>".'<< &nbsp;&nbsp;'."</a> "; // send user to first page

			for ($i=1; $i<=$total_pages; $i++) { 
						echo "<a href='address-master.php?pageNo=".$i."'>".$i."</a> "; 
			}; 
			echo "<a href='address-master.php?pageNo=$total_pages'>".'&nbsp;&nbsp; >>'."</a> "; // send user to last page
			} else{
				echo '<span>No data available</span>';
			}
			echo "</span>";
		?>
		
	</div><!--end container-wrapper -->
<?php include "webFooter.php"; ?>