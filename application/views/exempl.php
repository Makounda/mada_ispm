 $('#partie5').click(function(e){
        e.preventDefault();
        var int_mod = $('#int_mod').val();
        var cat_pres = $('#cat_pres').val();
        var org= $('#org').val();
        var nom_form = $('#nom_form').val();
        var ref_form = $('#ref_form').val();      
       $.ajax({
           type :"post",
           url:"<?php echo base_url("OrgPresta/store");?>",
           data:{int_mod:int_mod,cat_pres:cat_pres,org:org,nom_form:nom_form,ref_form:ref_form},
           success: function(rep)
           {   
        $('#int_mod').val("");
        $('#cat_pres').val("");
        $('#org').val("");
        $('#nom_form').val("");
        $('#ref_form').val(""); 
          
            }
                
       });
    });