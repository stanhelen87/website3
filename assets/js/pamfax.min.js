jQuery( function () {
      
    //_________________________________ open-close main menu (nav) on resolution < 992px _______________________________
    $('.btn-view-nav').bind('touchstart click', function(e) {
        e.preventDefault();
        $('header nav').slideToggle();
    }); 
    $(window).resize(function () {
        var x = document.body.offsetWidth;
        if (x >= 993) {
            $('header nav').css("display", "block");
        }
        else{
            $('header nav').css("display", "none");
        }
    });
    $("header .btn-close-nav").bind('touchstart click', function(e) {
        e.preventDefault();
        $('header nav').slideUp();
    });


    //_________________________________ page packs ,  mobile resolution _______________________________
    jQuery(window).on('scroll', function(){
        var pageY = window.pageYOffset || document.documentElement.scrollTop;
        var endScrollTable = $(".plans_buy").offset().top;
        var endScroll = endScrollTable - 200;
  
        if ( pageY >= 480 && pageY <= endScroll ){  
            jQuery('.control_carusel_plans, .caption_plans_mobile').css({'position' : 'fixed'});
            jQuery('.caption_plans_mobile').css({'display' : 'block'});
        }
        else {
            jQuery('.control_carusel_plans').css({'position' : 'absolute'});
            jQuery('.caption_plans_mobile').css({'display' : 'none'});

        }
    });





    //_________________________________ page plans ,  mobile resolution, carousel _______________________________
    jQuery(window).resize(function () {
        resizeCarousel('carousel-table-plans');
    });

    resizeCarousel('carousel-table-plans');

    function resizeCarousel(objName) {
        var t_size = window.innerWidth;
        var t_result = false;

        if (t_size >= 1200) {
            //LG devices
            t_result = arrangeCarousel(jQuery('#' + objName), 3);
        } else if (t_size >= 992 && t_size < 1200) {
            //MD devices
            t_result = arrangeCarousel(jQuery('#' + objName), 3);
        }
        else if (t_size >= 768 && t_size < 992) {
            //SM devices
            t_result = arrangeCarousel(jQuery('#' + objName), 3);
        }
        else {
            //XS devices
            t_result = arrangeCarousel(jQuery('#' + objName), 1);
        }

        if (t_result == true) {
            jQuery('#' + objName).carousel({
                interval: false
            });

            jQuery('#' + objName).carousel('pause');
        }
    }


    function arrangeCarousel(obj, numItems) {
        //carousel-inner
        var t_objInner = obj.find('.carousel-inner');

        if (t_objInner == undefined)
            return false;

        var t_numItems = t_objInner.attr('data-size');

        if (t_numItems == numItems)
            return false;

        t_objInner.attr('data-size', numItems);

        var t_itemColSize = 'col-';

        switch (numItems) {
            case 4: t_itemColSize += 'lg-4'; break;
            case 3: t_itemColSize += 'sm-4'; break;
           // case 2: t_itemColSize += 'sm-4'; break;
            case 1: t_itemColSize += 'xs-12'; break;
        }

        jQuery(".carousel-inner").find("div[data-type='product-table-cell']").removeClass('col-lg-4');
        jQuery(".carousel-inner").find("div[data-type='product-table-cell']").removeClass('col-md-4');
        jQuery(".carousel-inner").find("div[data-type='product-table-cell']").removeClass('col-sm-4');
        jQuery(".carousel-inner").find("div[data-type='product-table-cell']").removeClass('col-xs-12');

        jQuery(".carousel-inner").find("div[data-type='product-table-cell']").addClass(t_itemColSize);

        var t_itemsList = jQuery(".carousel-inner").find("div[data-type='product-table-cell']");

        t_objInner.empty();

        var slideCount = 0;
        var slidesText = '';

        for (var i = 0; i < t_itemsList.length; i++) {
            if (i == 0) {
                slidesText += "<div class='item active'>\n";
            } else {
                if (slideCount > 0) {
                    if (i == (slideCount * numItems))
                        slidesText += "<div class='item'>\n";
                }
            }

            slidesText += t_itemsList[i].outerHTML;
            slidesText += "\n";

            if ((i + 1) % numItems == 0) {
                slidesText += "</div>\n</div>";
                slideCount++;
            }
        }

        t_objInner.append(slidesText);

        return true;
    }


    //_________________________________ mobile resolution   (footer, page rates, page credit packs)    _______________________________
    function forRatesMobile()
    {
        var x = document.body.offsetWidth;

        if (x < 768) {
            jQuery('.read_more').css('display','none');
            jQuery('.footer-menu').css('display','none');
            jQuery('.credit, .carousel-add').addClass('carousel-inner');
        }
        else {
            jQuery('.read_more').css('display','block');
            jQuery('.footer-menu').css('display','block');
            jQuery('.credit, .carousel-add').removeClass('carousel-inner');
        }
    }

    jQuery(window).resize(function () {
        forRatesMobile();
    });

    forRatesMobile();
  
    jQuery('.read_more_btn').bind('touchstart click', function(e) {
        e.preventDefault();

        jQuery(this).next('.read_more').slideToggle("300", function () {
            jQuery('.glyphicon').toggleClass('arrow-up');
        });
    });


    // ______________________ sublist  toogle  in  nav    ______________________
    jQuery('.menu-item-has-children > a').attr('data-toggle', 'dropdown' ).attr('href', '#');
    jQuery('.menu-item-has-children ul').addClass('dropdown-menu');

    
    // ______________________ toogle main nav for resolutions < 992 px ______________________
    jQuery('#touch-menu').bind('touchstart click', function(e) {
        e.preventDefault();
        jQuery('nav ul.nav').slideToggle();
    }); 


    
    // ______________________ toogle footer menu for resolutions < 768 px ______________________
    jQuery('#touch-footer-menu').bind('touchstart click', function(e) {
        e.preventDefault();
        jQuery('.footer-menu').slideToggle();
        jQuery("html, body").animate({ scrollTop:  jQuery(document).height()}, 1000);
    })

    jQuery('.footer-menu a').bind('touchstart click', function(e) {
        var footerLink =  jQuery(this).html();
        jQuery("#touch-footer-menu").html(footerLink);
    });


    // _________ movement of social icons for resolutions < 768 px ______________
    var footerSocialsIcons =  jQuery(".footer-socials").html();

    function socialsIcons() {
        var x = document.body.offsetWidth;

        if (x < 767){
            jQuery(".footer-socials").empty();
            jQuery(".socials").html(footerSocialsIcons);
        }
        else{
            jQuery(".footer-socials").html(footerSocialsIcons);
            jQuery(".socials").empty();
        }
    }

    socialsIcons();

    jQuery(window).resize(function () {
        socialsIcons();
    });

  
    jQuery( '#search_sity_mobile' ).on( 'click', function() {
        SearchCityMobile();
    });

    jQuery( "#search_city" ).on( "click", function() {
        SearchCityNormal();
    });

    jQuery( '.ui-autocomplete' ).on( 'click', function() {

        var tsDisplayMob = jQuery( '#faxNumberModal' ).css( 'display' );

        if( tsDisplayMob !== 'none' )
            SearchCityNormal();
        else
            SearchCityMobile();
    });

	jQuery('.content').on( 'change', '#states_usa', function(){
		ShowCities( jQuery( this ).attr( 'data-name' ), jQuery( this ).attr( 'data-prefix' ), 'US', jQuery( this ).val() );
	});

	jQuery('.states-mobile').on( 'change', '#states_usa_mobile', function(){
		jQuery( '#search_city_mobile' ).val('');
		ShowCities( jQuery( this ).attr( 'data-name' ), jQuery( this ).attr( 'data-prefix' ), 'US', jQuery( this ).val() );
	});

	jQuery('.fax_number_mobile_container').on( 'change', '#country_mobile', function(){

		jQuery( '#search_city_mobile' ).val('');

		if( jQuery( this ).val() == 'US' )
			jQuery( '.states-mobile' ).css( 'display', 'block' );
		else
			jQuery( '.states-mobile' ).css( 'display', 'none' );

		ShowCities( jQuery( '#country_mobile option:selected' ).text(),jQuery( '#country_mobile option:selected' ).attr( 'data-prefix' ), jQuery( this ).val() );
    });
});


