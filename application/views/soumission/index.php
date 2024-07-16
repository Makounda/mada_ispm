<style>
 
body{
	font-family: 'Roboto', sans-serif;
}
* {
	margin: 0;
	padding: 0;
}
i {
	margin-right: 10px;
}

/*------------------------*/
input:focus,
button:focus,
.form-control:focus{
	outline: none;
	box-shadow: none;
}
.form-control:disabled, .form-control[readonly]{
	background-color: #fff;
}
/*----------step-wizard------------*/
.d-flex{
	display: flex;
}
.justify-content-center{
	justify-content: center;
}
.align-items-center{
	align-items: center;
}

/*---------signup-step-------------*/
.bg-color{
	background-color: #333;
}
.signup-step-container{
	padding: 150px 0px;
	padding-bottom: 60px;
}




    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard > div.wizard-inner {
            position: relative;
    // margin-bottom: 50px;
    text-align: center;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 75%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 15px;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 30px;
    height: 30px;
    line-height: 30px;
    display: inline-block;
    border-radius: 50%;
    background: #fff;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 16px;
    color: #0e214b;
    font-weight: 500;
    border: 1px solid #ddd;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
        background: #0db02b;
    color: #fff;
    border-color: #0db02b;
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}
.wizard .nav-tabs > li.active > a i{
	color: #0db02b;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: red;
    transition: 0.1s ease-in-out;
}



.wizard .nav-tabs > li a {
    width: 30px;
    height: 30px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
    background-color: transparent;
    position: relative;
    top: 0;
}
.wizard .nav-tabs > li a i{
	position: absolute;
    top: -15px;
    font-style: normal;
    font-weight: 400;
    white-space: nowrap;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 12px;
    font-weight: 700;
    color: #000;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 20px;
}


.wizard h3 {
    margin-top: 0;
}
.prev-step,
.next-step{
    font-size: 13px;
    padding: 8px 24px;
    border: none;
    border-radius: 4px;
    margin-top: 30px;
}
.next-step{
	background-color: #0db02b;
}
.skip-btn{
	background-color: #cec12d;
}
.step-head{
    font-size: 20px;
    text-align: center;
    font-weight: 500;
    margin-bottom: 20px;
}
.term-check{
	font-size: 14px;
	font-weight: 400;
}
.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 40px;
    margin-bottom: 0;
}
.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 40px;
    margin: 0;
    opacity: 0;
}
.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: 40px;
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 2;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 38px;
    padding: .375rem .75rem;
    line-height: 2;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0;
}
.footer-link{
	margin-top: 30px;
}
.all-info-container{

}
.list-content{
	margin-bottom: 10px;
}
.list-content a{
	padding: 10px 15px;
    width: 100%;
    display: inline-block;
    background-color: #f5f5f5;
    position: relative;
    color: #565656;
    font-weight: 400;
    border-radius: 4px;
}
.list-content a[aria-expanded="true"] i{
	transform: rotate(180deg);
}
.list-content a i{
	text-align: right;
    position: absolute;
    top: 15px;
    right: 10px;
    transition: 0.5s;
}
.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #fdfdfd;
}
.list-box{
	padding: 10px;
}
.signup-logo-header .logo_area{
	width: 200px;
}
.signup-logo-header .nav > li{
	padding: 0;
}
.signup-logo-header .header-flex{
	display: flex;
	justify-content: center;
	align-items: center;
}
.list-inline li{
    display: inline-block;
}
.pull-right{
    float: right;
}
/*-----------custom-checkbox-----------*/
/*----------Custom-Checkbox---------*/
input[type="checkbox"]{
    position: relative;
    display: inline-block;
    margin-right: 5px;
}
input[type="checkbox"]::before,
input[type="checkbox"]::after {
    position: absolute;
    content: "";
    display: inline-block;   
}
input[type="checkbox"]::before{
    height: 16px;
    width: 16px;
    border: 1px solid #999;
    left: 0px;
    top: 0px;
    background-color: #fff;
    border-radius: 2px;
}
input[type="checkbox"]::after{
    height: 5px;
    width: 9px;
    left: 4px;
    top: 4px;
}
input[type="checkbox"]:checked::after{
    content: "";
    border-left: 1px solid #fff;
    border-bottom: 1px solid #fff;
    transform: rotate(-45deg);
}
input[type="checkbox"]:checked::before{
    background-color: #18ba60;
    border-color: #18ba60;
}

