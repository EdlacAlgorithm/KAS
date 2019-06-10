/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};	
		
/*scroll to top*/

/**debugError start*/
function debugError(responseText)
{	
	var w = 400;
	var h = 580;
	var left = (screen.width / 2) - (w / 2);
	var top = (screen.height / 2) - (h / 2);
	var w = window.open('about:blank', "DebugError", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no,display=popup, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left)
	//var w = window.open('about:blank')
		w.document.write(responseText)
		w.document.close()
}
/**debugError end */

/**Modal Start*/

/**Modal End */

function sweet_alert($callback,$title='Are you sure ?') {
	swal({
			title:$title,

			type:'warning',

			text:'You want to delete this.!',

			showCancelButton:true,

			confirmButtonColor: '#f44336',

			confirmButtonText:'Yes, delete!',

			closeOnConfirm:true

	},function(){$callback();});
}

function deleteItem($item,$itemId)
{
	sweet_alert(()=>{
		$.post(baseUrl+'/'+$item+'/'+$itemId,{_method:'delete'},(response)=>{
			window.location = baseUrl+'/'+$item
			//debugError(response)
			///console.log(response)
		}).error((err)=>{

		})
	})
}

function deleteProduct($this)
{
	deleteItem('product',$this.id)
}

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});
