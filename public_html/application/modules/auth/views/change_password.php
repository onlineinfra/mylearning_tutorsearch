<!-- Dashboard panel -->
<div class="dashboard-panel">
	<?php echo $message;?>
	<div class="row">
		<?php $attributes = array('name'=>'tokenform','id'=>'tokenform', 'class' => 'comment-form dark-fields');
		echo form_open('auth/change-password',$attributes) ?>
  <div class="col-lg-6">
        <div class="elements">
			   <div class="panel panel-default theameOfPanle">
			      <div class="panel-heading main_small_heding"><?php echo get_languageword('Change Password')?>:</div>
				              <div class="panel-body"> 
				<div class="input-group ">
					<label><?php echo get_languageword('Current Password')?>:</label>
					<?php echo form_input($old_password);?>
					
				</div>

				<div class="input-group ">
					<label><?php echo get_languageword('New Password')?> <small>(<?php echo get_languageword('must be at least')?> <?php echo $min_password_length;?> <?php echo get_languageword('characters')?>)</small>:</label>
					<?php echo form_input($new_password);?>
				</div>

				<div class="input-group ">
					<label><?php echo get_languageword('Confirm Password')?>:</label>
					<?php echo form_input($new_password_confirm);?>
				</div>

				<button class="btn-link-dark dash-btn n-b" name="submitbutt" type="Submit"><?php echo get_languageword('CHANGE PASSWORD')?></button>
				</div>
			</div>
			 </div>
	 </div>
		</form>
	</div>

</div>
<!-- Dashboard panel ends -->
  <?php ?>