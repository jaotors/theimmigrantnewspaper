$(window).load(function () {
    $(document).ready(function(){
    	var ResponsiveNav = {
			ulelem:{},
    		init:function(ul, menuicon, subicon){
    			Snp.ResponsiveNav.ulelem = ul;
				$(subicon).on('click',Snp.ResponsiveNav.submenuclick);
				$(menuicon).on('click',Snp.ResponsiveNav.menuclick);
    			enquire.register("screen and (min-width: 40.063em)", {
				    match : function() {
			        	$(subicon).closest('li').children('ul').removeClass('ul-active');
			        	$(ul).children('li').not($(menuicon).parent()).show();
				    }
				});

				enquire.register("screen and (max-width: 40.062em)", {
				    match : function() {
			        	$(ul).children('li').not($(menuicon).parent()).hide();
				    }
				});
    		},
    		submenuclick:function(e){
    			Snp.ResponsiveNav.ulelem.find('ul').not($(this).closest('li').children('ul')).removeClass('ul-active');
    			$(this).closest('li').children('ul').toggleClass('ul-active');
    		},
    		menuclick:function(){
    			$(this).closest('li').nextAll().slideToggle(300);
    		}
    	}

    	window.Snp || (window.Snp = {});
	    Snp.ResponsiveNav = ResponsiveNav;

	    Snp.ResponsiveNav.init($('.responsenav'),$('.navigation-icon'),$('.submenu-icon'));
	});
});