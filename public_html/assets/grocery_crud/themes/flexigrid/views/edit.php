<?php

$this->set_css($this->default_theme_path . '/flexigrid/css/flexigrid.css');

$this->set_js_lib($this->default_javascript_path . '/jquery_plugins/jquery.form.min.js');
$this->set_js_config($this->default_theme_path . '/flexigrid/js/flexigrid-edit.js');

$this->set_js_lib($this->default_javascript_path . '/jquery_plugins/jquery.noty.js');
$this->set_js_lib($this->default_javascript_path . '/jquery_plugins/config/jquery.noty.config.js');
?>
<div class="flexigrid crud-form" style='width: 100%;' data-unique-hash="<?php echo $unique_hash; ?>">
	<div class="mDiv">
		<div class="ftitle">
			<div class='ftitle-left'>
				<?php echo $this->l('form_edit'); ?> <?php echo $subject ?>
			</div>
			<div class='clear'></div>
		</div>
		<div title="<?php echo $this->l('minimize_maximize'); ?>" class="ptogtitle">
			<span></span>
		</div>
	</div>
	<div id='main-table-box'>
		<?php echo form_open($update_url, 'method="post" id="crudForm"  enctype="multipart/form-data"'); ?>
		<div class='form-div'>
			<?php
			$counter = 0;
			foreach ($fields as $field) {
				$even_odd = $counter % 2 == 0 ? 'odd' : 'even';
				$counter++;
			?>
				<div class='form-field-box <?php echo $even_odd ?>' id="<?php echo $field->field_name; ?>_field_box">
					<div class='form-display-as-box' id="<?php echo $field->field_name; ?>_display_as_box">
						<?php echo $input_fields[$field->field_name]->display_as ?><?php echo ($input_fields[$field->field_name]->required) ? "<span class='required'>*</span> " : "" ?> :
					</div>
					<div class='form-input-box' id="<?php echo $field->field_name; ?>_input_box">
						<?php echo $input_fields[$field->field_name]->input ?>
					</div>
					<div class='clear'></div>
				</div>
			<?php } ?>
			<?php if (!empty($hidden_fields)) { ?>
				<!-- Start of hidden inputs -->
				<?php
				foreach ($hidden_fields as $hidden_field) {
					echo $hidden_field->input;
				}
				?>
				<!-- End of hidden inputs -->
			<?php } ?>
			<?php if ($is_ajax) { ?><input type="hidden" name="is_ajax" value="true" /><?php } ?>
			<div id='report-error' class='report-div error'></div>
			<div id='report-success' class='report-div success'></div>
		</div>
		<div class="pDiv">
			<div class='form-button-box'>
				<input id="form-button-save" type='submit' value='<?php echo $this->l('form_update_changes'); ?>' class="btn btn-large" />
			</div>
			<?php if (!$this->unset_back_to_list) { ?>
				<div class='form-button-box'>
					<input type='button' value='<?php echo $this->l('form_update_and_go_back'); ?>' id="save-and-go-back-button" class="btn btn-large" />
				</div>
				<div class='form-button-box'>
					<input type='button' value='<?php echo $this->l('form_cancel'); ?>' class="btn btn-large" id="cancel-button" />
				</div>
			<?php 	} ?>
			<div class='form-button-box'>
				<div class='small-loading' id='FormLoading'><?php echo $this->l('form_update_loading'); ?></div>
			</div>
			<div class='clear'></div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
<style>
	@media (min-width: 300px) and (max-width: 414px) {
	.form-input-box {
    float: unset;
    margin-top: 35px;
}
.cke_skin_kama .cke_button a, .cke_skin_kama .cke_button a:hover, .cke_skin_kama .cke_button a:focus, .cke_skin_kama .cke_button a:active, .cke_skin_kama .cke_button a.cke_off {
    border-radius: 3px;
    outline: none;
    padding: 0px 0px;
    height: 18px;
    display: inline-block;
    cursor: default;
}
.chosen-single{
	width: 230px !important;
}
.chosen-drop{
	width: 230px !important;
}

.chosen-search{
	width: 230px !important;
}
}

	@media (min-width: 415px) and (max-width: 575px) {
		.form-input-box {
    float: unset;
    margin-top: 35px;
}

.chosen-single{
	width: 290px !important;
}
.chosen-drop{
	width: 290px !important;
}

.chosen-search{
	width: 290px !important;
}
	}

	@media (min-width: 576px) and (max-width: 767px) {}

	@media (min-width: 768px) and (max-width: 991px) {
		.form-input-box {
    float: unset;
    margin-top: 35px;
}
	}

	@media (min-width: 992px) and (max-width: 1199px) {}

	@media (min-width: 1200px) and (max-width: 1365px) {
		.form-input-box {
    float: unset;
    margin-top: 35px;
}
	}

	@media (min-width: 1366px) and (max-width: 1544px) {}
</style>
<script>
	var validation_url = '<?php echo $validation_url ?>';
	var list_url = '<?php echo $list_url ?>';

	var message_alert_edit_form = "<?php echo $this->l('alert_edit_form') ?>";
	var message_update_error = "<?php echo $this->l('update_error') ?>";
</script>