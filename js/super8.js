$(function()
{
	$('#addSuper8electrique').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=addSuper8electrique',$('#add-super8electrique-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super8electrique.php";
				 },1000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});

	$('#editSuper8electrique').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=editSuper8electrique',$('#edit-super8electrique-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super8electrique.php";
				 },1000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});

	$('#viewSuper8electrique').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=listSuper8electrique',$('#view-super8electrique-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super8electrique.php";
				 },1000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});	
});


function getSuper8electriqueId(idSuper8electrique)
{
	var result = confirm("Want to delete record?");
	var idSuper8electrique = "idSuper8electrique="+idSuper8electrique;
    if (result) {
		
		$.post('include/proc.php?action=deleteSuper8electrique',idSuper8electrique,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idSuper8electrique).html('');
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
			}
			else
			{
				$("#error-msg").html(htm);
				$("#error-msg").show();	
			}
		},'json');
    }	
}


$(function()
{
	$('#addSuper8twin').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=addSuper8twin',$('#add-super8twin-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super8twin.php";
				 },1000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});

	$('#editSuper8twin').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=editSuper8twin',$('#edit-super8twin-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super8twin.php";
				 },1000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});

	$('#viewSuper8twin').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=listSuper8twin',$('#view-super8twin-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super8twin.php";
				 },1000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});	
});


function getSuper8twinId(idSuper8twin)
{
	var result = confirm("Want to delete record?");
	var idSuper8twin = "idSuper8twin="+idSuper8twin;
    if (result) {
		
		$.post('include/proc.php?action=deleteSuper8twin',idSuper8twin,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idSuper8twin).html('');
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
			}
			else
			{
				$("#error-msg").html(htm);
				$("#error-msg").show();	
			}
		},'json');
    }	
}

$(function()
{
	$('#addSuper8seeder').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=addSuper8seeder',$('#add-super8seeder-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super8seeder.php";
				 },1000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});

	$('#editSuper8seeder').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=editSuper8seeder',$('#edit-super8seeder-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super8seeder.php";
				 },1000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});

	$('#viewSuper8seeder').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=listSuper8seeder',$('#view-super8seeder-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super8seeder.php";
				 },1000);
			}
			else
			{
				var htm = '<button data-dismiss="alert" class="close" type="button">×</button>';
				$.each(resp['msg'],function(index,val){
					htm += val+" <br>";
					});
				$("#error-msg").html(htm);
				$("#error-msg").show();	
				$(this).prop('disabled',false);
			}
		},'json');
	});	
});


function getSuper8seederId(idSuper8seeder)
{
	var result = confirm("Want to delete record?");
	var idSuper8seeder = "idSuper8seeder="+idSuper8seeder;
    if (result) {
		
		$.post('include/proc.php?action=deleteSuper8seeder',idSuper8seeder,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idSuper8seeder).html('');
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
			}
			else
			{
				$("#error-msg").html(htm);
				$("#error-msg").show();	
			}
		},'json');
    }	
}