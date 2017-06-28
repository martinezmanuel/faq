$(function()
{
	$('#addSuper12electrique').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=addSuper12electrique',$('#add-super12electrique-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super12electrique.php";
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

	$('#editSuper12electrique').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=editSuper12electrique',$('#edit-super12electrique-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super12electrique.php";
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

	$('#viewSuper12electrique').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=listSuper12electrique',$('#view-super12electrique-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super12electrique.php";
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


function getSuper12electriqueId(idSuper12electrique)
{
	var result = confirm("Want to delete record?");
	var idSuper12electrique = "idSuper12electrique="+idSuper12electrique;
    if (result) {
		
		$.post('include/proc.php?action=deleteSuper12electrique',idSuper12electrique,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idSuper12electrique).html('');
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
	$('#addSuper12twin').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=addSuper12twin',$('#add-super12twin-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super12twin.php";
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

	$('#editSuper12twin').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=editSuper12twin',$('#edit-super12twin-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super12twin.php";
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

	$('#viewSuper12twin').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=listSuper12twin',$('#view-super12twin-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super12twin.php";
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


function getSuper12twinId(idSuper12twin)
{
	var result = confirm("Want to delete record?");
	var idSuper12twin = "idSuper12twin="+idSuper12twin;
    if (result) {
		
		$.post('include/proc.php?action=deleteSuper12twin',idSuper12twin,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idSuper12twin).html('');
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
	$('#addSuper12seeder').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=addSuper12seeder',$('#add-super12seeder-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super12seeder.php";
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

	$('#editSuper12seeder').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=editSuper12seeder',$('#edit-super12seeder-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super12seeder.php";
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

	$('#viewSuper12seeder').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=listSuper12seeder',$('#view-super12seeder-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "super12seeder.php";
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


function getSuper12seederId(idSuper12seeder)
{
	var result = confirm("Want to delete record?");
	var idSuper12seeder = "idSuper12seeder="+idSuper12seeder;
    if (result) {
		
		$.post('include/proc.php?action=deleteSuper12seeder',idSuper12seeder,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idSuper12seeder).html('');
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