#step1-content{
	position:relative;
	height:500px;
	width:700px;
	overflow:auto;
	left:100px;
}




@media (max-width: 767px){
	.sign-content h3{
		font-size: 40px;
	}
	.wizard .nav-tabs > li a i{
		display: none;
	}
	.signup-logo-header .navbar-toggle{
		margin: 0;
		margin-top: 8px;
	}
	.signup-logo-header .logo_area{
		margin-top: 0;
	}
	.signup-logo-header .header-flex{
		display: block;
	}
}

</style>
<section class="content" style="background-color:#fff">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" id="step1" data-toggle="tab" aria-controls="step1" onclick="affi1()" role="tab" aria-expanded="true"><span class="round-tab">1 </span><i>Formulaire de demande de financement</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                     <a href="#step2" data-toggle="tab" aria-controls="step2" onclick="affi2()" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Cahier de charge</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" onclick="affi3()"role="tab"><span class="round-tab">3</span> <i>Budget</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" id="step4" onclick="chargeContent()" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i>Annexes</i></a>
                                </li>
                            </ul>
                        </div>
					<?php foreach($entreprise as $record):?>                  
							<div class="tab-content" id="main_form">
								<div class="tab-pane active" role="tabpanel" id="step11">                                    
									<div class="row">
										<div class="col-md-2" >
											<div id="step-content">
												<ul class="nav nav-pills nav-stacked">
													<li ><a  onclick="affichage1()" >Porteur Projet</a></li>
													<li ><a  onclick="affichage2()" class="choose">Contexte</a></li>
													<li><a onclick="affichage3()" class="choose">Béneficiaire</a></li>
													<li><a onclick="affichage4()" class="choose">Formation</a></li>
													<li><a onclick="affichage5()" class="choose">Type, durée et modalité de formation</a></li>																  
												</ul>										
											 </div>		
								<?php endforeach; ?>	
										</div>
										<div class="col-md-10">
											<div id="step1-content" >
												
											</div>
										</div>                                                                             
									</div>
										<ul class="list-inline pull-right">
											<li><button type="button" class="default-btn prev-step">Retour</button></li>
											<li><button type="button" class="default-btn next-step">Suivant</button></li>
										</ul>
									</div>		
									<div class="tab-pane" role="tabpanel" id="step12">
										<h4 class="text-center">Cahier de charge</h4>
											<div class="row" >
												<div class="col-md-2" >
														<!--eto zao isika no manomboka -->
													<ul   class="nav nav-pills nav-stacked">
														<li><a onclick=" affichage6()">Modalité de suivi et évaluation de formation  </a></li>
														<!-- <li><a onclick=" affichage7()">calendrier de realisation</a></li> -->
														<li><a onclick=" affichage8()">Prestataire de formation </a></li>
														<li><a onclick=" affichage9()">Moyen Materiel</a></li>
														<li><a onclick=" affichage10()">formation,supports et moyens pédagogiques </a></li>																  
														<li><a onclick=" affichage11()">Programme de porteur</a></li>																  
													</ul>
												</div>                                   
												<div class="col-md-10">
													<div id="step2-content">
															
													</div>
												</div>                                    
										   </div>                                                                      
											<ul class="list-inline pull-right">
												<li><button type="button" class="default-btn prev-step">Back</button></li>
												<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
												<li><button type="button" class="default-btn next-step">Continue</button></li>
											</ul>
									</div>
									<div class="tab-pane" role="tabpanel" id="step13">
										<h4 class="text-center">Step 3</h4>
										 <div class="row">
											<div class="col-md-2">	
											</div>
											<div class="col-md-10">								
											</div>												
										  </div>
										<ul class="list-inline pull-right">
											<li><button type="button" class="default-btn prev-step">Back</button></li>
											<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
											<li><button type="button" class="default-btn next-step">Continue</button></li>
										</ul>
									</div> 
									
									<div class="tab-pane" role="tabpanel" id="step114">
										<h4 class="text-center">Step 4</h4>
										 <div class="row">
											<div class="col-md-2">
											
											</div>
											<div class="col-md-10">
												<div id="step14-content" >						
													<table class="table">
														<form action=""  method="">
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
																		<select class="form-control" ><option value="option1">CV</option>
																			<option value="option2">Présentation</option>
																			<option value="option3">Lettre de demande de finance</option>
																			<option value="option3">Lettre de mandat</option>
																		</select>
																	</td>
																	<td>
																		<input type="file" class="form-control-file">
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
													var html = '<tr><td><select class="form-control"><option value="option1">CV</option><option value="option2">Présentation</option><option value="option3">Lettre de demande de finance</option><option value="option3">Lettre de mandat</option>   <select></td><td><input type="file" class="form-control-file" name="fmfp[file][]"></td><td><button class="btn btn-primary">Remplacer</button><button class="btn btn-danger">Suprimer</button></td></tr>';
													$("table tbody").append(html);
													$('.btn-danger').click(function() {
										$(this).closest('tr').remove();
										});
												});
											});
										</script>	
												</div> 										
											</div>
																				  
										 </div>
										<ul class="list-inline pull-right">
											<li><button type="button" class="default-btn prev-step">Back</button></li>
											<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
											<li><button type="button" class="default-btn next-step">Continue</button></li>
										</ul>
									</div>																				  
								</div>
							<div class="clearfix"></div>
						</div>
				 </div>
			 </div>
		</div>
	</div>
