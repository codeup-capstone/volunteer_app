$(document).ready(function() {

    $('#clickableRow tr').click(function() {
        var href = $(this).find("a").attr("href");
        if(href) {
            window.location = href;
        }
    });

    $('#colFullheight').height( $('.container').height());


		
});