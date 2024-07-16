<div >
<div >
	<h2><center>Type de formation</center></h2>
</div>
      
        <form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th><input type="radio" name="chexb" value="true" class="onecheck"> En situation de travail</th>
                        <th><input type="radio" name="che" class="onecheck" > En centre de formation externe à l'organisation</th>
                        <th><input type="radio" name="che" class="onecheck"> En centre de formation interne à l'organisation</th>
                    </tr>
                </thead>
               
            </table>
             <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Date de début </th>
                        <th><input type="date" name=""  class="form-control datetime"></th>
                        <th id="cj"> Durée en jours(calcul à partir de la durée)</th>
                        <th><input type="number" id="ch" name="" class="form-control datetime"></th>
                    </tr>
                </thead>
                <tbody>
                	<tr>
                		<th>Date fin <th><input type="date" name="" class="form-control datetime"></th>
                		<th id="ch">Durée en heure </th>
                		<th><input type="number" id="ch" name="" class="form-control datetime"></th>
                	</tr>
                	
                </tbody>
               
            </table>
            <button type="submit" class="btn btn-success send">Valider</button>
        </form>
    </div>
    <script>
        let btnsend= document.querySelector(".send")
        btnsend.addEventListener("click",(e)=>{
          e.preventDefault()
     

        let onecheck = document.querySelectorAll(".onecheck")
        let datetime = document.querySelectorAll(".datetime")
       let tabdatetime=[]
        let tabstatut =[]
        for (let j = 0; j < datetime.length; j++) {
          tabdatetime.push(datetime[j].value)
        
        
        for (let i = 0; i <onecheck.length; i++) {
          if (onecheck[i].checked==="true") {
            tabstatut.push(onecheck[i].checked)   
          }
          else{
            tabstatut.push(onecheck[i].checked)
          }


// checkinput()
$.ajax({
  type:"Post",
  url:"<?php echo base_url("Typ_dur_mod_form/maka");?>",
  data:{sit_trav:tabstatut[0],extern:tabstatut[1],intern:tabstatut[2],datdeb:tabdatetime[0],datfin:tabdatetime[2],jours:tabdatetime[1],heur:tabdatetime[3]},
  success: ()=>{
    onecheck[i].checked=false
    datetime[0].value=""
    datetime[1].value=""
    datetime[2].value=""
    datetime[3].value=""
    
  }
})

}
}
console.log(datetime);
})

    </script>

    <!-- 2em partie dans type dure mod et form -->
<div>
  <h2><center>Pour la formation des micro- et petits entrepreneurs/leurs employés/maîtres d'apprentissage/ jeunes en situation d'apprentissage</		center></h2>
</div>
 <form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Identification du (des) prestataire(s)</th>
                        <th> Nom(s)</th>
                        <th> Adresse	</th>
                        <th> Mail</th>
                        <th> Télephone</th>
                    </tr>
                </thead>
                <tbody id="add">
                	<tr>
                		<th>Prestataire </th>

                		<td><input type="text" class="form-control nom" name=""  required  placeholder="Nom(s)"></td>

                		<th><input type="text"class="form-control adress" name=""  required   placeholder="Adresse"></th>

                		<th><input type="text" class="form-control mail" name=""  required  placeholder="Mail"></th>

                		<th><input type="tel"class="form-control tel" name="" required   placeholder="Téléphone"></th>
                	</tr>
                	
                </tbody>
                <th><button id="add-row-btn" class="btn btn-primary">Ajouter une ligne</button></th>
            </table>
            <button type="submit" class="btn btn-success sond">Valider</button>
         </form>
		
<script>
	 $(document).ready(function(){
		$("#add-row-btn").click(function(){
			var btn = '<tr>' +
							'<th>Prestataire</th>'+
               				'<td><input type="text" class="form-control nom"    required  placeholder="Nom(s)"></td>' +
              				'<td><input type="text"class="form-control adress"    required   placeholder="Adresse"></td>' +
               				'<td><input type="text" class="form-control mail"   required  placeholder="Mail"></td>' +
               				'<td><input type="tel"class="form-control tel" required  placeholder="Téléphone"></td>'
              			'</tr>';
     $('#add').append(btn);

		})
    let btnsond= document.querySelector(".sond")
        btnsond.addEventListener("click",(e)=>{
          e.preventDefault()

      //alert('salut');

      let vnom = document.querySelectorAll(".nom");
      let vadress = document.querySelectorAll(".adress");
      let vmail = document.querySelectorAll(".mail");
      let vtel = document.querySelectorAll(".tel");
      //console.log(vnom);
       let tabinformation0=[]
       let tabinformation1=[]
       let tabinformation2=[]
       let tabinformation3=[]
       for (let i = 0; i < vnom.length; i++) {
         tabinformation0.push(vnom[i].value);  
        tabinformation1.push(vadress[i].value);  
         tabinformation2.push(vmail[i].value);  
        tabinformation3.push(vtel[i].value); 
        
         $.ajax({
         type:"post",
         url:"<?php echo base_url("Typ_dur_mod_form/mako");?>",
        data:{a:tabinformation0[i],b:tabinformation1[i],c:tabinformation2[i],d:tabinformation3[i]},
         success: function(rep)
        {
          vnom[i].value="";
          vadress[i].value="";
          vmail[i].value="";
          vtel[i].value="";  
         }        
       });
     }
     

    })
  })
    
   
