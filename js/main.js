$(".city-select").hide();
$(".model-select").hide();
$(function(){
    $('#country').change(function() {
        $(".city-select").show();
        var code = $("#country").val();
<<<<<<< HEAD:js/main.js
        $.post( "../index.php", {code: code},function(data) {
=======
        $.post( "../subtype.php", {code: code},function(data) {
>>>>>>> master:js/main.js
            wrOption(data, '#city', '.city-select');
        });
    });

});
$(function(){

    $('#city').change(function() {
        $(".model-select").show();
        var lol = $("#city").val();
<<<<<<< HEAD:js/main.js
        $.post('../index.php', {lol: lol}, function(data) {
=======
        $.post('../prod.php', {lol: lol}, function(data) {
>>>>>>> master:js/main.js
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