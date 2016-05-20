
$(function() {

    jQuery('.error_enter_message a').bind('touchstart click', function(e) {
        e.preventDefault();
        jQuery('.error_enter_message').slideUp();
    });

    jQuery('.help_text').bind('touchstart click', function(e) {
        e.preventDefault();
        jQuery('p', this).slideToggle();
    });

    $( "form#form_login > input#btn_login" ).click(function() {

        var login       = $("form#form_login > input#UserLogin").val();
        var password    = $("form#form_login > input#UserPassword").val();
        var rem_me      = $("form#form_login > input#remember_pass").is(':checked');
        $("form#form_login > div.error_enter_message").hide();

        jQuery.ajax({
            url: "/pc-ajax.php?action=pc_login_user",
            type: 'post',
            dataType: 'json',
            data: {
                LOGIN:      login,
                PASSWORD:   password,
                REM_ME:     rem_me
            },


            beforeSend: function(){
                $('.modal-body').append('<div class="load"><img src="/assets/img/loading.gif"></div>');
            },

            success: function(response)
            {
                if ( response.result === 'OK' ){

                    //jQuery( "li[name=user_menu_top_bar]").html(response.menu);
                    $('#loginModal').modal('hide');
                    $('.load').remove();

                    window.location.href = response.link;
                }
                else
                {
                    var divError = $("form#form_login > div.error_enter_message");

                    $(divError).children('b').html(response.title);
                    $(divError).children('p').html(response.message);

                    $(divError).show();
                    $('.load').remove();
                }
            }
        });
    });

    $( "div[name=modal_form_login] > div.modal-footer > p > a" ).click(function() {

        $('#loginModal').modal('hide');
        $('#restorePassModal').modal('show');

    });

    $( "div[name=modal_form_register] > div.modal-footer > p > button, [data-login='show-login']" ).click(function() {

        $('#registrationModal').modal('hide');
        $('#loginModal').modal('show');

    });

    $( "form#form_register > input#btn_register" ).click(function() {

        var name            = $("form#form_register > input#UserName").val();
        var login           = $("form#form_register > input#email").val();
        var password        = $("form#form_register > input#password").val();
        var password_repeat = $("form#form_register > input#password_repeat_field").val();
        var recaptcha       = $('#g-recaptcha-response').val();
        $("form#form_register > div.error_enter_message").hide();

        jQuery.ajax({
            url: "/pc-ajax.php?action=pc_register_user",
            type: 'post',
            dataType: 'json',
            data: {
                g_recaptcha:        jQuery('#g-recaptcha-response').val(),
                NAME:               name,
                LOGIN:              login,
                PASSWORD:           password,
                PASSWORD_REPEAT:    password_repeat,
                g_recaptcha:        recaptcha
            },
            beforeSend: function(){
                //$('.modal-content').append('<div class="load"><img src="/assets/img/loading.gif"></div>');
                $("form#form_register > div.error_enter_message").parent().parent().append('<div class="load"><img src="/assets/img/loading.gif"></div>');
            },
            success: function(response)
            {

                if ( response.result === 'OK' ){
                    $('#registrationModal').modal('hide');
                    $('.load').remove();
                    $('#loginModal').modal('show');

                    var divError = $("form#form_login > div.error_enter_message");
                    $(divError).children('b').html(response.title);
                    $(divError).children('p').html(response.message);
                    $(divError).show();
                }
                else
                {
                    var divError = $("form#form_register > div.error_enter_message");
                    $(divError).children('b').html(response.title);
                    $(divError).children('p').html(response.message);
                    $(divError).show();
                    $('.load').remove();
                }
            }
        });
    });


    $( "form#form_restore > input#btn_restore" ).click(function() {

        var login = $("form#form_restore > input#UserRestore").val();
        $("form#form_restore > div.error_enter_message").hide();

        jQuery.ajax({
            url: "/pc-ajax.php?action=pc_reset_password",
            type: 'post',
            dataType: 'json',
            data: {
                LOGIN: login
            },

            beforeSend: function(){
                $('.modal-body').append('<div class="load"><img src="/assets/img/loading.gif"></div>');
            },

            success: function(response)
            {
                if ( response.result === 'OK' ){
                    $('#restorePassModal').modal('hide');
                    $('.load').remove();
                    $('#loginModal').modal('show');

                    var divError = $("form#form_login > div.error_enter_message");
                    $(divError).children('b').html(response.title);
                    $(divError).children('p').html(response.message);
                    $(divError).show();
                }
                else
                {
                    var divError = $("form#form_restore > div.error_enter_message");
                    $(divError).children('b').html(response.title);
                    $(divError).children('p').html(response.message);
                    $(divError).show();
                    $('.load').remove();
                }
            }
        });
    });

    //jQuery("li[name=user_menu_top_bar]").on( 'click', "a[name=user_logout]", function( event ){
    $("a[name=user_logout]").click(function (event) {

        event.preventDefault();

        jQuery.ajax({
            url: "/pc-ajax.php?action=pc_user_logout",
            type: 'post',
            dataType: 'json',
            success: function(response)
            {
                window.location.reload( true );
            }
        });
    });

    //jQuery("li[name=user_menu_top_bar]").on( 'click', "a[name=user_dashboard_redirect]", function( event ){
    //$("a[name=user_dashboard_redirect]").click(function (event) {

    //    event.preventDefault();

    //    jQuery.ajax({
    //      //  url: "/pc-ajax.php?action=pc_dashboard_link&base_url="+$('a[name=user_dashboard_redirect]').attr('base_url'),
    //        url: "/pc-ajax.php?action=pc_dashboard_link&href="+$('a[name=user_dashboard_redirect]').attr('href'),
    //       // url: "/pc-ajax.php?action=pc_dashboard_link",
    //        type: 'post',
    //        dataType: 'json',
    //        success: function(response)
    //        {
    //            window.location.href = response.link;
    //        }
    //    });
    //});

    if( jQuery('.cost_your_country').length > 0 )
    {
        jQuery.ajax( {
            url: "/pc-ajax.php?action=pc_list_countries_prices",
            dataType: 'json',
            type: 'post',
            beforeSend: function(){
                jQuery('section.cost > .container').append('<div id="loading"><img src="/assets/img/loading.gif"></div>');
            },
            success: function(response){

                if ( response.result === 'OK' )
                {
                    var toRes = response.res;

                    jQuery.each( toRes, function(key, countries_data) {
                        if (key == 'result')
                            return true;

                        var countriesData   = countries_data.content;
                        var onDemand        = countries_data.on_demand_formatted;
                        var priceBasic      = countries_data.price_basic_formatted;
                        var pricePro        = countries_data.price_pro_formatted;

                        if (countriesData.length == 0)
                            return true;

                        var countriesString = "";

                        jQuery.each(countriesData, function (key, countryData) {
                            if (countriesString.length > 0)
                                countriesString += ', ';

                            countriesString += countryData.translation;

                            if (countryData.code == aaParams.asCountryCode)
                            {
                                jQuery('.cost_your_country .container > p > strong').empty().append(countryData.translation);
                                jQuery('.cost_your_country .container > p > span > strong').empty().append(priceBasic);
                                jQuery('.cost_your_country').removeClass('hidden');
                                jQuery('.text-after-rates').show();
                            }
                        });

                        var toRow       = jQuery('<div>').attr('class', 'row');
                        var toCountries = jQuery('<div>').attr('class', 'cost_td cost_td-1').html(countriesString);
                        var toCostDiv   = jQuery('<div>').attr('class', 'cost_td cost_td-2');

                        jQuery('<ul>').attr('class', 'cost_price')
                            .html('<li><span></span>' + onDemand + '</li><li><span></span>' + priceBasic + '</li><li><span></span>' + pricePro + '</li>')
                            .appendTo(toCostDiv);

                        toRow.append(toCountries)
                            .append(toCostDiv)
                            .appendTo(jQuery('.page-cost-content'));
                    });

                    jQuery('#loading').remove();
                }
                else
                {
                    jQuery('#loading').remove();
                    jQuery('.row h2').after( '<div id="loading" >' + response.message + '</div>');
                }
            }
        });
    }


    jQuery('#rates_form input[type="submit"]').on( 'click', function( event ){

        event.preventDefault();

        var tsValue = jQuery('#rates_form input[type="text"]').val();

        if( tsValue === "" )
            return;

        jQuery.ajax( {
            url: "/pc-ajax.php?action=pc_get_page_price",
            dataType: 'json',
            type: 'post',
            data: {
                fax_number: tsValue
            },
            beforeSend: function(){
                jQuery('.calculate .text-center').html('<div id="loading" ><img src="/assets/img/loading.gif"></div>');
            },
            success: function(response){

                jQuery('#loading').remove();

                if ( response.result === 'OK' )
                {
                    var toRes = response.res;

                    if( toRes.result.code === "success" )
                    {
                        jQuery( '.calculate .text-center' ).html( "<p>" + toRes.PortalStrings.sending_cost_translated + "</p>").fadeIn();
                        jQuery( '.calculate .text-center a' ).attr( "href", aaParams.asPlansUrl );
                    }
                    else
                    {
                        jQuery( '.calculate .text-center' ).html( "<span style='font-weight: 700;'>" + toRes.result.message + "</span>").fadeIn().delay( 2000 ).fadeOut();
                    }
                }
                else
                {
                    jQuery( '.calculate .text-center' ).html( "<span style='font-weight: 700;'>" + response.result.message + "</span>").fadeIn().delay( 2000 ).fadeOut();
                }
            }
        });
    });



    if( jQuery('.api_register_states').length > 0 ) {

        jQuery.ajax( {
            url: "/pc-ajax.php?action=pc_get_list_countries",
            dataType: 'json',
            type: 'post',
            success: function(response){

                if ( response.result === 'OK' )
                {
                    var toRes = response.res;

                    if( toRes.result.code === "success" )
                    {
                        var tsContent = "";
                        var tiCountries = toRes.CountryList.content.length;

                        for( var i=0; i<tiCountries; i++ ){
                            var tsSelect = "";

                            if( response.visitor_country == toRes.CountryList.content[i].code )
                                tsSelect = " selected";

                            tsContent += "<option value='" + toRes.CountryList.content[i].code + "'" + tsSelect + ">" + toRes.CountryList.content[i].name + "</option>";
                        }

                        jQuery('select[name="region"]').html(tsContent);
                    }
                    else{
                        jQuery( '.span_error' ).remove();

                        jQuery( "<span class='span_error'>" )
                            .html( toRes.result.message )
                            .after('<br/>')
                            .prependTo( jQuery( '.form_on_page' ) )
                            .fadeIn().delay( 2000 ).fadeOut();
                    }
                }
                else
                {
                    jQuery( "<span class='span_error'>" )
                        .html( response.result.message )
                        .after('<br/>')
                        .prependTo( jQuery( '.form_on_page' ) )
                        .fadeIn().delay( 2000 ).fadeOut();
                }
            }
        });

        jQuery.ajax( {
            url: "/pc-ajax.php?action=pc_list_fax_in_countries",
            dataType: 'json',
            type: 'post',
            success: function(response){
                if ( response.result === 'OK' )
                {
                    var toRes = response.res;

                    if( toRes.result.code === "success" ) {

                        var tsContent = "";
                        var tiStates = toRes.FaxInStates.content.Country.content.length;

                        for( var i = 0; i < tiStates; i++ ) {

                            if( toRes.FaxInStates.content.Country.content[i].code.length > 2 )
                                continue;

                            tsContent += "<option value='" + toRes.FaxInStates.content.Country.content[i].code + "'>" + toRes.FaxInStates.content.Country.content[i].name + "</option>";
                        }

                        jQuery('select[name="state"]').html(tsContent);

                        if( jQuery('select[name="region"]').val() === "US" )
                            jQuery( '.api_register_states' ).css( 'display', 'block' );
                    }
                    else{
                        jQuery( '.span_error' ).remove();

                        jQuery( "<span class='span_error'>" )
                            .html( toRes.result.message )
                            .after('<br/>')
                            .prependTo( jQuery( '.form_on_page' ) )
                            .fadeIn().delay( 2000 ).fadeOut();
                    }
                }
                else
                {
                    jQuery( "<span class='span_error'>" )
                        .html( response.result.message )
                        .after('<br/>')
                        .prependTo( jQuery( '.form_on_page' ) )
                        .fadeIn().delay( 2000 ).fadeOut();
                }
            }
        });

        jQuery('select[name="region"]').on( 'change', function(){
            if( jQuery('select[name="region"]').val() === "US" )
                jQuery( '.api_register_states' ).css( 'display', 'block' );
            else
                jQuery( '.api_register_states' ).css( 'display', 'none' );
        });

        jQuery( "form.pamfax_form > div > input#btn_register_api_user" ).on( 'click', function(){

            var tsValidate = 'ok';

            var firstname_api   = jQuery( '#firstname_api' ).val();
            var lastname_api    = jQuery( '#lastname_api' ).val();
            var companysize     = jQuery( 'select[name="companysize"]' ).val();
            var email_api       = jQuery( '#email_api' ).val();
            var address_api     = jQuery( '#address_api' ).val();
            var zip_api         = jQuery( '#zip_api' ).val();
            var company_api     = jQuery( '#company_api' ).val();
            var city_api        = jQuery( '#city_api' ).val();
            var region          = jQuery( 'select[name="region"]' ).val();
            var productname_api = jQuery( '#productname_api' ).val();
            var description_api = jQuery( '#description_api' ).val();
            var volume          = jQuery( 'select[name="volume"]' ).val();
            var state           = jQuery( 'select[name="state"]' ).val();
            var terms           = jQuery( '#terms_api' ).is(':checked');

            if( firstname_api === "" || lastname_api === "" || companysize === "" || email_api === "" ||
                address_api === "" || zip_api === "" || company_api === "" || city_api === "" ||
                region === "" || productname_api === "" || description_api === "" || volume === "" )
            {
                tsValidate = aaParams.asEmptyData;
            }
            else if( jQuery( '#description_api' ).val().length < 50 ){
                tsValidate = aaParams.asShortDescription;
            }
            else if( !terms ){
                tsValidate = aaParams.asTermsAccept;
            }
            else if( jQuery('#g-recaptcha-response').val() == '' ){
                tsValidate = aaParams.asRecaptha;
            }
            else {
                tsValidate = "ok";
            }

            if( tsValidate != "ok" )
            {
                jQuery( '.span_error' ).remove();

                var tsSpanErr = jQuery( "<span class='span_error'>" )
                    .html( tsValidate )
                    .after('<br/>')
                    .fadeIn().delay( 4000 ).fadeOut();

                jQuery( '.g-recaptcha' ).after( tsSpanErr );
            }
            else
            {
                jQuery.ajax( {
                    url: "/pc-ajax.php?action=pc_register_new_api_user",
                    dataType: 'json',
                    type: 'post',
                    data: {
                        g_recaptcha: jQuery('#g-recaptcha-response').val(),
                        firstname : firstname_api,
                        lastname : lastname_api,
                        companysize : companysize,
                        email : email_api,
                        address1 : address_api,
                        zip : zip_api,
                        city : city_api,
                        company : company_api,
                        state : state,
                        terms : terms,
                        region : region,
                        productname : productname_api,
                        description : description_api,
                        volume : volume
                    },
                    beforeSend: function(){
                        jQuery( '#loading' ).remove();
                        jQuery( '#btn_register_api_user' ).after( '<div id="loading" ><img src="/assets/img/loading.gif"></div>' );
                    },
                    success: function(response){

                        jQuery('#loading').remove();

                        if ( response.result === 'OK' )
                        {
                            var toRes = response.res;

                            if( toRes.result.code === "success" )
                            {
                                console.log(toRes);
                                jQuery( '.calculate .text-center' ).html( "<p>" + toRes.PortalStrings.sending_cost_translated + "</p>").fadeIn();
                                jQuery( '.calculate .text-center a' ).attr( "href", aaParams.asPlansUrl );
                            }
                            else
                            {
                                jQuery( '.calculate .text-center' ).html( "<span style='font-weight: 700;'>" + toRes.result.message + "</span>").fadeIn().delay( 2000 ).fadeOut();
                            }
                        }
                        else
                        {
                            jQuery( '.span_error' ).remove();

                            var tsSpanErr = jQuery( "<span class='span_error'>" )
                                .html( response.message )
                                .after('<br/>');

                            jQuery( '.g-recaptcha' ).after( tsSpanErr );
                        }
                    }
                });
            }
        });

    }
});


