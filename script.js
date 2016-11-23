function ajax()
{
	var req;
       if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
           req = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        req = new ActiveXObject("Microsoft.XMLHTTP");
    }
	req.open('GET','chat.php');
	req.onreadystatechange=function()
	{
		if(req.readyState== 4 && req.status==200)
		{
			document.getElementById('chat').innerHTML=req.responseText;
		}
	}
	req.send(null);
}
setInterval(function(){ajax()},1000);
			