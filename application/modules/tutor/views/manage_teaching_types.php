<!-- Dashboard panel ends -->
<?php echo $this->session->flashdata('message');?>
<div class="dashboard-panel">
<?php 
//neatPrint($subjects);
if(count($tutor_types) > 0) { ?>
<?php echo form_open('tutor/manage-teaching-types', 'id="tutor_subject_mngt" class="form-multi-select"');?>
	<div class="custom_accordion1">
		
		<div class="row">
		<?php
		$i = $counter = 1;
foreach ($tutor_types as $sub) {
    // Start a new row for the first item and every third item thereafter
    if ($counter % 3 == 1) {
        echo '<div class="row">';
    }
    ?>

    <div class="col-md-4 col-sm-6">
        <div class="input-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="<?php echo $sub->id; ?>" name="tutor_selected_types[]" <?php if (in_array($sub->id, $tutorSelectedTypeIds)) echo "checked"; ?>>
                    <span class="checkbox-content">
                        <span class="item-content"><?php echo $sub->teaching_type; ?></span>
                        <i aria-hidden="true" class="fa fa-check"></i>
                        <i class="check-square"></i>
                    </span>
                </label>
            </div>
        </div>
    </div>

    <?php
    // Close the row after every third item
    if ($counter % 3 == 0) {
        echo '</div>';
    }

    $counter++;
}

// Close the last row if it wasn't already closed
if (($counter - 1) % 3 != 0) {
    echo '</div>';
}
?>

		</div>
			</div>
			<button class="btn-link-dark dash-btn" name="Submit" type="Submit"><?php echo get_languageword('UPDATE');?></button>
</form>
			
			<?php
			} ?>
</div>