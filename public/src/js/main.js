(function(window, document, $) {
	
	$('.main-header-menu').on('click', function(e){
		$('.main-header-menu-list').slideToggle();
		return false;
	});

	$('.profile-advanced-search').on('click', function(){
		var $icon = $('.profile-advanced-search .fa');
		if($icon.hasClass('fa-sort-desc')){
			$icon.removeClass('fa-sort-desc').addClass('fa-sort-asc');
		}else {
			$icon.removeClass('fa-sort-asc').addClass('fa-sort-desc');
		}
		$('.profile-search-adv').slideToggle();
		return false;
	});


	function footerPosition (bodyHeight, windowHeight) {
		if((windowHeight-20) > bodyHeight){
			$('.main-footer').css('position', 'absolute').css('bottom', 0);
		}else{
			$('.main-footer').css('position', 'static').css('margin-top', '50px');
		}
	}
	footerPosition($('body').height(),$(window).height());
	$(window).resize(function(){
		footerPosition($('body').height(),$(window).height());
	});

}(this, this.document, this.jQuery));