</section>
<script>
// ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});
// soumition etape js

function hideAndshow(){
	let hideShow = document.querySelector(".hideshow")
	let stepOne= document.querySelector(".cacher")
	let se
	
	// stepOne.style.display="block"
	let chooses = document.querySelectorAll(".choose")
	for (let i = 0; i < chooses.length; i++) {
		chooses[i].addEventListener("click",()=>{
			stepOne.style.display="none"


		})
		
	}

	hideShow.addEventListener("click",()=>{
		console.log(stepOne.style.display);
		if (stepOne.style.display==="") {
			stepOne.style.display="block"
			
		}
		else{
			stepOne.style.display="block"
		}
	})
}
hideAndshow();

function affichage1(id_entre){
	$('#step1-content').load("<?php echo base_url('Soumission/formulaire?id='.$record->id_entre); ?>",function(){});
}	 
	
		// alert(numb);
function affichage2(){
	$("#step1-content").load("<?php echo base_url('Soumission/context'); ?>",function(){});
}

function affichage3(){
	$("#step1-content").load("<?php echo base_url('Soumission/beneficiaire'); ?>",function(){});
}

function affichage4(){
	$("#step1-content").load("<?php echo base_url('Soumission/formation'); ?>",function(){});
}
function affichage5(){
	$("#step1-content").load("<?php echo base_url('Soumission/typedurmodform'); ?>",function(){});
}

function affi1(){
	$("#step114").hide(function(){});
	$("#step13").hide(function(){});
	$("#step12").hide(function(){});
	$("#step11").show(function(){});
}
function affi2(){
	$("#step11").hide(function(){});
	$("#step13").hide(function(){});
	$("#step114").hide(function(){});
	$("#step12").show(function(){});
}
function affi3(){
	$("#step11").hide(function(){});
	$("#step13").show(function(){});
	$("#step114").hide(function(){});
	$("#step12").hide(function(){});
}

function chargeContent(){
	$("#step11").hide(function(){});
	$("#step13").hide(function(){});
	$("#step114").show(function(){});
	$("#step12").hide(function(){});
}

	// step 2 resaka affichage champs dans les etapes

function affichage6(){
	$("#step2-content").load("<?php echo base_url('Soumission/metind'); ?>",function(){});
} 
function affichage7(){
	$("#step2-content").load("<?php echo base_url('Soumission/calendriere'); ?>",function(){});
} 
function affichage8(){
	$("#step2-content").load("<?php echo base_url('Soumission/presta'); ?>",function(){});
}
function affichage9(){
	$("#step2-content").load("<?php echo base_url('Soumission/moyM'); ?>",function(){});
} 
function affichage10(){
	$("#step2-content").load("<?php echo base_url('Soumission/fs'); ?>",function(){});
} 
function affichage11(){
	$("#step2-content").load("<?php echo base_url('Soumission/propart'); ?>",function(){});
} 


</script>
 