
<form method="" action="">
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
                      <td><input type="text" class="form-control intmod" required ></td>
                      <td><input type="date" class="form-control deb" required></td>
                      <td><input type="date" class="form-control fin" required></td>
                      <td><input type="text" class="form-control lieu" required></td> 
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
        </div>
</div>
<script >
  $(document).ready(function(){
    $("#add-row-btn").click(function(){
      var btn = '<tr>' +
              '<td><input type="text" class="form-control intmod" required></td>'+
                      '<td><input type="date" class="form-control deb"required  ></td>' +
                      '<td><input type="date" class="form-control fin"required ></td>' +
                      '<td><input type="text" class="form-control lieu" required></td>' +
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
    let vdeb=document.querySelectorAll(".deb");
    let vfin=document.querySelectorAll(".fin");
    let vlieu=document.querySelectorAll(".lieu");

    //creation tableau vide pour le stockage des variable 
    let tabintmod=[];
    let tabdeb=[];
    let tabfin=[];
    let tablieu=[];

    //bouclage des donners
      for (let i = 0; i <vintmod.length; i++) {
        tabintmod.push( vintmod[i].value);
        tabdeb.push(vdeb[i].value);
        tabfin.push(vfin[i].value);
        tablieu.push(vlieu[i].value);
        $.ajax({
          type:"post",
          url:"<?php echo base_url("Moyenmat/presto")?>",
          data:{a:tabintmod[i],b:tabdeb[i],c:tabfin[i],d:tablieu[i]},
          success:function(){
            vintmod[i].value="";
            vdeb[i].value="";
            vfin[i].value="";
            vlieu[i].value="";
          }
        })
      }
   //console.log(tabintmod);
    })
  })
</script>
