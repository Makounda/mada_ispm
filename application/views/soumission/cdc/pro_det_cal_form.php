<form method="" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Intitulé du module</th>
                        <th> Durée Horaire</th>
                        <th> Objectif d'apprentissage(de compétences à acquérir)  </th>
                        <th> Critère de mesure des résultats atteints</th>
                        <th> Action</th>
                    </tr>
                </thead>
                <tbody id="add">
                  <tr>
                    
                      <td><textarea class="form-control intmod" name="" required  ></textarea></td>
                      <td><textarea class="form-control durH" name="" required  ></textarea></td>
                      <td><textarea class="form-control oaca" name="" required  ></textarea></td>
                      <td><textarea class="form-control critm" name="" required  ></textarea></td> 
                      <td>
                        <button class="btn btn-primary">Remplacer</button>
                        <button class="btn btn-danger">Suprimer</button>
                      </td>             
                  </tr>
                  
                </tbody>
                <th><button id="add-row-btn" class="btn btn-primary">Ajouter une ligne</button></th>
      </table>
	      <button type="submit" class="btn btn-primary send">Valider</button>
         </form>
    
<script >
  $(document).ready(function(){
    $("#add-row-btn").click(function(){
      var btn = '<tr>' +
              '<td><textarea class="form-control intmod" required  ></textarea></td>'+
                      '<td><textarea class="form-control durH"  required></textarea></td>' +
                      '<td><textarea class="form-control oaca" required></textarea></td>' +
                      '<td><textarea class="form-control critm"  required></textarea></td>' +
                      '<td><button class="btn btn-primary">Remplacer</button><button class="btn btn-danger">Suprimer</button></td>' +
                    '</tr>';
    $('#add').append(btn);
    
    $('.btn-danger').click(function() {
      $(this).closest('tr').remove();
    });

    })
    let bouton = document.querySelector(".send");
    bouton.addEventListener("click",(e)=>{
      e.preventDefault();
      //alert('salut');
      let vintmod =document.querySelectorAll(".intmod");
      let vdurH=document.querySelectorAll(".durH");
      let voaca=document.querySelectorAll(".oaca");
      let vcritm=document.querySelectorAll(".critm");

      //creation tab vide 
      let tabintmod=[];
      let tabdurH=[];
      let taboaca=[];
      let tabcritm=[];

      //bouclement de la situation 
      for (let i = 0; i < vintmod.length; i++) {
        tabintmod.push(vintmod[i].value);
        tabdurH.push(vdurH[i].value);
        taboaca.push(voaca[i].value);
        tabcritm.push(vcritm[i].value);

        //ajaxisation
        $.ajax({
          type:"post",
          url:"<?php echo base_url("Moyenmat/prca")?>",
          data:{a:tabintmod[i],b:tabdurH[i],c:taboaca[i],d:tabcritm[i]},
          success:function(){
            vintmod[i].value=""
            vdurH[i].value=""
            voaca[i].value=""
            vcritm[i].value=""
          }
        })
      }
    })
  })
</script>



