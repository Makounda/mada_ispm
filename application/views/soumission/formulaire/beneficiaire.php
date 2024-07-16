<h1>BENEFICIAIRE</h1>
 <div>
        <h2>Formation des micro-et petits entrepreneurs/employés</h2>
        <form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th >Nombre de micro entrepreneur</th>
                        <th >Type de metiers conserner par la formation</th>
                        <th >Niveaux de qualification visés</th>
					</tr>
				</thead>
                <tbody>
                    <tr>
                        <td><input type="number" class="form-control" id="nom_meH" placeholder="Homme"></td>
                        <td><input type="number" class="form-control" id="typ_metH" placeholder="Homme"></td>
                        <td><input type="number" class="form-control" id="niv_qua_visH" placeholder="Homme"></td>
                    </tr>
                    <tr>
                        <td><input type="number" class="form-control" id="nom_meF" placeholder="Femme"></td>
                        <td><input type="number" class="form-control" id="typ_metF" placeholder="Femme"></td>
                        <td><input type="number" class="form-control" id="niv_qua_visF" placeholder="Femme"></td>
                       
                    </tr>
                      <tr>
                        <td><input type="number" class="form-control" id="nom_meT"placeholder="Total"></td>
                        <td><input type="number" class="form-control" id="typ_metT" placeholder="Total"></td>
                        <td><input type="number" class="form-control" id="niv_qua_visT" placeholder="Total"></td>
                       
                    </tr>
                   
                </tbody>
            </table>
            <button type="button" id="partie1"class="btn btn-primary">Envoyer</button>
        </form>
    </div>

 <script>
// ------------step-wizard-------------
$(document).ready(function () {

    $('#partie1').click(function(e){
        //$('#frm_context')
        e.preventDefault();
        var nom_meH = $('#nom_meH').val();
        var typ_metH = $('#typ_metH').val();
        var niv_qua_visH = $('#niv_qua_visH').val();
        var nom_meF = $('#nom_meF').val();
        var typ_metF = $('#typ_metF').val();
        var niv_qua_visF = $('#niv_qua_visF').val();
        var nom_meT = $('#nom_meT').val();
        var typ_metT = $('#typ_metT').val();
        var niv_qua_visT = $('#niv_qua_visT').val();

       $.ajax({
           type :"post",
           url:"<?php echo base_url("Beneficiaire/store1");?>",
           data:{nom_meH:nom_meH,typ_metH:typ_metH,niv_qua_visH:niv_qua_visH,nom_meF:nom_meF,typ_metF:typ_metF,niv_qua_visF:niv_qua_visF,nom_meT:nom_meT,typ_metT:typ_metT,niv_qua_visT:niv_qua_visT},
           success: function(rep)
           {   
                $('#nom_meH').val("");
                $('#typ_metH').val("");
                $('#niv_qua_visH').val("");
                $('#nom_meF').val("");
                $('#typ_metF').val("");
                $('#niv_qua_visF').val("");
                $('#nom_meT').val("");
                $('#typ_metT').val("");
                $('#niv_qua_visT').val("");
           // $('#ta').empty();
           // $('#ta').html(rep);      
                 //location.reload();
                 // console.log('ok');
            }
                
       });
    });
});
</script>















<!--Deuxieme partie-->

     <div >
        <h2>Formation des maitres d'apprentissage</h2>
        <form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre de maitre d'apprentissage</th>
                        <th>Type de metiers conserner par la formation</th>
                        <th>Niveaux de qualification visés</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="number" class="form-control"id="nmaH" placeholder="Homme"></td>
                        <td><input type="number" class="form-control" id="tmH" placeholder="Homme"></td>
                        <td><input type="number" class="form-control"id="nqH" placeholder="Homme"></td>
                    </tr>
                    <tr>
                        <td><input type="number" class="form-control" id="nmaF" placeholder="Femme"></td>
                        <td><input type="number" class="form-control"id="tmF"   placeholder="Femme"></td>
                        <td><input type="number" class="form-control"id="nqF"   placeholder="Femme"></td>
                       
                    </tr>
                      <tr>
                        <td><input type="number" class="form-control"id="nmaT" placeholder="Total"></td>
                        <td><input type="number" class="form-control"id="tmT"  placeholder="Total"></td>
                        <td><input type="number" class="form-control"id="nqT"  placeholder="Total"></td>
                       
                    </tr>
                  
                </tbody>
            </table>
            <button type="button" id="partie2"class="btn btn-primary">Envoyer</button>
        </form>
    </div>
