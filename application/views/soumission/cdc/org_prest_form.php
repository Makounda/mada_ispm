<form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Intitulé du module</th>
                        <th> Catégorie préstataire</th>
                        <th> Organisme  </th>
                        <th> Nom du formateur</th>
                        <th> Référence du formateur</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="add">
                  <tr>               
                      <td><input type="text" class="form-control" id="int_mod"></td>
                      <td><input type="text" class="form-control"id="cat_pres"></td>
                      <td><input type="text" class="form-control"id="org"></td>
                      <td><input type="text" class="form-control"id="nom_form"></td> 
                      <td><textarea class="form-control" id="ref_form"></textarea></td>
                      <td>
                        <button class="btn btn-primary">Remplacer</button>
                        <button class="btn btn-danger">Suprimer</button>
                      </td>     
                  </tr>
                  
                </tbody>
                <th><button id="add-row-btn" class="btn btn-primary">Ajouter une ligne</button></th>
               
      </table>
      <button type="button" id="partie5"class="btn btn-primary">Validez</button>
         </form>
    
<script>
  $(document).ready(function(){
    $("#add-row-btn").click(function(){
      var btn = '<tr>' +
              '<th><input type="text" class="form-control" id="int_mod" required ></th>'+
                      '<td><input type="text" class="form-control" id="cat_pres" ></td>' +
                      '<td><input type="text" class="form-control" id="org"></td>' +
                      '<td><input type="text" class="form-control"id="nom_form"></td>' +
                      '<td><textarea class="form-control" id="ref_form"></textarea></td>'+
                      '<td><button class="btn btn-primary">Remplacer</button><button class="btn btn-danger">Suprimer</button></td>' +
                    '</tr>';
    $('#add').append(btn);

    })

     $('.btn-danger').click(function() {
      $(this).closest('tr').remove();
    });
    
    $('#partie5').click(function(e){
        e.preventDefault();
        // var int_mod = $('#int_mod').val();
        // var cat_pres = $('#cat_pres').val();
  

        var org= document.querySelectorAll('#org');
        var nom_form = document.querySelectorAll('#nom_form');
        var ref_form = document.querySelectorAll('#ref_form');  
        var cat_pres=document.querySelectorAll("#cat_pres");
        let int_modn = document.querySelectorAll("#int_mod")
        var taborg=[]
        var tabnomform=[]
        var tabreform=[]
        let tabcatpres=[]
        let tabintmod = []
        for (let i = 0; i < int_mod.length; i++) {
         tabintmod.push(int_modn[i].value);
         taborg.push(org[i].value);
         tabnomform.push(nom_form[i].value);
         tabreform.push(ref_form[i].value);
         tabcatpres.push(cat_pres[i].value);
        
      
        // console.log(tabintmod);
       $.ajax({
           type :"post",
           url:"<?php echo base_url("OrgPresta/store");?>",

             data:{int_mod:tabintmod[i],cat_pres:tabcatpres[i],org:taborg[i],nom_form:tabnomform[i],ref_form:tabreform[i]},
            

           success: function(rep)
           {   
        int_mod[i].value="";
        org[i].value="";
        nom_form[i].value="";
        ref_form[i].value="";
        cat_pres[i].value=""; 
          
            }
                
       });
      }
    });
  })
</script>



