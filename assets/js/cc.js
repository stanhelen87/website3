    $(function () {
        $("body").on('click', '.cc_more_info', function(event){
            $('.cc_container .cc-txt-hide').show();
        });
        $("body").on('click', '.cc_container .cc-txt-hide span', function(event){
            $('.cc_container .cc-txt-hide').hide();
        });
    });