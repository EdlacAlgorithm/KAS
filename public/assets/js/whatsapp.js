var w = 400;
var h = 580;
var left = (screen.width / 2) - (w / 2);
var top = (screen.height / 2) - (h / 2);
function whatsAppWith($phone) {
	
   $api = "https://api.whatsapp.com/send?phone="+$phone+"&message=";
   
    var newWin = window.open($api, "WhatsApp", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no,display=popup, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
}