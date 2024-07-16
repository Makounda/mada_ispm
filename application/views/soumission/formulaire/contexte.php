<h1><center>CONTEXTE SOCIOECONOMIQUE DE LA DEMANDE</center></h1>
<div>
<form method="post" id='frm_context' action="<?php// echo base_url('Context/store') ?>">
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <h2> Description du contexte du secteur/filière/métier/marché concerné par le projet</h2>
                    </tr> 
                    <tr>
                        <td ><textarea class="form-control" id="dcs"></textarea> </td>   
                    </tr>                   
                </tbody>
            </table>
        <h2>Déficits en compétences des microentrepreneurs concernés</h2>
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr >
                        <td><textarea id="dcmc" class="form-control"></textarea> </td>            
                    </tr>                  
                </tbody>
            </table>
        <h2> Déficits en compétences des maitres d'apprentissage concernés </h2>
    
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea id="dcmac" class="form-control"></textarea></td>   
                    </tr>                   
                </tbody>
            </table>
        <h2>Déficits en qualifications des jeunes/adultes en emploi précaire concernés/déflatés </h2>
            <table class="table table-bordered">
                <thead>
                </thead>
                <tbody>
                    <tr>
                        <td><textarea id="dqj" class="form-control"></textarea></td>                   
                    </tr>                    
                </tbody>
            </table>
            <button type="button" id="btn_env_context" class="btn btn-primary">Envoyer</button>
    </form>

</div>

    <script>
// ------------step-wizard-------------
$(document).ready(function () {

    $('#btn_env_context').click(function(e){
        //$('#frm_context')
        e.preventDefault();
        var dcs = $('#dcs').val();
        var dcmc = $('#dcmc').val();
        var dcmac = $('#dcmac').val();
        var dqj = $('#dqj').val();

       $.ajax({
           type :"post",
           url:"<?php echo base_url("Context/store");?>",
           data:{dcs:dcs,dcmc:dcmc,dcmac:dcmac,dqj:dqj},
           success: function(rep)
           {   
            $('#dcs').val("");
             $('#dcmc').val("");
             $('#dcmac').val("");
             $('#dqj').val("");
           // $('#ta').empty();
           // $('#ta').html(rep);      
                 //location.reload();
                 // console.log('ok');
            }
                
       });
    });
});
</script>
