  <div class="content-wrapper">
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
                        <th>Ref_Soumission</th>
                        <th>Nom Projet</th>
                        <th>Porteur de Projet</th>
                         <th>DateSou</th>             
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
						if(!empty($soumission))
						{
							foreach($soumission as $record)
							{
								// echo $record[2];
						?>
						<tr>
							<td><?php echo $record->ref_sou; ?></td>
							<td>
								<?php
									foreach ($projets as $row){
										if( $row->id_pro==$record->id_pro)
										 echo $row->intitulePro;
									}
								?>
							</td>
							<td>
								<?php
									foreach ($entreprise as $row){
										if( $row->id_entre==$record->id_entre)
										 echo $row->nom_entre;
									}
								?>
							</td>
							<td><?php echo $record->date_sou; ?></td>                     
							<td class="text-center">
								<a class="btn btn-sm btn-primary"  href="<?php echo base_url().'Soumission/index?id='.$record->id_entre ?>" title="soumettre"><i class="fa fa-history"></i></a>  
								<!--a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->ref_sou; ?>" title="Edit"><i class="fa fa-pencil"></i></a-->
								<a class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModalModif" onclick="modification('<?php echo $record->ref_sou; ?>','<?php echo $record->id_pro; ?>','<?php echo $record->id_entre; ?>','<?php echo $record->date_sou; ?>')"><i class="fa fa-pencil"></i></a>
								<a class="btn btn-sm btn-danger " href="#" onclick="deleteEtatSou('<?php echo $record->ref_sou; ?>')" title="Delete"><i class="fa fa-trash"></i></a>
							</td>
						</tr>
                    <?php
                        }
                    }
                    ?>
                  </table> 
						<div id="azerty">
							
						</div>				  
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
                        <form method="post" action="<?= base_url('Soumission/addSoumission') ?>">
                        <div class="modal-body">							
							<table class="table table-bordered">                          
								<thead>
									<tr>
										<th>Ref_sou</th> 
										 <td><input type ="text" class="form-control" name="rfs" required></td>                                          
									</tr>
									<tr>
										<th>Nom Projet</th> 
										 <td>
											<select class="form-control"  name="idp">
												<?php foreach ($projets as $row): ?>
													<option	value="<?php echo $row->id_pro; ?>"><?php echo $row->intitulePro; ?></option>
												<?php endforeach; ?>
											</select>
										 </td>                                          
									</tr>
									<tr>
										<th>Porteur de Projet</th> 
										 <td>
											 <select class="form-control"  name="ide">
												<?php foreach ($entreprise as $row): ?>
													<option	value="<?php echo $row->id_entre; ?>"><?php echo $row->nom_entre; ?></option>
												<?php endforeach; ?>
											</select>
										 </td>                                          
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
							<button type="submit" class="btn btn-success" >Valider</button>
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
                        <form method="post" action="<?= base_url('Soumission/MajSoumission') ?>">
							
							<table class="table table-bordered">                          
								<thead>
									<tr>
									  <th>Ref_sou</th>
										<td>
											<input type ="text" class="form-control" id="refsou" name="refsou" required>
										</td>
									</tr>
									<tr>
										<th>Nom Projet</th> 
										 <td>
											<select class="form-control"  name="idpr">
												<?php foreach ($projets as $row): ?>
													<option	value="<?php echo $row->id_pro; ?>"><?php echo $row->intitulePro; ?></option>
												<?php endforeach; ?>
											</select>
										 </td>                                          
									</tr>
									<tr>
										<th>Porteur de Projet</th> 
										 <td>
											 <select class="form-control"  name="identre">
												<?php foreach ($entreprise as $row): ?>
													<option	value="<?php echo $row->id_entre; ?>"><?php echo $row->nom_entre; ?></option>
												<?php endforeach; ?>
											</select>
										 </td>                                          
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
		   url:"<?php echo base_url("Soumission/supSoumis");?>",
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
	
	function modification(refsous,idpros,identres,datesous){
		$('#refsou').val(refsous);
		$('#idpro').val(idpros);
		$('#identre').val(identres);
	
		
	}
	function porteur(id){
		$.ajax({
			type:"POST",
			url:"<?php echo base_url('Soumission/index');?>",
			data:{'port':id},
			success: function(data){
				//console.log(data);	
				//window.location.href='index';
				//$('#azerty').html(rep);
			}
			
      
		});
	}
			
      
	
	
</script>
