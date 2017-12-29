
/*https://stackoverflow.com/questions/19491336/get-url-parameter-jquery-or-how-to-get-query-string-values-in-js*/
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$.each($('input[type=checkbox]'),function(){
    console.log("Search.js Category: " + $(this).val());
    if($(this).val()== getUrlParameter("category")){
        console.log("Search.js Category: " + $(this).val());
        $(this).prop('checked',true);
    }
});