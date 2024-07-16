<div class="content-wrapper">
 <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Traitement fichier banque
        <small>Excel template banque</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <!--a class="btn btn-primary" onclick="modalNouveauEntreprise()"><i class="fa fa-plus"></i> Ajouter</a-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   <i class="fa fa-plus"></i> Ajouter
  </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
               <?php echo $error;?> 
				  <?php echo form_open_multipart('banque/Traitement/do_upload');?> 
					
				  <form action = "" method = "">
					 <input type = "file" name = "userfile" size = "20" /> 
					 <br /><br /> 
					 <input type = "submit" value = "upload" /> 
				  </form> 
              
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
    
    function deleteTypePro(id){
       $.ajax({
		   type :"post",
		   url:"<?php echo base_url("parametrages/Projets/supTypeProjets");?>",
		   data:{'del':id},
		   success: function(rep)
		   {	
		   // $('#ta').empty();
		   // $('#ta').html(rep);
		   
				 location.reload();
			     // console.log('ok');
			}
			    
	   });
    };
	

</script>
