$(function()
{
	$('#addAcrobat650').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=addAcrobat650',$('#add-acrobat650-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "acrobat650.php";
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

	$('#viewAcrobat650').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=listAcrobat650',$('#view-acrobat650-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "acrobat650.php";
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
	
	
	
	$('#editAcrobat650').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=editAcrobat650',$('#edit-acrobat650-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "acrobat650.php";
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


function getAcrobat650Id(idAcrobat650)
{
	var result = confirm("Want to delete record?");
	var idAcrobat650 = "idAcrobat650="+idAcrobat650;
    if (result) {
		
		$.post('include/process.php?action=deleteAcrobat650',idAcrobat650,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idAcrobat650).html('');
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

