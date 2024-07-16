<div class="content-wrapper">
   <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Gestion Paramètrage
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <!--a class="btn btn-primary" onclick="modalNouveauEntreprise()"><i class="fa fa-plus"></i> Ajouter</a-->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Ajouter</button>
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
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Liste Etats Soumission</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover" id="ta">
                    <tr>
                        <th>id</th>
                        <th>Libellé</th>
                        
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($etatsoumission))
                    {
                        foreach($etatsoumission as $record)
                        {
                            // echo $record[2];
                    ?>
                    <tr>
                        <td><?php echo $record->id_etatSou; ?></td>
                        <td><?php echo $record->lib_etatSou; ?></td>
                      
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="<?= base_url().'login-history/'.$record->id_etatSou; ?>" title="Login history"><i class="fa fa-history"></i></a> | 
                            <!--a class="btn btn-sm btn-info" href="<?php// echo base_url().'editOld/'.$record->id_etatSou;// ?>" title="Edit"><i class="fa fa-pencil"></i></a-->
							<a class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModalModif" onclick="modification('<?php echo $record->id_etatSou; ?>','<?php echo $record->lib_etatSou; ?>')"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger " href="#" onclick="deleteEtatSou('<?php echo $record->id_etatSou; ?>')" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                  </table>
                  
                </div><!-- /.box-body -->
                 <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Nouveau Etats Soumission</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <form method="post" action="<?= base_url('parametrages/Etats/addEtatsoumission') ?>">
                        <div class="modal-body">
							
							<table class="table table-bordered">                          
								<thead>
									<tr>
										<th>Libellé</th> 
										 <td><input type ="text" class="form-control" name="lib" required></td>                                          
									</tr>
									
								</thead>
								<tbody>
								  <th>
								   
								  </th>
								</tbody>
								
							</table>
						
    
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
							<button type="submit"class="btn btn-success" >Valider</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
				  <div class="modal fade" id="myModalModif">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Edition Etats Soumission</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                        <form method="post" action="<?= base_url('parametrages/Etats/MajEtatsoumission') ?>">
							
							<table class="table table-bordered">                          
								<thead>
									<tr>
									  <th>libellé</th>
										<td>
										<input type ="text" class="form-control" id="idLibSou" name="idLibSou" style="display:none;" required>
										<input type ="text" class="form-control" id="etatLibSou" name="etatLibSou" required></td>
									</tr>
								</thead>
								<tbody>
								  <th>
								   
								  </th>
								</tbody>
								
							</table>
						
    
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
							<button type="submit"class="btn btn-success" >Mettre à jour</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->
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
    
    function deleteEtatSou(id){
       $.ajax({
		   type :"post",
		   url:"<?php echo base_url("parametrages/Etats/supEtatsoumission");?>",
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
	
	function modification(idSou,libSou){
		$('#idLibSou').val(idSou);
		$('#etatLibSou').val(libSou);
		
	}
</script>
