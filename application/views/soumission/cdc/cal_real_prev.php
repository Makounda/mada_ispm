<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-md-8">
          <h1>
            <i class="fa fa-tachometer" aria-hidden="true"></i> Cahier de charge
            <small>Calendrier</small>
          </h1>
        </div>
        <div class="col-md-4">
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
    </section> 
    
    <section class="content">
        <div class="row">
          <section>

            <form method="POST" action= <?php echo base_url('cdc/store') ?>>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Intitulé du module</th>
                        <th> Début</th>
                        <th> Fin  </th>
                        <th> Lieu de formation</th>
                        <th> Actions</th>
                    </tr>
                </thead>
                <tbody id="add">
                  <tr>
                    
                      <td><input type="text" class="form-control" required name="fmfp[int_mod][]"></td>
                      <td><input type="date" class="form-control"  name="fmfp[datde][]"></td>
                      <td><input type="date" class="form-control"  name="fmfp[datfin][]"></td>
                      <td><input type="text" class="form-control" required name="fmfp[lifo][]"></td> 
                      <td>
                        <button class="btn btn-primary">Remplacer</button>
                        <button class="btn btn-danger">Suprimer</button>
                      </td> 
                   
                  </tr>
                  
                </tbody>
                <th><button id="add-row-btn" class="btn btn-primary">Ajouter une ligne</button></th>
               
              </table>
              <input type="submit" class="btn btn-primary" name="Valider" value ="Valider" style="position: relative; left: 150px;">
          </form>
          </section>
        </div>
</div>
<script >
  $(document).ready(function(){
    $("#add-row-btn").click(function(){
      var btn = '<tr>' +
              '<th><input type="text" class="form-control" required name="fmfp[int_mod][]"></th>'+
                      '<td><input type="date" class="form-control"  name="fmfp[datde][]"></td>' +
                      '<td><input type="date" class="form-control"  name="fmfp[datfin][]"></td>' +
                      '<td><input type="text" class="form-control" required name="fmfp[lifo][]"></td>' +
                      '<td><button class="btn btn-primary">Remplacer</button><button class="btn btn-danger">Suprimer</button></td>' +
                    '</tr>';
    $('#add').append(btn);

    $('.btn-danger').click(function() {
      $(this).closest('tr').remove();
    });

    })
  })
</script>