<script>
// ------------step-wizard-------------
$(document).ready(function () {

    $('#partie2').click(function(e){
        //$('#frm_context')
        e.preventDefault();
        var nmaH = $('#nmaH').val();
        var tmH = $('#tmH').val();
        var nqH = $('#nqH').val();
        var nmaF = $('#nmaF').val();
        var tmF = $('#tmF').val();
        var nqF = $('#nqF').val();
        var nmaT = $('#nmaT').val();
        var tmT = $('#tmT').val();
        var nqT = $('#nqT').val();

       $.ajax({
           type :"post",
           url:"<?php echo base_url("Beneficiaire/store2");?>",
           data:{nmaH:nmaH,tmH:tmH,nqH:nqH,nmaF:nmaF,tmF:tmF,nqF:nqF,nmaT:nmaT,tmT:tmT,nqT:nqT},
           success: function(rep)
           {   
         $('#nmaH').val("");
         $('#tmH').val("");
         $('#nqH').val("");
         $('#nmaF').val("");
         $('#tmF').val("");
         $('#nqF').val("");
         $('#nmaT').val("");
         $('#tmT').val("");
         $('#nqT').val("");
           // $('#ta').empty();
           // $('#ta').html(rep);      
                 //location.reload();
                 // console.log('ok');
            }
                
       });
    });
});
</script>


















<!--3em partie-->
     <div >
        <h2>Formation des jeunes en situation d'apprentissage</h2>
        <form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre des jeunes en situation d'apprentissage</th>
                        <th>Type de metiers conserner par la formation</th>
                        <th>Niveaux de qualification visés</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="number" class="form-control" id="njsaH"placeholder="Homme"></td>
                        <td><input type="number" class="form-control" id="tmcfH" placeholder="Homme"></td>
                        <td><input type="number" class="form-control" id="nqvH" placeholder="Homme"></td>
                    </tr>
                    <tr>
                        <td><input type="number" class="form-control" id="njsaF"placeholder="Femme"></td>
                        <td><input type="number" class="form-control" id="tmcfF" placeholder="Femme"></td>
                        <td><input type="number" class="form-control" id="nqvF" placeholder="Femme"></td>
                       
                    </tr>
                      <tr>
                        <td><input type="number" class="form-control" id="njsaT" placeholder="Total"></td>
                        <td><input type="number" class="form-control" id="tmcfT" placeholder="Total"></td>
                        <td><input type="number" class="form-control" id="nqvT" placeholder="Total"></td>
                       
                    </tr>
                  
                </tbody>
            </table>
            <button type="button" id="partie3"class="btn btn-primary">Envoyer</button>
        </form>
    </div>
<script>
// ------------step-wizard-------------
$(document).ready(function () {

    $('#partie3').click(function(e){
        //$('#frm_context')
        e.preventDefault();
        var njsaH = $('#njsaH').val();
        var tmcfH = $('#tmcfH').val();
        var nqvH= $('#nqvH').val();
        var njsaF = $('#njsaF').val();
        var tmcfF = $('#tmcfF').val();
        var nqvF = $('#nqvF').val();
        var njsaT = $('#njsaT').val();
        var tmcfT = $('#tmcfT').val();
        var nqvT = $('#nqvT').val();

       $.ajax({
           type :"post",
           url:"<?php echo base_url("Beneficiaire/store3");?>",
           data:{njsaH:njsaH,tmcfH:tmcfH,nqvH:nqvH,njsaF:njsaF,tmcfF:tmcfF,nqvF:nqvF,njsaT:njsaT,tmcfT:tmcfT,nqvT:nqvT,},
           success: function(rep)
           {   
         $('#njsaH').val("");
         $('#tmcfH').val("");
         $('#nqvH').val("");
         $('#njsaF').val("");
         $('#tmcfF').val("");
         $('#nqvF').val("");
         $('#njsaT').val("");
         $('#tmcfT').val("");
         $('#nqvT').val("");
           // $('#ta').empty();
           // $('#ta').html(rep);      
                 //location.reload();
                 // console.log('ok');
            }
                
       });
    });
});
</script>