<form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th> Grande fonction</th>
                        <th> Compétences requises </th>
                        <th>Si FPE,Type d'emploi auquel mener la formation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="add">
                  <tr>
                      <td><input type="text" class="form-control cat" required ></td>
                      <td><textarea class="form-control gra" required></textarea></td>
                      <td><textarea class="form-control com" required></textarea></td>
                       <td><input type="text" class="form-control fpe" required></td>
                      <td>
                        <button class="btn btn-primary">Remplacer</button>
                        <button class="btn btn-danger">Suprimer</button>
                      </td> 
                  </tr>
                </tbody>
                <th><button id="add-row-btn" class="btn btn-primary">Ajouter une ligne</button></th> 
      </table>
      <button type ="submit" class="btn btn-primary send">Valider</button>
         </form>
<script >
  $(document).ready(function(){
    $("#add-row-btn").click(function(){
      var btn = '<tr>' +
              '<td><input type="text" class="form-control cat" required></td>'+
                      '<td><textarea class="form-control gra" required></textarea></td>' +
                      '<td><textarea class="form-control com" required></textarea>></td>' +
                       '<td><input type="text" class="form-control fpe" required></td>'+
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
    let vcat=document.querySelectorAll(".cat");
    let vgra=document.querySelectorAll(".gra");
    let vcom=document.querySelectorAll(".com");
    let vfpe=document.querySelectorAll(".fpe");

    //creation tableau vide pour le stockage des variable 
    let tabcat=[];
    let tabgra=[];
    let tabcom=[];
    let tabfpe=[];

    //bouclage des donners
      for (let i = 0; i <vcat.length; i++) {
        tabcat.push(vcat[i].value);
        tabgra.push(vgra[i].value);
        tabcom.push(vcom[i].value);
        tabfpe.push(vfpe[i].value);
        $.ajax({
          type:"post",
          url:"<?php echo base_url("Moyenmat/mimis")?>",
          data:{a:tabcat[i],b:tabgra[i],c:tabcom[i],d:tabfpe[i]},
          success:function(){
            vcat[i].value="";
            vgra[i].value="";
            vcom[i].value="";
            vfpe[i].value="";
          }
        })
      }
   //console.log(tabintmod);
    })

  })
</script>