function ShowCities( asCountry, aiNumber, asCode, asState )
{
	jQuery( "#autocomplete" ).val('');

	if( asCode === 'US' )
    {
		jQuery('.states').css( "display", "inline-block" );

		if( typeof( asState ) == 'undefined' )
			asState = 'General';
	}
	else
    {
		jQuery('.states').css( "display", "none" );
	}

	jQuery( '#faxNumberModal .item_fax_number').html('');
	jQuery( '#codes_country ul.fax_number' ).html('');
	jQuery( '#cities_mobile .city_fax_number' ).html('');

	jQuery( '<span>' )
			.attr( 'class', 'flag_standalone ' + asCode )
			.appendTo( '#faxNumberModal .item_fax_number' );

	jQuery( '<a>' )
			.attr( 'href', '#' )
			.html( asCountry )
			.appendTo( '#faxNumberModal .item_fax_number' );

	jQuery( '<strong>(+'+ aiNumber +'...)</strong>' ).appendTo( '#faxNumberModal .item_fax_number' );

	jQuery.ajax({
		url: "/pc-ajax.php?action=pc_list_fax_in_areacodes",
		dataType: 'json',
		type: 'post',
		beforeSend: function(){
            jQuery('#loading').remove();
		    jQuery('#codes_country h3').after('<div id="loading" ><img src="/assets/img/loading.gif"></div>');
		},
		data: {
			'country_code': asCode,
			'state': asState
		},
		success: function(response){

            if ( response.result === 'OK' )
            {
                jQuery('#loading').remove();

                var toRes       = response.res;
                var tiCities    = toRes.AreaCodes.content.length;

                if( tiCities === 0)
                {
                    jQuery( '#faxNumberModal' ).modal( 'hide' );
                }
                else
                {
                    jQuery( '<li>' )
                        .addClass( 'col-md-6' )
                        .append( '<ul id="left_cities_ul">' )
                        .appendTo( '#codes_country ul.fax_number' );

                    jQuery( '<li>' )
                        .addClass( 'col-md-6' )
                        .append( '<ul id="right_cities_ul">' )
                        .appendTo( '#codes_country ul.fax_number' );

                    for( var i = 0; i < tiCities; i++ )
                    {
                        var toLi = jQuery( '<li>' )
                                .attr( 'onclick', 'SendCity(\'' + asCode + '\', ' + toRes.AreaCodes.content[i].id + ', \'' + asState + '\')' )
                                .append( '<a href="#">'+toRes.AreaCodes.content[i].city+'</a>' )
                                .append( '<strong>(+' + aiNumber + ' ' + toRes.AreaCodes.content[i].areacode + '...)</strong>' );

                        if( jQuery( '.fax_number_mobile_container').css( 'display' ) === 'none' )
                        {
                            if( i < tiCities / 2 )
                                jQuery( '#left_cities_ul' ).append( toLi );
                            else
                                jQuery( '#right_cities_ul' ).append( toLi );
                        }
                        else
                        {
                            jQuery( '#cities_mobile .city_fax_number' ).append( toLi );
                        }
                    }

                    window.taWords  = [];
                    window.taLi     = [];
                    var taTextLi    = null;

                    if( jQuery( '.fax_number_mobile_container').css( 'display' ) === 'none' )
                        taTextLi = jQuery( '#codes_country .fax_number li ul li' ).toArray();
                    else
                        taTextLi = jQuery( '#cities_mobile .city_fax_number li' ).toArray();

                    var tiCountLi = taTextLi.length;

                    for( i = 0; i < tiCountLi; i++ )
                    {
                        window.taWords.push( jQuery( taTextLi[i] ).children( "a" ).text() );

                        var toLiClone = taTextLi[i].cloneNode(true);

                        window.taLi.push( toLiClone  );
                    }
                }
            }
            else
            {
                jQuery('#loading').remove();
                jQuery('#codes_country h3').after('<div id="loading" >' + response.message + '</div>');
            }
		}
	});
}