</script>
 <!-- 3em partie -->
<div>
  <h2><center>Pour la formation des micro et petits entrepreneurs/employés</center></h2>
</div>
 <form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Durée globale en heures/bénéficiaire</th>
                        <th>Durée globale de la formation</th>
                        <th>Date de debut</th>
                        <th> Date de fin </th>
                    </tr>
                </thead>
                <tbody id="ligne">
                	<tr>
                		<td><input type="number" class="form-control duréH"  ></td>
                		<td><input type="number"class="form-control duréF"  ></td>
                		<td><input type="date" class="form-control debut"  ></td>
                		<td><input type="date"class="form-control fin"  ></td>
                	</tr>
                </tbody>
                <th><button id="bouton00" class="btn btn-primary ajt">Ajouter une ligne</button></th>
            </table>
            <button type="submit" class="btn btn-success vali">Valider</button>
         </form>
         <script >
	 $(document).ready(function(){
        $(".ajt").click(function(){
		var bout = '<tr>' +
               				'<td><input type="number" class="form-control duréH "></td>' +
              				'<td><input type="number"class="form-control duréF"  ></td>' +
               				'<td><input type="date" class="form-control debut"  ></td>' +
               				'<td><input type="date"class="form-control fin"  ></td>'
              	'</tr>';
     $('#ligne').append(bout);
		 })
    let eco = document.querySelector("#bouton00");
    eco.addEventListener("click",(e)=>{
      e.preventDefault()  
    })
  let btnvali= document.querySelector(".vali")
       btnvali.addEventListener("click",(e)=>{
           e.preventDefault()

          let vduréH = document.querySelectorAll(".duréH");
          let vduréF = document.querySelectorAll(".duréF");
          let vdebut = document.querySelectorAll(".debut");
          let vfin = document.querySelectorAll(".fin");

          let tabduréH=[]
          let tabduréF=[]
          let tabdebut=[]
          let tabfin=[]

    for (let i = 0; i < vduréH.length; i++) {
        tabduréH.push(vduréH[i].value);  
        tabduréF.push(vduréF[i].value);  
        tabdebut.push(vdebut[i].value);  
        tabfin.push(vfin[i].value); 
        
        $.ajax({
          type:"post",
          url:"<?php echo base_url("Typ_dur_mod_form/mako2");?>",
         data:{a:tabduréH[i],b:tabduréF[i],c:tabdebut[i],d:tabfin[i]},
          success: function(rep)
         {
          vduréH[i].value="";
          vduréF[i].value="";
          vdebut[i].value="";
          vfin[i].value="";  
          }        
        });
    }
  })
            
  }) 
    //   //alert('salut'); 
    //   //console.log(vnom); 
</script>
  
  
<div>
  <h2><center>Pour la formation des maitres d'apprentissage</center></h2>
