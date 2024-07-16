<form>
            <table class="table table-bordered">
                <thead class="btn-primary">
                    <tr>
                        <th>Pour les formés</th>
                        <th> Resultat à Atteindres</th>
                        <th> Modalité de suivi et évaluation/source de verification </th>
                        <th></th>
                       
                    </tr>
                </thead>
                <tbody id="add">
                  <tr>
                      <td></td>
                      <td><input type="checkbox" value="true" class="one" name=""> Maitrise/Expert</td>
                      <td><input type="checkbox" value="true"class="one" name=""> Evaluation à chaud</td>    
                  </tr>
                   <tr>
                      <td></td>
                      <td><input type="checkbox" value="true"class="one" name=""> Application intermédiaire</td>
                      <td><input type="checkbox" value="true"class="one" name=""> Test théorique </td>    
                  </tr>
                   <tr>
                      <td></td>
                      <td><input type="checkbox" value="true" class="one"name=""> Connaissance de base</td>
                    
                      <td><textarea class="form-control A1" placeholder="Autres(merci de preciser)"></textarea></td>    
                  </tr>
                   <tr>
                      <td></td>
                      <td><input type="checkbox" value="true"class="one" name=""> Application avancée</td>
                      <td><input type="checkbox"  value="true"class="one" name=""> Mise en situation réelle</td>    
                  </tr>
                   <tr>
                      <td></td>
                      <td><input type="checkbox" value="true"class="one" name=""> Application de base</td>
                      <td><input type="checkbox" value="true"class="one" name=""> Interview</td>    
                  </tr>
                </tbody>




                <thead class="btn-primary">
                   <tr>
                        <th>Pour le secteur</th>
                        <th> Resultat à Atteindres</th>
                        <th> Modalité de suivi et évaluation/source de verification </th>
                        <th></th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td></td>
                      <td><input type="checkbox" value="true"class="one"name=""> Accroissement de la qualité de production</td>
                      <td><input type="checkbox"  value="true"class="one"name=""> Evaluation à froid</td>    
                  </tr>
                   <tr>
                      <td></td>
                      <td><input type="checkbox"value="true" class="one"name=""> Acquisition des nouvelles compétences</td>
                      <td><textarea class="form-control A2" placeholder="Autres(merci de preciser)"></textarea></td> 

                  </tr>
                   <tr>
                    <td></td>
                      <td><textarea class="form-control A3" placeholder="Autres"></textarea></td> 
                     <td><input type="checkbox" value="true" class="one"name=""> Evaluation de performance(interview,entretien...)</td> 
                          
                  </tr>
                   <tr>
                      <td></td>
                      <td><input type="checkbox"value="true" class="one"name=""> Accroissement de la qualité de service</td>
                        
                  </tr>
                   <tr>
                      <td></td>
                      <td><input type="checkbox"value="true"class="one" name=""> Meilleur organisation</td>
                        
                  </tr>
                </tbody>


                  <thead class="btn-primary">
                   <tr>
                        <th>Pour le projet</th>
                        <th> Resultat à Atteindres</th>
                        <th> Modalité de suivi et évaluation/source de verification </th>
                        <th></th>
                       
                    </tr>
                </thead class="btn-primary">
                <tbody>
                    <tr>
                      <td></td>
                      <td><input type="checkbox"value="true"class="one" name=""> Formation Professionnelle continue(FPC)production</td>
                      <td><input type="checkbox" value="true"class="one" name=""> Fiche de présence</td>    
                  </tr>
                   <tr>
                      <td></td>
                      <td><input type="number" class="form-control " placeholder="Homme" name=""></td>
                      <td>  <textarea class="form-control A4" placeholder="Autres(merci de preciser)"></textarea> </td> 

                  </tr>
                   <tr>
                    <td></td>
                       <td><input type="number" class="form-control N1" placeholder="Femme" name=""></td>
                     <td><input type="checkbox" value="true"class="one" name=""> Rapport technique(interview,test,entretien...)</td> 
                          
                  </tr>
                   <tr>
                      <td></td>
                     <td><input type="number" class="form-control N2" placeholder="Adulte" name=""></td>
                        
                  </tr>
                   <tr>
                      <td></td>
                      <td><input type="checkbox"value="true"class="one" name=""> Formation Pré-Emploi(FPE)service</td>   
                  </tr>
                    <tr>
                      <td></td>
                      <td><input type="number" class="form-control N3" placeholder="Homme" name=""></td>
                      <td></td> 

                  </tr>
                   <tr>
                    <td></td>
                       <td><input type="number" class="form-control N4" placeholder="Femme" name=""></td>
                     <td></td> 
                          
                  </tr>
                   <tr>
                      <td></td>
                     <td><input type="number" class="form-control N5" placeholder="Adulte" name=""></td>  
                  </tr>
                  <tr>
                    <td><button type="submit"  class="btn btn-primary sony">valider</button></td>
                  </tr>
                </tbody>
                      
      </table>
      
         </form>
    
         <script>
    let but = document.querySelector(".sony");
    but.addEventListener("click",(e)=>{
      e.preventDefault();
      //alert("salut")
      let v1= document.querySelectorAll(".one");
      //  recuperation des donnée textarea par class
      let A1 = document.querySelectorAll(".A1");
      let A2 = document.querySelectorAll(".A2");
      let A3 = document.querySelectorAll(".A3");
      let A4 = document.querySelectorAll(".A4");
      let N1 = document.querySelectorAll(".N1");
      let N2 = document.querySelectorAll(".N2");
      let N3 = document.querySelectorAll(".N3");
      let N4 = document.querySelectorAll(".N4");
      let N5 = document.querySelectorAll(".N5");
      // tableau vide des textarea
      let tabA1=[];
      let tabA2=[];
      let tabA3=[];
      let tabA4=[];
      let tabv1=[];
      let tabN1=[];
      let tabN2=[];
      let tabN3=[];
      let tabN4=[];
      let tabN5=[];
      //creation boucle 
      for (let s = 0; s < N1.length; s++) {
         tabN1.push(N1[s].value);
       tabN2.push(N2[s].value);
       tabN3.push(N3[s].value);
       tabN4.push(N4[s].value);
       tabN5.push(N5[s].value);
       // recuperation des donnée par ajax
       $.ajax({
        type:"post",
        url:"<?php echo base_url("Suivie_eva/teboka3")?>",
        data:{
          N1:tabN1[s],
          N2:tabN2[s],
          N3:tabN3[s],
          N4:tabN4[s],
          N5:tabN5[s]
        },
        success:function(){
          N1[s].value="";
          N2[s].value="";
          N3[s].value="";
          N4[s].value="";
          N5[s].value="";
        }
       })
        //creation boucle 
      }
      for (let j = 0; j < A1.length; j++) {
       tabA1.push(A1[j].value);
       tabA2.push(A2[j].value);
       tabA3.push(A3[j].value);
       tabA4.push(A4[j].value);
      
      // recuperation des donnée par ajax
      $.ajax({
        type:"post",
        url:"<?php echo base_url("Suivie_eva/teboka2")?>",
        data:{
          A1:tabA1[j],
          A2:tabA2[j],
          A3:tabA3[j],
          A4:tabA4[j]
        },
        success:function(){
          A1[j].value="";
          A2[j].value="";
          A3[j].value="";
          A4[j].value="";
        }
      })

      }
      for (let i = 0; i < v1.length; i++) {
       if (v1[i].checked==="true") 
        {
          tabv1.push(v1[i].checked)
        } else {
          tabv1.push(v1[i].checked)
       }
      $.ajax({
         type:"post",
         url:"<?php echo base_url("Suivie_eva/teboka")?>",
          data:{a:tabv1[0],b:tabv1[1],c:tabv1[2],d:tabv1[3],e:tabv1[4],f:tabv1[5],g:tabv1[6],h:tabv1[7],i:tabv1[8],j:tabv1[9],k:tabv1[10],l:tabv1[11],m:tabv1[12],n:tabv1[13],o:tabv1[14],p:tabv1[15],q:tabv1[16],r:tabv1[17],s:tabv1[18]},
          success:function(){
            v1[i].checked=false
          }
        })
      }
     })

</script>


