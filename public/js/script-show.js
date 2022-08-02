$(document).ready(function(){
    $('#Jternak').on('change', function(){
        $(".data").hide();
        $("#" + $(this).val()).fadeIn(700);
    }).change();
});

$(document).ready(function(){
    $('#kategori').on('change', function(){
        $(".data-kategori").hide();
        $("#" + $(this).val()).fadeIn(700);
    }).change();
});
