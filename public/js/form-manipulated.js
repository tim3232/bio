$(document).ready(function() {
    $(".title").summernote({

        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'FiraSans-ExtraLight','FiraSansBlack',
            'FiraSansBold','FiraSansBoldItalic','FiraSansBook','FiraSansBookItalic','FiraSansEight','FiraSansEightItalic','FiraSans-ExtraBold',
            'FiraSansBold','FiraSans-ExtraBoldItalic','FiraSans-ExtraLight','FiraSans-ExtraLightItalic','FiraSansBold','FiraSans-BoldItalic', 'FiraSans-Book','FiraSans-BookItalic','FiraSans-Eight','FiraSans-ExtraLightItalic','FiraSans-EightItalic','FiraSans-ExtraBold','FiraSans-ExtraBoldItalic','FiraSans-ExtraLight','FiraSans-ExtraLightItalic','FiraSans-Four','FiraSans-FourItalic','FiraSans-Hair','FiraSans-HairItalic','FiraSans-Heavy','FiraSans-HeavyItalic','FiraSans-Italic','FiraSans-Light','FiraSans-LightItalic','FiraSans-Medium','FiraSans-MediumItalic','FiraSans-Regular'
            ,'FiraSans-SemiBold','FiraSans-SemiBoldItalic','FiraSans-Thin','FiraSans-ThinItalic','FiraSans-Two','FiraSans-TwoItalic','FiraSans-Ultra','FiraSans-UltraItalic','FiraSans-UltraLight','FiraSans-UltraLightItalic'
        ],
        fontNamesIgnoreCheck: ['FiraSans-ExtraLight','FiraSansBlack','FiraSansBold','FiraSansBoldItalic','FiraSansBook','FiraSansBookItalic','FiraSansEight','FiraSansEightItalic','FiraSans-ExtraBold',
            'FiraSansBold','FiraSans-ExtraBoldItalic','FiraSans-ExtraLight','FiraSans-ExtraLightItalic','FiraSansBold','FiraSans-BoldItalic', 'FiraSans-Book','FiraSans-BookItalic','FiraSans-Eight','FiraSans-ExtraLightItalic','FiraSans-EightItalic','FiraSans-ExtraBold','FiraSans-ExtraBoldItalic','FiraSans-ExtraLight','FiraSans-ExtraLightItalic','FiraSans-Four','FiraSans-FourItalic','FiraSans-Hair','FiraSans-HairItalic','FiraSans-Heavy','FiraSans-HeavyItalic','FiraSans-Italic','FiraSans-Light', ,'FiraSans-LightItalic','FiraSans-Medium','FiraSans-MediumItalic','FiraSans-Regular','FiraSans-SemiBold','FiraSans-SemiBoldItalic','FiraSans-Thin','FiraSans-ThinItalic','FiraSans-Two','FiraSans-TwoItalic','FiraSans-Ultra','FiraSans-UltraItalic','FiraSans-UltraLight','FiraSans-UltraLightItalic'
        ]

    });
    $(".description").summernote({

        fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'FiraSans-ExtraLight','FiraSansBlack',
            'FiraSansBold','FiraSansBoldItalic','FiraSansBook','FiraSansBookItalic','FiraSansEight','FiraSansEightItalic','FiraSans-ExtraBold',
            'FiraSansBold','FiraSans-ExtraBoldItalic','FiraSans-ExtraLight','FiraSans-ExtraLightItalic','FiraSansBold','FiraSans-BoldItalic', 'FiraSans-Book','FiraSans-BookItalic','FiraSans-Eight','FiraSans-ExtraLightItalic','FiraSans-EightItalic','FiraSans-ExtraBold','FiraSans-ExtraBoldItalic','FiraSans-ExtraLight','FiraSans-ExtraLightItalic','FiraSans-Four','FiraSans-FourItalic','FiraSans-Hair','FiraSans-HairItalic','FiraSans-Heavy','FiraSans-HeavyItalic','FiraSans-Italic','FiraSans-Light','FiraSans-LightItalic','FiraSans-Medium','FiraSans-MediumItalic','FiraSans-Regular'
            ,'FiraSans-SemiBold','FiraSans-SemiBoldItalic','FiraSans-Thin','FiraSans-ThinItalic','FiraSans-Two','FiraSans-TwoItalic','FiraSans-Ultra','FiraSans-UltraItalic','FiraSans-UltraLight','FiraSans-UltraLightItalic'
        ],
        fontNamesIgnoreCheck: ['FiraSans-ExtraLight','FiraSansBlack','FiraSansBold','FiraSansBoldItalic','FiraSansBook','FiraSansBookItalic','FiraSansEight','FiraSansEightItalic','FiraSans-ExtraBold',
            'FiraSansBold','FiraSans-ExtraBoldItalic','FiraSans-ExtraLight','FiraSans-ExtraLightItalic','FiraSansBold','FiraSans-BoldItalic', 'FiraSans-Book','FiraSans-BookItalic','FiraSans-Eight','FiraSans-ExtraLightItalic','FiraSans-EightItalic','FiraSans-ExtraBold','FiraSans-ExtraBoldItalic','FiraSans-ExtraLight','FiraSans-ExtraLightItalic','FiraSans-Four','FiraSans-FourItalic','FiraSans-Hair','FiraSans-HairItalic','FiraSans-Heavy','FiraSans-HeavyItalic','FiraSans-Italic','FiraSans-Light', ,'FiraSans-LightItalic','FiraSans-Medium','FiraSans-MediumItalic','FiraSans-Regular','FiraSans-SemiBold','FiraSans-SemiBoldItalic','FiraSans-Thin','FiraSans-ThinItalic','FiraSans-Two','FiraSans-TwoItalic','FiraSans-Ultra','FiraSans-UltraItalic','FiraSans-UltraLight','FiraSans-UltraLightItalic'
        ]
    });
});


$(function () {
    $('.select-layout').selectpicker();

});

$(".select-layout").on("change",function () {
    var selectedOption = $(".select-layout option:selected");
    var layout_id = selectedOption.attr('data-layout');
    $('.layout_id').val(layout_id);
});

var notValideImage = true;

function loadImage(event) {

    var valInputImage  = event.target.value;
    var nameInputImage = event.target.name;
    $('.manipulate-'+nameInputImage+'').show();
    $('#upload-error').hide();

    if (!valInputImage.match(/(?:gif|jpg|png|bmp|jpeg)$/)) {
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
            if(!this.value && this.name!='youtube'){
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

$('.container-fluid').addClass('added-class');
$('.wrapper').addClass('added-class');

