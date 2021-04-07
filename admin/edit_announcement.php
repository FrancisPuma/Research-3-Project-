<?php
$announcementID = $_GET['aID'];

	include('includes/connection.php');

	$sql1 ="SELECT * FROM tblannouncement where announcement_id = '$announcementID'";
    $sql2 ="SELECT position FROM tblidentifier where announcement_id = '$announcementID'";
    $sql3 ="SELECT grade FROM tblidentifier where announcement_id = '$announcementID'";
    $sql4 ="SELECT section FROM tblidentifier where announcement_id = '$announcementID'";

	$result1 = mysqli_query($connection_mysql, $sql1);
    $result2 = mysqli_query($connection_mysql, $sql2);
    $result3 = mysqli_query($connection_mysql, $sql3);
    $result4 = mysqli_query($connection_mysql, $sql4);

	$num_position = mysqli_num_rows($result2);
	$num_grade = mysqli_num_rows($result3);
	$num_section = mysqli_num_rows($result4);

	$num = mysqli_num_rows($result1);

	$i = 0;

	while ($i < $num)
	{
		$autoid = mysqli_result($result1,$i,"announcement_id");
		$header = mysqli_result($result1,$i,"header");
		$subject = mysqli_result($result1,$i,"subject");
		$date = mysqli_result($result1,$i,"send_date");
		$time = mysqli_result($result1,$i,"send_time");
        $message = mysqli_result($result1,$i,"content");
        $type = mysqli_result($result1,$i,"announcement_type");
        $from = mysqli_result($result1,$i,"upload_name");
		$i++;
	}

	$j = 0;
	while ($j < $num_position)
	{
		$row_position[$j] = mysqli_result($result2,$j,"position");
		$row_grade[$j] = mysqli_result($result3,$j,"grade");
		$row_section[$j] = mysqli_result($result4,$j,"section");
		$j++;
	}

?>
<?php
	require_once("functions/function.php");
	get_header();
	get_sidebar();
	get_bread_seven();
