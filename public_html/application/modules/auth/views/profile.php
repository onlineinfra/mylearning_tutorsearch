  <!-- Elements Of Web Site -->
  <div class="container-fluid">
    <div class="row">
		<?php $attributes = array('name'=>'tokenform','id'=>'tokenform', 'enctype' => 'multipart/form-data');
		echo form_open('',$attributes) ?>
	  <div class="col-lg-9">
        <div class="elements">
          <div class="panel panel-default theameOfPanle">
            <div class="panel-heading main_small_heding"><?php echo isset($pagetitle) ? $pagetitle : 'No Title'?>
              <?php if(isset($helptext) && count($helptext) > 0) {?>
			  <!--Help--> 
               <div class="btn digi-trash digi-remove pull-right help" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">  <img src="<?php echo URL_ADMIN_IMAGES;?>help.png"> </div>
              <!-- Help -->
			  <?php } ?>
              
            </div>
            <div class="panel-body"> 
              <?php if(isset($helptext) && count($helptext) > 0) {?>
			  <!--Help Collapse-->
              <div class="collapse" id="collapseExample">
                <div class="well help_coll">
                  <ul>
                    <?php foreach($helptext as $helpmessage) {?>
					<li><span class="glyphicon glyphicon-ok-circle"></span> <?php echo $helpmessage;?> </li>
					<?php } ?>                    
                  </ul>
                </div>
              </div>
              <!--Help Collapse-->
			  <?php } ?>
              <!--Input Text Feilds-->
              <div class="flash_msg" <?php echo (empty($message)) ? 'style="display:none;"' : 'style="display:block;"'; ?>><?php echo $message;?></div>
             			  
              <div class="form-group">
                <div class="group">
                  <label class="digiEffectLabel"><?php echo get_languageword('first_name')?><font color="red">*</font></label>
                  <?php echo form_input($first_name);?>				  
                  <span class="highlight"></span> <span class="bar"></span>
                </div>
              </div>
              
			  <div class="form-group">
                <div class="group">
                  
                  <label class="digiEffectLabel"><?php echo get_languageword('last_name')?><font color="red">*</font></label>
                  <?php echo form_input($last_name);?>
                  <span class="highlight"></span> <span class="bar"></span>
                </div>
              </div>
			  
			  <div class="form-group">
                <div class="group">
                  <label class="digiEffectLabel"><?php echo get_languageword('phone')?><font color="red">*</font></label>
                  <?php echo form_input($phone);?>
                  <span class="highlight"></span> <span class="bar"></span>
                </div>				
              </div>
			  
			  
			  
		       
              
        <div class="form-group text-right">
             <button type="submit" class="digi-defult-btn digi-premier-btn" name="submitbutt" value="submitbutt">
            <a><i class="fa fa-send"></i> <?php echo get_languageword('submit')?></a>
            </button>
			            
            <button type="button" class="digi-defult-btn digi-defult-btn" value="Submit" onclick="document.location='<?php echo URL_AUTH_INDEX;?>'">
            <a><i class="flaticon-round73"></i> <?php echo get_languageword('cancel')?></a>
            </button>
            </div>
			
              
              <!--Input Text Feilds--> 
              
            </div>
          </div>
        </div>
      </div>
	  </form>
      
      <!--STATISTICS-->
      <?php if($showstatistics) $this->load->view('statistics');?>
      <!--STATISTICS--> 
      
    </div>
  </div>
  <style>
    @media (min-width: 300px) and (max-width: 414px){
      .digi-premier-btn {
    background: #14bdee;
    margin-bottom: 10px;
}
}

@media (min-width: 415px) and (max-width: 575px){

}

@media (min-width: 576px) and (max-width: 767px){

}
@media (min-width: 768px) and (max-width: 991px){

}

@media (min-width: 992px) and (max-width: 1199px){

}

@media (min-width: 1200px) and (max-width: 1365px){

}
@media (min-width: 1366px) and (max-width: 1544px){
    
}
  </style>