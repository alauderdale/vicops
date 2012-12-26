jQuery(document).ready(function($) {

    $(function() {
        $( "#accordion" ).accordion({
            heightStyle: "content"
        });
    });


    var hash = window.location.hash.substr(1);
    var href = $('a.bio').each(function(){
        var href = $(this).attr('href');
        if(hash==href.substr(0,href.length-5)){
            var toLoad = hash+'.html #content';
            $('#content').load(toLoad)
        }                                           
    });

    $('a.bio').click(function(){  
        $('.content-wrap').slideDown('fast');
        $('a.bio').parent().removeClass('active-person');
        $(this).parent().addClass('active-person');

        var toLoad = $(this).attr('href')+' #content';
        $('#content').fadeOut('slow',loadContent);
        $('#load').remove();
        $('#load').show('normal');
        window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-5);
        function loadContent() {
            $('#content').load(toLoad,'',showNewContent())
        }
        function showNewContent() {
            $('#content').fadeIn(1300,hideLoader());
        }
        function hideLoader() {
            $('#load').fadeOut('slow');
        }
        return false;

    });

});