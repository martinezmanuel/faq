$(function()
{
	$('#addAir').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=addAir',$('#add-air-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "air.php";
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

	$('#editAir').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=editAir',$('#edit-air-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "air.php";
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

	$('#viewAir').click(function(event){
		event.preventDefault();
		$.post('include/proc.php?action=listAir',$('#view-air-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "air.php";
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


function getAirId(idAir)
{
	var result = confirm("Want to delete record?");
	var idAir = "idAir="+idAir;
    if (result) {
		
		$.post('include/proc.php?action=deleteAir',idAir,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idAir).html('');
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