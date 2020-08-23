$(document).ready(function() {
    $(".title").summernote();
    $(".description").summernote();
});


$(function () {
    $('.select-layout').selectpicker();

});

$(".select-layout").on("change",function () {
    var selectedOption = $(".select-layout option:selected");
    var layout_id = selectedOption.attr('data-layout');
    $('.layout_id').val(layout_id);
});

//
//
// var inputWhichSelectLayout = $('.input-show-select');
//
// inputWhichSelectLayout.on('click',function () {
//         $('.type-layouts').show();
// });
//
// $('li').on('mousedown',function () {
//     $('.input-show-select').val($(this).attr('value'));
//     $('.type-layouts').hide();
//     $('.layout_id').val($(this).attr('id'));
// });
//
// inputWhichSelectLayout.bind('blur', function(){
//     $('.type-layouts').hide();
// });

var notValideImage = true;

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
    $('input#'+valInputImage+'').val(''); //clean input image after cancel to not load image which was cancel
    $('.manipulate-'+valInputImage+'').hide();
}


$(".form-submit").on("submit", function (e) {
    e.preventDefault();

    $('.form-submit').each(function () {
        console.log($(this).data('validator'));
        if ($(this).data('validator'))
            $(this).data('validator').settings.ignore = ".note-editor *";
    });

        notValideImage = false;
        $('input.image-input').each(function(){

            if(this.value == ""){
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
            $(this).unbind("submit").submit();
        }

});

