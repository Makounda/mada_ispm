<div class="container">
	<table class="table">
		<form action="<?= base_url('indexCon/store')?>"  method="post">
			<thead>
					<tr>
						<th>Type annexe</th>
						<th>Model</th>
						<th>Action</th>
					</tr>
			</thead>
		<tbody>
				<tr>
					<td>
						<select class="form-control" name="fmfp[sel][]"><option value="option1">CV</option>
                             <option value="option2">Présentation</option>
                             <option value="option3">Lettre de demande de finance</option>
                             <option value="option3">Lettre de mandat</option>
                         </select>
					</td>

					<td>
						<input type="file" class="form-control-file" name="fmfp[file][]">
					</td>

					<td>
						<button class="btn btn-primary">Remplacer</button>
                        <button class="btn btn-danger">Suprimer</button>
					</td>

				</tr>
				
		</tbody>
	</form>
</table>
		<td><button class="btn btn-primary" id="addRow">Ajouter une ligne</button></td>			
		 <input type="submit" class="btn btn-primary" name="Valider" value ="Valider">
	
</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$("#addRow").click(function() {
				var html = '<tr><td><select class="form-control" name="fmfp[sel][]"><option value="option1">CV</option><option value="option2">Présentation</option><option value="option3">Lettre de demande de finance</option><option value="option3">Lettre de mandat</option>   <select></td><td><input type="file" class="form-control-file" name="fmfp[file][]"></td><td><button class="btn btn-primary">Remplacer</button><button class="btn btn-danger">Suprimer</button></td></tr>';
				$("table tbody").append(html);
				 $('.btn-danger').click(function() {
      $(this).closest('tr').remove();
    });
			});
		});
	</script>