
		<h1><center>FORMATION</center></h1>
<div >
    <h2> Identification des besoins communs de compétences et de formation des microentrepreneurs du territoire concernés</h2>
    <form method="post" id="aza"action="<?php// echo base_url('Context/store') ?>">
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea id="ibcc" class="form-control"></textarea></td>                   
                    </tr>          
                </tbody>
            </table>
    <h2> Identification des besoins communs de compétences et de formation des maitres d'apprentissage </h2>
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea id="ibcca" class="form-control"></textarea></td>                      
                    </tr>                    
                </tbody>
            </table>
        <h2> Identification des besoins communs de compétences et de formation des jeunes / adultes en emploi précaire/déflatés </h2>
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                       <td><textarea id="ibccja"  class="form-control"></textarea> </td>                      
                    </tr>                   
                </tbody>
            </table>
        <h2> Lieu de formation</h2>
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea id="lieu_form"  class="form-control"></textarea></td>                      
                    </tr>                
            </tbody>
        </table>
        <h2>Intitulé de la formation</h2>
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea id="int_form" class="form-control"></textarea> </td>   
                    </tr>
                </tbody>
            </table>
        <h2> Courte description de la formation à financer (10lignes)</h2>
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea id="cdff" class="form-control"></textarea></td>                      
                    </tr>                    
                </tbody>
            </table>           
        <button type="button" id="enote"class="btn btn-primary">Envoyer</button>    
    </form>
</div>

    <script>
// ------------step-wizard-------------
$(document).ready(function(){
    $('#enote').click(function(e){
        //$('#frm_context')
        e.preventDefault();
        var ibcc = $('#ibcc').val();
        var ibcca = $('#ibcca').val();
        var ibccja = $('#ibccja').val();
        var lieu_form = $('#lieu_form').val();
        var int_form = $('#int_form').val();
        var cdff = $('#cdff').val();

       $.ajax({
           type :"post",
           url:"<?php echo base_url("Formation/store");?>",
           data:{ibcc:ibcc,ibcca:ibcca,ibccja:ibccja,lieu_form:lieu_form,int_form:int_form,cdff:cdff},
           success: function(rep)
           {   
            $('#ibcc').val("");
             $('#ibcca').val("");
             $('#ibccja').val("");
             $('#lieu_form').val("");
             $('#int_form').val("");
             $('#cdff').val("");
           // $('#ta').empty();
           // $('#ta').html(rep);      
                 //location.reload();
                 // console.log('ok');
            }
                
       });
    });
});
</script>