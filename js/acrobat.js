$(function()
{
	$('#addAcrobat').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=addAcrobat',$('#add-acrobat-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "acrobat.php";
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

	$('#viewAcrobat').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=listAcrobat',$('#view-acrobat-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "acrobat.php";
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
	
	
	
	$('#editAcrobat').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=editAcrobat',$('#edit-acrobat-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "acrobat.php";
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


function getAcrobatId(idAcrobat)
{
	var result = confirm("Voulez vous suprimer cet enregistrement?");
	var idAcrobat = "idAcrobat="+idAcrobat;
    if (result) {
		
		$.post('include/process.php?action=deleteAcrobat',idAcrobat,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idAcrobat).html('');
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

