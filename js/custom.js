jQuery(document).ready(function($) {
$('.sign-process li a').click(function() {
	 $(this).parent().addClass('listed-border').siblings().removeClass('listed-border');
});
$('.signin-collapse').click(function() {
$('#sign-up-window').collapse('hide');
});
$('.signup-collapse').click(function() {
$('#sign-in-window').collapse('hide');
});
$("input[name='search']").keyup(function() {
    $(this).val($(this).val().replace(/^(\d{3})(\d{3})(\d)+$/, "($1)$2-$3"));
});

//NSI VERIFIED PROFILE

	$('.nsi-mainbox').click(function(){
	    $(this).find('.nsi-inner').toggle();
	    $('.nsi-title img').toggleClass('im-rot');
	    $('.nsi-review-tab').css('border','none');
	});

// For dropdown Menu

	$('.nsi-dropdown').click(function(){
			$('.nsi-profile-icn-drop').toggle(function () {
		   	$(this).show();
		});
	});

	$('#mytab a:first').tab('show');

// Top Header search bar

	$('.search-top-input').click(function(){
		$('.close-icon').show();
	});

	$('.search-top-input').keydown(function(){
		$('.search-icon img').attr('src','img/icons/back_dark.svg').addClass('putc');
	});

	$('.close-icon img').click(function(){
		$('.search-top-input').val('');
		$('.search-icon img').attr('src','img/icons/search.svg').removeClass();
	});

// Top Header Result bar

	$('.result-left').click(function(){
		$('.res-root').show();
		$('.result-filter').attr('src','img/icons/filter_light_btn_active.svg')
	});

	$('#result-right').click(function(){
		$('.res-root').hide();
		$('.result-filter').attr('src','img/icons/filter_light_btn.svg');
	});

// Primary user Profile creation 

	$('.primry-creatn-clickim .primry-changeimg').click(function(){
		$(this).attr('src','img/icons/switch_light_active.svg');
	});

	$('.profile-confm').click(function(){
		$(this).attr('src','img/icons/switch_light_active.svg');
	});

// Sidebar Menu
	
    var trigger = $('.hamburger'),
    overlay = $('.overlay'),
    isClosed = false;

    function buttonSwitch() {

        if (isClosed === true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    trigger.click(function () {
        buttonSwitch();
    });

    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper1').toggleClass('toggled');
    });


    $('#add-areview').click(function(){
		$('#tab-review').hide();
		$('#tab-alert').show(); 
	});

	$('#add-areview2').click(function(){
		$('#tab-review').show();
		$('#tab-alert').hide();
		$(this).css('color','#dcd6d6');
	});

});


jQuery(document).ready(function($) {
$('#searchMember').keyup(function() {
	$('#result-containter').html('');
	 var searchKeyword=$(this).val();
	 if(searchKeyword!=''){
	  $.post(baseurl+"searchMemberData",
    {
        s_keyword: searchKeyword
       },
    function(data, status){
		jresult=jQuery.parseJSON(data);
		if(jresult.status){
			$('#result-containter').html(jresult.result);
		}
    });
	 }
});

$('#cross-search').click(function(){
	$('#result-containter').html('');
});

});