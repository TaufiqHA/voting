function view()
{
	$.ajax({
		url: 'http://localhost:8080/voting/public/home/get',
		method: 'get',
		dataType: 'json',
		success: function(data)
		{
			
			$('#nilai').html(data[0].nilai);
			$('#nilai1').html(data[1].nilai);
			$('#nilai2').html(data[2].nilai);
			$('#nilai3').html(data[3].nilai);
		}
	})
}

setInterval(view,1000);