</div>
 <form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Durée globale en heures/bénéficiaire</th>
                        <th>Durée globale de la formation</th>
                        <th>Date de debut</th>
                        <th> Date de fin </th>
                    </tr>
                </thead>
                <tbody id="ligne2">
                	<tr>
                		<td><input type="number" class="form-control duréH2"  ></td>
                		<td><input type="number"class="form-control duréF2"  ></td>
                		<td><input type="date" class="form-control debut2"  ></td>
                		<td><input type="date"class="form-control fin2"  ></td>
                	</tr>
                </tbody>
                <th><button id="bouton002" class="btn btn-primary ajt2">Ajouter une ligne</button></th>
            </table>
            <button type="submit" class="btn btn-success vali2">Valider</button>
         </form>
         <script >
	 $(document).ready(function(){
        $(".ajt2").click(function(){
		var bout2 = '<tr>' +
               				'<td><input type="number" class="form-control duréH2 "></td>' +
              				'<td><input type="number"class="form-control duréF2"  ></td>' +
               				'<td><input type="date" class="form-control debut2"  ></td>' +
               				'<td><input type="date"class="form-control fin2"  ></td>'
              	'</tr>';
     $('#ligne2').append(bout2);
		 })
    let eco2 = document.querySelector("#bouton002");
    eco2.addEventListener("click",(e)=>{
      e.preventDefault()  
    })
  let btnvali2= document.querySelector(".vali2")
       btnvali2.addEventListener("click",(e)=>{
           e.preventDefault()

          let vduréH2 = document.querySelectorAll(".duréH2");
          let vduréF2 = document.querySelectorAll(".duréF2");
          let vdebut2 = document.querySelectorAll(".debut2");
          let vfin2 = document.querySelectorAll(".fin2");

          let tabduréH2=[]
          let tabduréF2=[]
          let tabdebut2=[]
          let tabfin2=[]

    for (let i = 0; i < vduréH2.length; i++) {
        tabduréH2.push(vduréH2[i].value);  
        tabduréF2.push(vduréF2[i].value);  
        tabdebut2.push(vdebut2[i].value);  
        tabfin2.push(vfin2[i].value); 
        
        $.ajax({
          type:"post",
          url:"<?php echo base_url("Typ_dur_mod_form/mako3");?>",
         data:{a:tabduréH2[i],b:tabduréF2[i],c:tabdebut2[i],d:tabfin2[i]},
          success: function(rep)
         {
          vduréH2[i].value="";
          vduréF2[i].value="";
          vdebut2[i].value="";
          vfin2[i].value="";  
          }        
        });
    }
  })
            
  }) 
    //   //alert('salut'); 
    //   //console.log(vnom); 
</script>
  
 <!-- htrrato  <tr>
                        <th><h1>Pour la formation des jeune en situation d'apprentissage </h1> </th>
                    </tr> -->
 
   
<div>
  <h2><center>Pour la formation des jeune en situation d'apprentissage</center></h2>
</div>
 <form method="post" action="">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Durée globale en heures/bénéficiaire</th>
                        <th>Durée globale de la formation</th>
                        <th>Date de debut</th>
                        <th> Date de fin </th>
                    </tr>
                </thead>
                <tbody id="ligne3">
                	<tr>
                		<td><input type="number" class="form-control duréH3"  ></td>
                		<td><input type="number"class="form-control duréF3"  ></td>
                		<td><input type="date" class="form-control debut3"  ></td>
                		<td><input type="date"class="form-control fin3"  ></td>
                	</tr>
                </tbody>
                <th><button id="bouton003" class="btn btn-primary ajt3">Ajouter une ligne</button></th>
            </table>
            <button type="submit" class="btn btn-success vali3">Valider</button>
         </form>
         <script >
	 $(document).ready(function(){
        $(".ajt3").click(function(){
		var bout3 = '<tr>' +
               				'<td><input type="number" class="form-control duréH3 "></td>' +
              				'<td><input type="number"class="form-control duréF3"  ></td>' +
               				'<td><input type="date" class="form-control debut3"  ></td>' +
               				'<td><input type="date"class="form-control fin3"  ></td>'
              	'</tr>';
     $('#ligne3').append(bout3);
		 })
    let eco3 = document.querySelector("#bouton003");
    eco3.addEventListener("click",(e)=>{
      e.preventDefault()  
    })
  let btnvali3= document.querySelector(".vali3")
       btnvali3.addEventListener("click",(e)=>{
           e.preventDefault()

          let vduréH3 = document.querySelectorAll(".duréH3");
          let vduréF3 = document.querySelectorAll(".duréF3");
          let vdebut3 = document.querySelectorAll(".debut3");
          let vfin3 = document.querySelectorAll(".fin3");

          let tabduréH3=[]
          let tabduréF3=[]
          let tabdebut3=[]
          let tabfin3=[]

    for (let i = 0; i < vduréH3.length; i++) {
        tabduréH3.push(vduréH3[i].value);  
        tabduréF3.push(vduréF3[i].value);  
        tabdebut3.push(vdebut3[i].value);  
        tabfin3.push(vfin3[i].value); 
        
        $.ajax({
          type:"post",
          url:"<?php echo base_url("Typ_dur_mod_form/mako4");?>",
         data:{a:tabduréH3[i],b:tabduréF3[i],c:tabdebut3[i],d:tabfin3[i]},
          success: function(rep)
         {
          vduréH3[i].value="";
          vduréF3[i].value="";
          vdebut3[i].value="";
          vfin3[i].value="";  
          }        
        });
    }
  })
            
  }) 
    //   //alert('salut'); 
    //   //console.log(vnom); 
</script>
 