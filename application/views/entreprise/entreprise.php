<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Gestion Entreprise
        <small>Add, Edit, Delete</small>
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
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Liste Entreprise</h3>
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
                        <th>Raison sociale</th>
                        <th>NIF</th>
                        <th>STAT</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($entreprise))
                    {
                        foreach($entreprise as $record)
                        {
                            // echo $record[2];
                    ?>
                    <tr>
                        <td><?php echo $record->nom_entre; ?></td>
                        <td><?php echo $record->nif_entre; ?></td>
                        <td><?php echo $record->stat_entre; ?></td>
                        <td><?php echo $record->mail_entre; ?></td>
                        <td><?php echo $record->tel_entre; ?></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="<?= base_url().'login-history/'.$record->id_entre; ?>" title="Login history"><i class="fa fa-history"></i></a> | 
                            <!--a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->id_entre; ?>" title="Edit"><i class="fa fa-pencil"></i></a-->
							<a class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModalModif" onclick="modificat('<?php echo $record->id_entre; ?>','<?php echo $record->nom_entre; ?>','<?php echo $record->nif_entre; ?>','<?php echo $record->stat_entre; ?>','<?php echo $record->mail_entre; ?>','<?php echo $record->tel_entre; ?>')"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger " href="#" onclick="deleteEntre('<?php echo $record->id_entre; ?>')" title="Delete"><i class="fa fa-trash"></i></a>
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
                          <h4 class="modal-title">Inscription d'entreprise</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <form method="post" action="<?= base_url('Entreprise/addEntreprise') ?>">
                        <div class="modal-body">							
							<table class="table table-bordered">                          
								<thead>
									<tr>
										<th>Raison social</th> 
										 <td><input type ="text" class="form-control" name="raison" required></td>                                          
									</tr>
									<tr>
									  <th>nif</th>
										<td><input type ="text" class="form-control" name="nif" required></td>
									</tr>
									<tr>
									  <th>Stat</th>
									   <td><input type ="text" class="form-control" name="stat" required></td>
									</tr>
									<tr>
									  <th>Mail</th>
									   <td><input type ="text" class="form-control" name="mail" required></td>
									</tr>
									<tr>
									  <th>Contact</th>
									   <td><input type ="text" class="form-control" name="tel" required></td>
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
                          <h4 class="modal-title">Edition Information entreprise</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                        <form method="post" action="<?= base_url('Entreprise/MajEntreprise') ?>">
							
							<table class="table table-bordered">                          
								<thead>
									<tr>
										<th>Raison sociale</th> 
										<td><input type ="text" class="form-control" id="idModif" name="idModify" style="display:none" required><input type ="text" class="form-control" id="raisonModif" name="raisonModify" required></td>                                          
									</tr>
									<tr>
									  <th>nif</th>
									  <td><input type ="text" class="form-control" id="nifModif" name="nifModify" required></td>
									</tr>
									<tr>
									   <th>Stat</th>
									   <td><input type ="text" class="form-control" id="statModif" name="statModify" required></td>
									</tr>
									<tr>
									   <th>Mail</th>
									   <td><input type ="text" class="form-control" id="mailModif" name="mailModify" required></td>
									</tr>
									</tr>
										<th>tel</th>
									    <td><input type ="text" class="form-control" id="telModif" name="telModify" required></td>
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
    
    function deleteEntre(id){
        
       $.ajax({
		   type :"post",
		   url:"<?php echo base_url("Entreprise/supEntre");?>",
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
	
	function modificat(id,nom,nif,stat,mail,tel){
		$('#idModif').val(id);
		$('#raisonModif').val(nom);
		$('#nifModif').val(nif);
		$('#statModif').val(stat);
		$('#mailModif').val(mail);
		$('#telModif').val(tel);
	}
</script>
