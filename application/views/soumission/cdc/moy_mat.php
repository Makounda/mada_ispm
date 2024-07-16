<form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Intitulé du module</th>
                        <th> Support de formation</th>
                        <th> Outils et Materiel concus pour la formation </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="add">
                  <tr>  
                      <td><input type="text" class="form-control intmod" required></td>
                      <td><input type="text" class="form-control supF" required></td>
                      <td><input type="text" class="form-control omf" required></td>
                      <td>
                        <button class="btn btn-primary">Remplacer</button>
                        <button class="btn btn-danger">Suprimer</button>
                      </td> 
                   
                  </tr>
                  
                </tbody>
                <th><button id="add-row-btn" class="btn btn-primary">Ajouter une ligne</button></th>     
      </table>
      <button type="submit" class="btn btn-primary send" >Valider</button>
         </form>
    
<script >
  $(document).ready(function(){
    $("#add-row-btn").click(function(){
      var btn = '<tr>' +
              '<td><input type="text" class="form-control intmod" required "></td>'+
                      '<td><input type="text" class="form-control supF" required></td>' +
                      '<td><input type="text" class="form-control omf"  required></td>' +
                      '<td><button class="btn btn-primary">Remplacer</button><button class="btn btn-danger">Suprimer</button></td>' +
                    '</tr>';
    $('#add').append(btn);

    $('.btn-danger').click(function() {
      $(this).closest('tr').remove();
    });

    })
    //recuperation des donner
    let bouton= document.querySelector(".send"); 
    bouton.addEventListener('click',(e)=>{
      e.preventDefault();
      //alert("salut");
    let vintmod=document.querySelectorAll(".intmod");
    let vsupF=document.querySelectorAll(".supF");
    let vomf=document.querySelectorAll(".omf");

    //creation tableau vide pour le stockage des variable 
    let tabintmod=[];
    let tabsupF=[];
    let tabomf=[];

    //bouclage des donners
      for (let i = 0; i <vintmod.length; i++) {
        tabintmod.push(vintmod[i].value);
        tabsupF.push(vsupF[i].value);
        tabomf.push(vomf[i].value);
        $.ajax({
          type:"post",
          url:"<?php echo base_url("Moyenmat/Moy")?>",
          data:{a:tabintmod[i],b:tabsupF[i],c:tabomf[i]},
          success:function(){
            vintmod[i].value="";
            vsupF[i].value="";
            vomf[i].value="";
          }
        })
      }
   //console.log(tabintmod);
    })

  })
</script>



