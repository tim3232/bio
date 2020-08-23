$(document).ready(function() {
    $(".title").summernote();
    $(".description").summernote();
});

function loadImage(event) {

    var valInputImage  = event.target.value;
    var nameInputImage = event.target.name;
    $('.manipulate-'+nameInputImage+'').show();
    $('#upload-error').hide();


    if (!valInputImage.match(/(?:gif|jpg|png|bmp)$/)) {
        $('p#'+nameInputImage+'.error').show();
        $('.manipulate-'+nameInputImage+'').hide();
        $('input#'+nameInputImage+'').val('');
    }

    else {

        $('img#'+nameInputImage+'').attr('src',URL.createObjectURL(event.target.files[0]));
        $('p#'+nameInputImage+'.error').hide();
        $('a[name ='+nameInputImage+']').show();

    }

};

function cancelImage(event){

    var valInputImage = event.name;
    $('img#'+valInputImage+'').attr('src','');
    $('input#'+valInputImage+'').val(''); //clean input image after cancel to not load image which was cancel
    $('.manipulate-'+valInputImage+'').hide();

}

$(function () {
    $('.select-layout').selectpicker();

});

$(".select-layout").on("change",function () {
    var selectedOption = $(".select-layout option:selected");
    var layout_id = selectedOption.attr('data-layout');
    $('.layout_id').val(layout_id);
});

$(".form-submit").on("submit", function (e) {
    e.preventDefault();
   var notValideImage = false;

    $('.image').each(function(){

        if(!$(this).attr("src")){
            notValideImage = true;
        }

    });

    if(notValideImage){
        $('#upload-error').show();
    }

    var formFields = $(this).serializeArray();
    var countErrors = 0;
    $.each(formFields,function(){
        if(!this.value){
            $('#'+this.name+'.error').show();
            countErrors++;
        }
        else {
            $('#'+this.name+'.error').hide();
            $('.fading').hide();
        }

    });

    if(!countErrors && !notValideImage){
        console.log('good');
        $(this).unbind("submit").submit();
    }

});


