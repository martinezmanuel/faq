$(function()
{
	$('#addAlpinist500').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=addAlpinist500',$('#add-alpinist500-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "alpinist500.php";
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

	$('#editAlpinist500').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=editAlpinist500',$('#edit-alpinist500-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "alpinist500.php";
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

	$('#viewAlpinist500').click(function(event){
		event.preventDefault();
		$.post('include/process.php?action=listAlpinist500',$('#view-alpinist500-form').serialize(),function(resp)
		{
			if (resp['status'] == true)
			{
				$("#success-msg").html(resp['msg']);
				$("#success-msg").show();
				setTimeout(function()
				{ 
				location.href = "alpinist500.php";
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


function getAlpinist500Id(idAlpinist500)
{
	var result = confirm("Want to delete record?");
	var idAlpinist500 = "idAlpinist500="+idAlpinist500;
    if (result) {
		
		$.post('include/process.php?action=deleteAlpinist500',idAlpinist500,function(resp)
		{
			if (resp['status'] == true)
			{
				$("#row_num_"+idAlpinist500).html('');
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