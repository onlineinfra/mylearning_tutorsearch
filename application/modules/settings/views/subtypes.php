<!--Inner Dashboard Sub Menu-->
<?php $this->load->view('navigation');?>
<!--Inner Dashboard Sub Menu--> 

  <!-- Elements Of Web Site -->
  <?php $attributes = array('name'=>'tokenform','id'=>'tokenform');
		echo form_open('',$attributes) ?>
  <div class="container-fluid">
    <div class="row">
          <div class="col-lg-12">
        <div class="elements">
          <div class="panel panel-default theameOfPanle">
		  <div class="panel-heading main_small_heding"><?php echo isset($pagetitle) ? $pagetitle :  get_languageword('no_title');?>
                
				<?php if(isset($helptext) && count($helptext) > 0) { ?>
				<div class="btn digi-trash digi-remove pull-right help" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">  <img src="<?php echo URL_ADMIN_IMAGES?>help.png"> </div>              
				<?php } ?>
              <!--Help--> 
           
            
              <!-- Help --> 
              
            </div>
            <div class="panel-body">
            <!--Help Collapse-->
              <?php if(isset($helptext) && count($helptext) > 0) { ?>
			  <div class="collapse" id="collapseExample">
                <div class="well help_coll"> 
                <ul>
                <?php foreach($helptext as $mess) {?>
				<li><span class="glyphicon glyphicon-ok-circle"></span><?php echo $mess;?></li>
				<?php } ?>                                                              
                </ul>
                </div>
              </div>
			  <?php } ?>			  
           
              <div class="dateTable">
				<div class="flash_msg" <?php echo (empty($message)) ? 'style="display:none;"' : 'style="display:block;"'; ?>><?php echo $message;?></div>
                <table width="100%" class="digiTable" id="table-id">
                  <thead>
                    <tr>
                      <th><input id="checkbox-0" class="checkbox-custom selectall" name="checkbox-0" type="checkbox" onclick="selectall(this,'checkbox_class')">
                        <label for="checkbox-0" class="checkbox-custom-label" ></th>
					  <th><?php echo get_languageword('name');?> </th>
                      <th><?php echo get_languageword('value');?> </th>      
                      <th><?php echo get_languageword('operations');?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr><td colspan="4"><?php echo get_languageword('loading_data_from_server');?></td></tr>
                  </tbody>
                </table>   
              
                
              </div>
              <!-- Data table --> 
            </div>
          </div>
        </div>
      </div> 
      
	
      
    </div>
  </div>
  </form>