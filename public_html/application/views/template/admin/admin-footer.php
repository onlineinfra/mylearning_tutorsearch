<script src='<?php echo URL_ADMIN_JS;?>adminlte.min.js'></script>
<?php
if(isset($grocery) && $grocery == TRUE) 
{
?>
<?php foreach($js_files as $file): 

?>
<script src="<?php echo $file; ?>"></script>
<?php 
endforeach; ?>
<?php } ?>


<?php if(!empty($activemenu) && $activemenu == "tutor_selling_courses") { ?>
<script type="text/javascript" src="<?php echo URL_FRONT_JS;?>jquery.magnific-popup.js"></script>
<script> 
$(document).on('click', '.delete-icon-grocery', function() {

    return confirm("<?php echo get_languageword('Are you sure that you want to delete this record?'); ?>");
});
</script>
<?php } ?>
</section>
	</div>

		<footer class="main-footer">
			<!-- <div class="pull-right hidden-xs">
			CI Version: <strong>3.1.0</strong>, 
			App Version: <strong>3.0.7 (Original)</strong>
			</div> -->
		<?php if(isset($this->config->item('site_settings')->rights_reserved_by) && $this->config->item('site_settings')->rights_reserved_by != '') { ?>
				<span class="copy-right"><?php echo $this->config->item('site_settings')->rights_reserved_by;?></span>
		<?php } ?>
		</footer>
</div>
	
		</body>
</html>
<?php ?>