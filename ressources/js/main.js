$(document).ready(function(){
    new Clipboard('.copy');
});


$('a').click(function (e) {
    e.preventDefault();
    var img = $(this).attr('data-image');
    var type = $(this).attr('class');

    if(type === 'remove'){

        if(removeImg(img) == "Ok"){
            $(this).parent().fadeOut('slow', function () {
                $(this).remove();
            });
        } else{
            alert('Error when remove img');
        }
    }
    else if(type === 'copy'){
        // Clipboard JS +
        $(this).parent().fadeOut('fast').fadeIn('fast');
    }
});

function removeImg(img){

    var result = null;

    var data = {
        "name": img
    };

    $.ajax({
        type: "POST",
        url: "removeIMG.php",
        data: data,
        async: false
    }).always(function (returnData) {
        result = returnData;
    });

    return result;
}