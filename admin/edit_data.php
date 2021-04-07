<?php
$userID = $_GET['uID'];

	include('includes/connection.php');

	$sql ="SELECT * FROM tblusers where id = '$userID'";
	$result = mysqli_query($connection_mysql, $sql);

	$num = mysqli_num_rows($result);

	$i = 0;

	while ($i < $num)
	{
		$autoid = mysqli_result($result,$i,"id");
		$position = mysqli_result($result,$i,"Position");
		$contact = mysqli_result($result,$i,"Contact");
		$fn = mysqli_result($result,$i,"Firstname");
		$ln = mysqli_result($result,$i,"Lastname");
		$grade = mysqli_result($result,$i,"Grade");
		$section = mysqli_result($result,$i,"Section");
		$i++;
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_four();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Update User's Data</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_data.php">
							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Firstname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtfirstname" id="focusedInput" type="text" placeholder="Firstname" 
								  value="<?php echo $fn; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Lastname:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtlastname" id="focusedInput" type="text" placeholder="Lastname"
								  value="<?php echo $ln; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Contact Number:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtcontact" id="focusedInput" type="text" placeholder="11-digits no space (e.g. 09853452441)"
								  value="<?php echo $contact; ?>">
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Position/Role:</label>
								<div class="controls">
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="student" <?php echo ($position =="student")? 'checked':'' ?>>
										Student
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="staff" <?php echo ($position =="staff")? 'checked':'' ?>>
										Staff
									</label>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Grade:</label>
								<div class="controls">
									<select name='txtgrade'>
										<option value="N/A" <?php echo ($grade =="N/A")? 'selected':'' ?>>N/A</option>
										<option value="7" <?php echo ($grade =="7")? 'selected':'' ?>>7</option>
										<option value="8" <?php echo ($grade =="8")? 'selected':'' ?>>8</option>
										<option value="9" <?php echo ($grade =="9")? 'selected':'' ?>>9</option>
										<option value="10" <?php echo ($grade =="10")? 'selected':'' ?>>10</option>
										<option value="11" <?php echo ($grade =="11")? 'selected':'' ?>>11</option>
										<option value="12" <?php echo ($grade =="12")? 'selected':'' ?>>12</option>
									</select>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Section:</label>
								<div class="controls">
									<select name='txtsection'>
										<option value="N/A" <?php echo ($section =="N/A")? 'selected':'' ?>>N/A</option>
										<option value="Diamond" <?php echo ($section =="Diamond")? 'selected':'' ?>>Diamond</option>
										<option value="Emerald" <?php echo ($section =="Emerald")? 'selected':'' ?>>Emerald</option>
										<option value="Garnet" <?php echo ($section =="Garnet")? 'selected':'' ?>>Garnet</option>
										<option value="Jade" <?php echo ($section =="Jade")? 'selected':'' ?>>Jade</option>
										<option value="Opal" <?php echo ($section =="Opal")? 'selected':'' ?>>Opal</option>
										<option value="Ruby" <?php echo ($section =="Ruby")? 'selected':'' ?>>Ruby</option>
										<option value="Sapphire" <?php echo ($section =="Sapphire")? 'selected':'' ?>>Sapphire</option>
										<option value="Topaz" <?php echo ($section =="Topaz")? 'selected':'' ?>>Topaz</option>
										<option value="Adelfa" <?php echo ($section =="Adelfa")? 'selected':'' ?>>Adelfa</option>
										<option value="Camia" <?php echo ($section =="Camia")? 'selected':'' ?>>Camia</option>
										<option value="Champaca" <?php echo ($section =="Champaca")? 'selected':'' ?>>Champaca</option>
										<option value="Dahlia" <?php echo ($section =="Dahlia")? 'selected':'' ?>>Dahlia</option>
										<option value="Ilang-Ilang" <?php echo ($section =="Ilang-Ilang")? 'selected':'' ?>>Ilang-Ilang</option>
										<option value="Jasmin" <?php echo ($section =="Jasmin")? 'selected':'' ?>>Jasmin</option>
										<option value="Rosal" <?php echo ($section =="Rosal")? 'selected':'' ?>>Rosal</option>
										<option value="Sampaguita" <?php echo ($section =="Sampaguita")? 'selected':'' ?>>Sampaguita</option>
										<option value="Beryllium" <?php echo ($section =="Beryllium")? 'selected':'' ?>>Beryllium</option>
										<option value="Cesium" <?php echo ($section =="Cesium")? 'selected':'' ?>>Cesium</option>
										<option value="Lithium" <?php echo ($section =="Lithium")? 'selected':'' ?>>Lithium</option>
										<option value="Magnesium" <?php echo ($section =="Magnesium")? 'selected':'' ?>>Magnesium</option>
										<option value="Potassium" <?php echo ($section =="Potassium")? 'selected':'' ?>>Potassium</option>
										<option value="Rubidium" <?php echo ($section =="Rubidium")? 'selected':'' ?>>Rubidium</option>
										<option value="Sodium" <?php echo ($section =="Sodium")? 'selected':'' ?>>Sodium</option>
										<option value="Strontium" <?php echo ($section =="Strontium")? 'selected':'' ?>>Strontium</option>
										<option value="Charm" <?php echo ($section =="Charm")? 'selected':'' ?>>Charm</option>
										<option value="Electron" <?php echo ($section =="Electron")? 'selected':'' ?>>Electron</option>
										<option value="Gluon" <?php echo ($section =="Gluon")? 'selected':'' ?>>Gluon</option>
										<option value="Graviton" <?php echo ($section =="Graviton")? 'selected':'' ?>>Graviton</option>
										<option value="Muon" <?php echo ($section =="Muon")? 'selected':'' ?>>Muon</option>
										<option value="Photon" <?php echo ($section =="Photon")? 'selected':'' ?>>Photon</option>
										<option value="Tau" <?php echo ($section =="Tau")? 'selected':'' ?>>Tau</option>
										<option value="Truth" <?php echo ($section =="Truth")? 'selected':'' ?>>Truth</option>
										<option value="Block-A" <?php echo ($section =="Block-A")? 'selected':'' ?>>Block-A</option>
										<option value="Block-B" <?php echo ($section =="Block-B")? 'selected':'' ?>>Block-B</option>
										<option value="Block-C" <?php echo ($section =="Block-C")? 'selected':'' ?>>Block-C</option>
										<option value="Block-D" <?php echo ($section =="Block-D")? 'selected':'' ?>>Block-D</option>
										<option value="Block-E" <?php echo ($section =="Block-E")? 'selected':'' ?>>Block-E</option>
										<option value="Block-F" <?php echo ($section =="Block-F")? 'selected':'' ?>>Block-F</option>
										<option value="Block-G" <?php echo ($section =="Block-G")? 'selected':'' ?>>Block-G</option>
										<option value="Block-H" <?php echo ($section =="Block-H")? 'selected':'' ?>>Block-H</option>
									</select>
								</div>
							  </div>
							  <div class="form-actions">
								<button type="submit" onclick="return confirmUpdate()" class="btn btn-primary">Save Changes</button>
								<input type="hidden" name="hid" value="<?php echo $autoid; ?>">
							  </div>
							</fieldset>
						</form>
					
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
<?php
	get_footer();
?>		

	
<!-- 	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
		</div>
	</div> -->