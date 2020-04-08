function send()
{
	var  tema = $('#tema').val();//Берем введеные пользователем значения
	var  msg = $('#msg').val();
	var  www = $('#www').val();
	
	
	
	
	$.ajax({
		type: 'POST',
		url: 'push.php',
		data: 'tema='+tema+'&msg='+msg+'&www='+www,
			success: function(data)
				{
					let json = JSON.parse(data);
					 if (json.success == 1) 
				         	 $('.results').html("Отправлено");
						else  $('.results').html("Ошибка");
					  
				}
			});

}