jQuery(window).load( function (){

    if( jQuery('#a_download_for_windows').length !== 0 )
        window.location = 'http://download.pamfax.biz/PamFaxInstaller.exe';

    if ( jQuery( 'div' ).is( '#country_number' ) ) {
        jQuery.ajax({
            url: "/pc-ajax.php?action=pc_list_fax_in_countries",
            dataType: 'json',
            type: 'post',
            beforeSend: function(){
                jQuery('.row h2').after('<div id="loading" ><img src="/assets/img/loading.gif"></div>');
            },
            success: function(response){

                if ( response.result === 'OK' )
                {
                    var toRes = response.res;

                    var tiCountries = toRes.FaxInCountries.content.length;
                    jQuery( '#count_all_countries' ).html( tiCountries );

                    var taColumns = jQuery('#country_number ul').toArray();
                    jQuery('#loading').remove();

                    if( tiCountries > 0) {
                        var tiColumns  = taColumns.length;
                        var tiRest     = tiCountries % tiColumns;
                        var tiInCol    = Math.floor( tiCountries / tiColumns );
                        var taInCol    = [];

                        for( i=0; i < tiColumns; i++ ) {
                            if( i < tiRest )
                                taInCol.push( tiInCol + 1 );
                            else
                                taInCol.push( tiInCol );
                        }

                        for( i=0, row=0; row < tiColumns; row++ ) {
                            for( k = 0; k < taInCol[row]; i++, k++ ) {
                                var toLi = jQuery( '<li>' );
                                toLi.append( '<span class="flag_standalone ' + toRes.FaxInCountries.content[i].code + '"></span>' );

                                jQuery( '<a>' )
                                    .attr( 'href', '#' )
                                    .attr( 'data-toggle', 'modal' )
                                    .attr( 'data-target', '#faxNumberModal' )
                                    .attr( 'onclick', 'javascript:ShowCities(\'' + toRes.FaxInCountries.content[i].name + '\', ' + toRes.FaxInCountries.content[i].prefix + ', \'' + toRes.FaxInCountries.content[i].code + '\')' )
                                    .html( toRes.FaxInCountries.content[i].name )
                                    .appendTo( toLi );

                                toLi.append( '<strong>(+'+ toRes.FaxInCountries.content[i].prefix +'...)</strong>' );
                                jQuery( taColumns[row] ).append( toLi );

                                var toOption = jQuery( '<option>' )
                                    .attr( 'value', toRes.FaxInCountries.content[i].code )
                                    .attr( 'data-prefix', toRes.FaxInCountries.content[i].prefix )
                                    .append( '<span class="flag_standalone ' + toRes.FaxInCountries.content[i].code +'"></span>' + toRes.FaxInCountries.content[i].name )
                                    .append( '<strong> (+'+ toRes.FaxInCountries.content[i].prefix +'...)</strong>' );

                                jQuery('#country_mobile').append( toOption );

                                //bad
                                if( toRes.FaxInCountries.content[i].code === "US" ){
                                    jQuery('select[id^="states_usa"]')
                                        .attr( 'data-name', toRes.FaxInCountries.content[i].name )
                                        .attr( 'data-prefix', toRes.FaxInCountries.content[i].prefix );
                                }
                            }
                        }

                        var tiStates = toRes.FaxInStates.content.Country.content.length;

                        for( var i = 0; i < tiStates; i++ ) {
                            jQuery( '<option>' )
                                .attr( 'value', toRes.FaxInStates.content.Country.content[i].code )
                                .html( toRes.FaxInStates.content.Country.content[i].name )
                                .appendTo( jQuery('select[id^="states_usa"]') );
                        }
                    }
                }
                else
                {
                    jQuery('#loading').remove();
                    jQuery('.row h2').after( '<div id="loading" >' + response.message + '</div>');
                }
            }
        });
    }
});