function SendCity( asCode, asAreaCode, asState )
{
  //if( typeof( asState ) == 'undefined' || asState == 'undefined' )
  //  location.href = aaParams.asShopUrl + '/?checkout=1&addtobasket=ProPlan12&countrycode=' + asCode + '&areacode=' + asAreaCode;
  //else
	//  location.href = aaParams.asShopUrl  + '/?checkout=1&addtobasket=ProPlan12&countrycode=' + asCode + '&areacode=' + asAreaCode + "&state=" + asState;

	jQuery.ajax({
		url: "/pc-ajax.php?action=pc_purchase_number",
		type: 'post',
		dataType: 'json',
		data: {
			CODE: asCode,
			AREA: asAreaCode,
			STATE: asState
		},


		beforeSend: function () {
			//$('.modal-body').append('<div class="load"><img src="/assets/img/loading.gif"></div>');
		},

		success: function (response) {
			if (response.result === 'OK') {

				////jQuery( "li[name=user_menu_top_bar]").html(response.menu);
				//$('#loginModal').modal('hide');
				//$('.load').remove();

				window.location.href = response.link;
			}
			else {
				//var divError = $("form#form_login > div.error_enter_message");

				//$(divError).children('b').html(response.title);
				//$(divError).children('p').html(response.message);

				//$(divError).show();
				//$('.load').remove();
			}
		}
	});
}