?>
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Edit Announcement Details</h2>
						<div class="box-icon">
							<a href="users.php" class="btn-close"><i class="halflings-icon white remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" method="post" action="update_announcement.php">
							<fieldset>
							  <div class="control-group">
                                <label class="control-label" for="focusedInput">Title/Header:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txttitle" id="focusedInput" type="text" placeholder="Title" 
                                  value="<?php echo $header; ?>" required>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Subject:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtsubject" id="focusedInput" type="text" placeholder="Subject"
								  value="<?php echo $subject; ?>" required>
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Set announcement date:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtdate" id="focusedInput" type="date"
								  value="<?php echo $date; ?>" required>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Set announcement time:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txttime" id="focusedInput" type="time" 
                                  value="<?php echo $time; ?>" required>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Message:</label>
								<div class="controls">
									<textarea class="input-xlarge focused" style="min-width: 90%" name="txtmessage" id="focusedInput" type="text" placeholder="Enter announcement message" rows="6" required>
									<?php echo $message; ?>
									</textarea>								
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Type:</label>
								<div class="controls">
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="advisory" <?php echo ($type =="advisory")? 'checked':'' ?>>
										Advisory
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="event" <?php echo ($type =="event")? 'checked':'' ?>>
										Event
									</label>
									<label class="radio inline">
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="reminder" <?php echo ($type =="reminder")? 'checked':'' ?>>
										Reminder
									</label>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">From:</label>
								<div class="controls">
								  <input class="input-xlarge focused" name="txtupload" id="focusedInput" type="text" placeholder="Name of sender/office"
                                  value="<?php echo $from; ?>" required>
								</div>
							  </div>
                              <div class="control-group">
								<label class="control-label" for="focusedInput">Send to:</label>
								<div class="controls">
									<div class="row-fluid">
										<div class="span5">
											<p  style="text-align: center">Role:</p>
											<label class="checkbox">
												<input type="checkbox" name="checkboxRole[]" value="student" <?php echo in_array("student", $row_position)?'checked':'' ?>>
												Student
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxRole[]" value="staff" <?php echo in_array("staff", $row_position)?'checked':'' ?>>
												Staff
											</label>
										</div>
										<div class="span5">
											<p style="text-align: center">Grade:</p>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="7" <?php echo in_array("7", $row_grade)?'checked':'' ?>>
												Grade 7
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="8" <?php echo in_array("8", $row_grade)?'checked':'' ?>>
												Grade 8
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="9" <?php echo in_array("9", $row_grade)?'checked':'' ?>>
												Grade 9
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="10" <?php echo in_array("10", $row_grade)?'checked':'' ?>>
												Grade 10
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="11" <?php echo in_array("11", $row_grade)?'checked':'' ?>>
												Grade 11
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxGrade[]" value="12" <?php echo in_array("12", $row_grade)?'checked':'' ?>>
												Grade 12
											</label>
										</div>
										<div class="span10">
											<p style="text-align: center">Section:</p>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Diamond" <?php echo in_array("Diamond", $row_section)?'checked':'' ?>>
												Diamond
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Emerald" <?php echo in_array("Emerald", $row_section)?'checked':'' ?>>
												Emerald
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Garnet" <?php echo in_array("Garnet", $row_section)?'checked':'' ?>>
												Garnet
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Jade" <?php echo in_array("Jade", $row_section)?'checked':'' ?>>
												Jade
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Opal" <?php echo in_array("Opal", $row_section)?'checked':'' ?>>
												Opal
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Ruby" <?php echo in_array("Ruby", $row_section)?'checked':'' ?>>
												Ruby
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Sapphire" <?php echo in_array("Sapphire", $row_section)?'checked':'' ?>>
												Sapphire
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection7[]" value="Topaz" <?php echo in_array("Topaz", $row_section)?'checked':'' ?>>
												Topaz
											</label>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Adelfa" <?php echo in_array("Adelfa", $row_section)?'checked':'' ?>>
												Adelfa
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Camia" <?php echo in_array("Camia", $row_section)?'checked':'' ?>>
												Camia
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Champaca" <?php echo in_array("Champaca", $row_section)?'checked':'' ?>>
												Champaca
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Dahlia" <?php echo in_array("Dahlia", $row_section)?'checked':'' ?>>
												Dahlia
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Ilang-Ilang" <?php echo in_array("Ilang-Ilang", $row_section)?'checked':'' ?>>
												Ilang-Ilang
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Jasmin" <?php echo in_array("Jasmin", $row_section)?'checked':'' ?>>
												Jasmin
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Rosal" <?php echo in_array("Rosal", $row_section)?'checked':'' ?>>
												Rosal
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection8[]" value="Sampaguita" <?php echo in_array("Sampaguita", $row_section)?'checked':'' ?>>
												Sampaguita
											</label>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Beryllium" <?php echo in_array("Beryllium", $row_section)?'checked':'' ?>>
												Beryllium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Cesium" <?php echo in_array("Cesium", $row_section)?'checked':'' ?>>
												Cesium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Lithium" <?php echo in_array("Lithium", $row_section)?'checked':'' ?>>
												Lithium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Magnesium" <?php echo in_array("Magnesium", $row_section)?'checked':'' ?>>
												Magnesium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Potassium" <?php echo in_array("Potassium", $row_section)?'checked':'' ?>>
												Potassium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Rubidium" <?php echo in_array("Rubidium", $row_section)?'checked':'' ?>>
												Rubidium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Sodium" <?php echo in_array("Sodium", $row_section)?'checked':'' ?>>
												Sodium
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection9[]" value="Strontium" <?php echo in_array("Strontium", $row_section)?'checked':'' ?>>
												Strontium
											</label>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Charm" <?php echo in_array("Charm", $row_section)?'checked':'' ?>>
												Charm
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Electron" <?php echo in_array("Electron", $row_section)?'checked':'' ?>>
												Electron
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Gluon" <?php echo in_array("Gluon", $row_section)?'checked':'' ?>>
												Gluon
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Graviton" <?php echo in_array("Graviton", $row_section)?'checked':'' ?>>
												Graviton
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Muon" <?php echo in_array("Muon", $row_section)?'checked':'' ?>>
												Muon
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Photon" <?php echo in_array("Photon", $row_section)?'checked':'' ?>>
												Photon
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Tau" <?php echo in_array("Tau", $row_section)?'checked':'' ?>>
												Tau
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSection10[]" value="Truth" <?php echo in_array("Truth", $row_section)?'checked':'' ?>>
												Truth
											</label>
										</div>
										<div class="span2">
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-A" <?php echo in_array("Block-A", $row_section)?'checked':'' ?>>
												Block-A
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-B" <?php echo in_array("Block-B", $row_section)?'checked':'' ?>>
												Block-B
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-C" <?php echo in_array("Block-C", $row_section)?'checked':'' ?>>
												Block-C
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-D" <?php echo in_array("Block-D", $row_section)?'checked':'' ?>>
												Block-D
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-E" <?php echo in_array("Block-E", $row_section)?'checked':'' ?>>
												Block-E
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-F" <?php echo in_array("Block-F", $row_section)?'checked':'' ?>>
												Block-F
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-G" <?php echo in_array("Block-G", $row_section)?'checked':'' ?>>
												Block-G
											</label>
											<label class="checkbox">
												<input type="checkbox" name="checkboxSectionSYP[]" value="Block-H" <?php echo in_array("Block-H", $row_section)?'checked':'' ?>>
												Block-H
											</label>
										</div>
									</div>
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