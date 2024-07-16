<form action=""method=''>
	<div class="form-group">					
		<label  for="raison" >Raison social</label>	
		<input type="text" class="form-control" 
			value="<?php foreach ($entreprise as $row){
						if( $row->id_entre)
							echo $row->nom_entre;
					}
					?>">			
	</div>				  
	<div class="form-group">
		<label for="nif">NIF</label>
		<input type="text" class="form-control"
		value="<?php
			foreach ($entreprise as $row){
				if( $row->id_entre)
					echo $row->nif_entre;
				}
				?>">							
	</div>		
	<div class="form-group">
		<label for="stat">STAT</label>
		<input type="text" class="form-control"
		value="<?php
			foreach ($entreprise as $row){
				if( $row->id_entre)
					echo $row->stat_entre;
			}
			?>">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input type="text" class="form-control" 
		value="<?php
			foreach ($entreprise as $row){
				if( $row->id_entre)
					echo $row->mail_entre;
			}
			?>">  
	</div>
	<div class="form-group">
		<label for="tele">Téléphone</label>
		<input type="text" class="form-control" 
		value="<?php
			foreach ($entreprise as $row){
				if( $row->id_entre)
					echo $row->tel_entre;
			}
			?>">  
	</div>							  										 
	<h1>Térritoire</h1>				   
	<div class="form-group">
		<label for="idter">Identification de térritoire</label>
		<input type="text" class="form-control" id="teriT" placeholder="Indentification de térritoire">  
	</div>			  
	<div class="form-group">
		<label for="code">Codification</label>
		<input type="text" class="form-control" id="codI" placeholder="CSP7">
	</div>				  
	<div class="form-group">
		<label for="nrl">National/Regional/Local à preciser</label>
		<input type="text" class="form-control" id="narelo" placeholder="Nat/Reg/Loc">  
	</div>				 	  
	<h1>Résponsable</h1> 					
		<div class="form-group">
			<label for="np">Nom et Prénoms</label>
			<input type="text" class="form-control" id="nomPr" placeholder="Nom et prénom">  
		</div>					
		<div class="form-group">
			<label for="ce">Email</label>
			<input type="text" class="form-control" id="emaiL"placeholder="Email">  
		</div>				
		<div class="form-group">
			<label for="ct">Téléphone</label>
			<input type="tel" class="form-control"id="teL"placeholder="Téléphone">  
		</div>				  
		<button type="button" id="partie4" class="btn btn-primary">Enregistrer</button>
</form>
<script>
// ------------step-wizard-------------
$(document).ready(function () {
	$('#partie4').click(function(e){
		//$('#frm_context')
		e.preventDefault();
		var teriT= $('#teriT').val();
		var codI = $('#codI').val();
		var narelo= $('#narelo').val();
		var nomPr = $('#nomPr').val();
		var emaiL = $('#emaiL').val();
		var teL = $('#teL').val();
		$.ajax({
			type :"post",
			url:"<?php echo base_url("Porteur/store");?>",
			data:{teriT:teriT,codI:codI,narelo:narelo,nomPr:nomPr,emaiL:emaiL,teL:teL},
			success: function(rep)
			{   
			$('#teriT').val("");
			$('#codI').val("");
			$('#narelo').val("");
			$('#nomPr').val("");
			$('#emaiL').val("");
			$('#teL').val("");
			}
				
		});
	});
});
</script>