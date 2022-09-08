function view()
{
	$.ajax({
		url: 'http://localhost:8080/voting/public/home/get',
		method: 'get',
		dataType: 'json',
		success: function(data)
		{
			$('#nilai').html(data.nilai);
			// console.log('Hello World!');
		}
	})
}

setInterval(view,1000);