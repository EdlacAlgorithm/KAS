function socialShare() {
    var socialButtonsEnabled = 1;
    if (socialButtonsEnabled == 1) {
        if(location.pathname.search('product/detail') == 1)
        {
            $('head').append($('<link rel="stylesheet" type="text/css">')
                .attr('href', baseUrl+'/assets/css/jssocials-theme-flat.css'));
        }
        else
        {
            $('head').append($('<link rel="stylesheet" type="text/css">')
                .attr('href', baseUrl+'/assets/css/jssocials-theme-minima.css'));
        }
            
        $(".social-share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["twitter", "facebook", "googleplus", "pinterest","whatsapp"]
        });
    }
}
//  Social Share -------------------------------------------------------------------------------------------------------
if ($(".social-share").length) {
    socialShare();
}