function SearchCityNormal(){
	tsSearch  = jQuery( '#autocomplete' ).val();
	jQuery( '#left_cities_ul' ).html('');
	jQuery( '#right_cities_ul' ).html('');

	taFound = [];
	tiCountLi = window.taLi.length;
	if( tsSearch === "" ) {
		for( i = 0; i < tiCountLi; i++ ) {
			toLi = window.taLi[i].cloneNode(true);
			if( i < tiCountLi / 2 )
				jQuery( '#left_cities_ul' ).append( toLi );
			else
				jQuery( '#right_cities_ul' ).append( toLi );
		}
		return;
	}
	var matcher = new RegExp( "^" + tsSearch, "i" );
	for( i = 0; i < tiCountLi; i++ ) {
		if( matcher.test( jQuery( window.taLi[i] ).text() ) ) {
			toLiClone = window.taLi[i].cloneNode(true);
			taFound.push( toLiClone );
		}
	}
	tiResults = taFound.length;
	if( tiResults > 0 ) {
		for( i = 0; i < tiResults; i++ ) {
			if( i < tiResults / 2 )
				jQuery( '#left_cities_ul' ).append( taFound[i] );
			else
				jQuery( '#right_cities_ul' ).append( taFound[i] );
		}
	}
	else {
		jQuery( '#left_cities_ul' ).html("Not found!");
	}
}

function SearchCityMobile() {
	if( typeof( window.taLi )== 'undefined' )
		return;
	tsSearch  = jQuery( '#search_city_mobile' ).val();
	jQuery( '#cities_mobile .city_fax_number' ).html('');
	taFound = [];
	tiCountLi = window.taLi.length;
	if( tsSearch === "" ) {
		for( i = 0; i < tiCountLi; i++ ) {
			toLi = window.taLi[i].cloneNode(true);
			jQuery( '#cities_mobile .city_fax_number' ).append( toLi );
		}
		return;
	}
	var matcher = new RegExp( "^" + tsSearch, "i" );
	for( i = 0; i < tiCountLi; i++ ) {
		if( matcher.test( jQuery( window.taLi[i] ).text() ) ){
			toLiClone = window.taLi[i].cloneNode(true);
			taFound.push( toLiClone );
		}
	}
	tiResults = taFound.length;
	if( tiResults > 0 ) {
		for( i = 0; i < tiResults; i++ ) {
			jQuery( '#cities_mobile .city_fax_number' ).append( taFound[i] );
		}
	}
	else {
		jQuery( '#cities_mobile .city_fax_number' ).html( 'Not found!' );
	}
}



