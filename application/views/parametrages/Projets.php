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
                    <h3 class="box-title">Liste Etats Projets</h3>
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
						
                        <th>Projet</th>
						<th>Intitulé Projets</th>
                        <th>Type de Projet</th>
						<th>Date Debut du Projet</th>
						<th>Date Fin du Projet</th>						
						<th>Date Publication du Projet</th>
						<th>Date Creation du Projet</th>
						<th>Etat</th>
                        
                        <th class="text-center">Actions</th>
                    </tr>
                    <?php
                    if(!empty($projets))
                    {
                        foreach($projets as $record)
                        {
                            // echo $record[2];
                    ?>
                    <tr>
						<td><?php echo $record->id_pro; ?></td>
						<td><?php echo $record->intitulePro; ?></td>						
                        <td>
							<?php
								foreach ($typeprojet as $row){
									if( $row->id_typePro==$record->id_typePro)
									 echo $row->lib_typePro;
								}
								?>
						</td>                 
						<td><?php echo $record->dateDeb; ?></td>
						<td><?php echo $record->dateFin; ?></td>
						<td><?php echo $record->datePub; ?></td>
						<td><?php echo $record->dateCreat; ?></td>
						<td>
							<?php
								foreach ($etats as $row){
									if( $row->id_etat==$record->id_etat)
									 echo $row->lib_etat;
								}
							  ?>
						</td>
                      
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="<?= base_url().'login-history/'.$record->id_pro; ?>" title="Login history"><i class="fa fa-history"></i></a> | 
                            <!--a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$record->id_pro; ?>" title="Edit"><i class="fa fa-pencil"></i></a-->
							<a class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModalModif" onclick="mod('<?php echo $record->id_pro; ?>','<?php echo $record->intitulePro; ?>','<?php echo $record->id_typePro; ?>','<?php echo $record->dateDeb; ?>','<?php echo $record->dateFin; ?>','<?php echo $record->datePub; ?>','<?php echo $record->dateCreat; ?>','<?php echo $record->id_etat; ?>')"><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger " href="#" onclick="deleteEtat('<?php echo $record->id_pro; ?>')" title="Delete"><i class="fa fa-trash"></i></a>
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
                          <h4 class="modal-title">Nouveau Projet</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body1 -->
                        <form method="post" action="<?= base_url('parametrages/Projets/addProjets') ?>">
                        <div class="modal-body">
							
							<table class="table table-bordered">                          
								<thead>
								
									<tr>
										<td>Type de Projet</td> 									
										 <td>	 
										 <select class="form-control"  name="tp">
												<?php foreach ($typeprojet as $row): ?>
													<option	value="<?php echo $row->id_typePro; ?>"><?php echo $row->lib_typePro; ?></option>
												<?php endforeach; ?>
											</select>
										 </td>                                          
									</tr>
								
								
									<tr>
										<th>Intitule Projets</th>
										<td><input type ="text" class="form-control" name="intPr" required></td>
									</tr>

									<tr>
										<th>Date Debut du Projet</th> 
										 <td><input type ="date" class="form-control" name="dde" required></td>                                          
									</tr>
									<tr>
										<th>Date Fin du Projet</th> 
										 <td><input type ="date" class="form-control" name="dfi" required></td>                                          
									</tr>
									<tr>
										<th>Date Publication du Projet</th> 
										 <td><input type ="date" class="form-control" name="dpu" required></td>                                          
									</tr>
									
									<tr>
										<th>Etat</th> 
										 <td>
										 <select class="form-control"  name="ie">
												<?php foreach ($etats as $row): ?>
													<option	value="<?php echo $row->id_etat; ?>"><?php echo $row->lib_etat; ?></option>
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
                        
                        <!-- Modal body2 -->
                        <div class="modal-body">
                        <form method="post" action="<?= base_url('parametrages/Projets/MajProjets') ?>">
							
							<table class="table table-bordered">                          
								<thead>			
								<tr>
										<td>Type de Projet</td> 									
										 <td>
										 <input type ="text" class="form-control" id="idPro" name="idPro" style="display:none;" required>
										 <select class="form-control" id='idtypepro' name="tp">
												<?php foreach ($typeprojet as $row): ?>
													<option	value="<?php echo $row->id_typePro; ?>"><?php echo $row->lib_typePro; ?></option>
												<?php endforeach; ?>
											</select>
										 </td>                                          
									</tr>
								
									<tr>
									  <th>Intitule Projet</th>
										<td>
											<input type ="text" class="form-control" id="inti" name="intis" required>
										</td>
									</tr>
									
									<tr>
									  <th>dateDeb</th>
										<td>										
											<input type ="date" class="form-control" id="datedeb" name="datedebs" required>
										</td>
									</tr>
									<tr>
									  <th>dateFin</th>
										<td>
											
											<input type ="date" class="form-control" id="datefin" name="datefins" required>
										</td>
									</tr>
									<tr>
									  <th>datePub</th>
										<td>											
											<input type ="date" class="form-control" id="datepub" name="datepubs" required>
										</td>
									</tr>
									
									<tr>
										<th>Etat</th> 
										 <td>
										 <select class="form-control" id='idetats' name="ie">
												<?php foreach ($etats as $row): ?>
													<option	value="<?php echo $row->id_etat; ?>"><?php echo $row->lib_etat; ?></option>
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
    
    function deleteEtat(id){
       $.ajax({
		   type :"post",
		   url:"<?php echo base_url("parametrages/Projets/supProjets");?>",
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
	
	function mod(id,intis,idTyp,dateD,dateF,dateP,dateC,idet){
		$('#idPro').val(id);
		$('#inti').val(intis);
		$('#idtypepro').val(idTyp);
		$('#datedeb').val(dateD);
		$('#datefin').val(dateF);
		$('#datepub').val(dateP);
		$('#datecreat').val(dateC);
		$('#idetats').val(idet);
		
	}
</script>
