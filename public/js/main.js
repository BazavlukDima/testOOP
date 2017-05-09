$(".city-select").hide();
$(".model-select").hide();
$(function(){
    $('#country').change(function() {
        $(".city-select").show();
        var code = $("#country").val();
        $.post( "actions/getSubtype.php", {code: code},function(data) {
            wrOption(data, '#city', '.city-select');
        });
    });

});
$(function(){

    $('#city').change(function() {
        $(".model-select").show();
        var code = $("#city").val();
        $.post('actions/getModels.php', {code: code}, function(data) {
            wrOption(data, '#model', '.model-select');
        });

    });

});
function wrOption(data, Wher, classToShow) {
          var obj = $.parseJSON(data);
          $.each(obj, function(key, val) 
          {
            $(Wher).append( "<option value='" + key + "'>" + val + "</option>" );
          });
          $(classToShow).fadeIn('slow');
};