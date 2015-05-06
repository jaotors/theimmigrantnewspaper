$(window).load(function () {
    $(document).ready(function(){
		var Core = {
				settings:{
					version:'1.0'
				},
				common:{
					ConfirmBox : function(param){
			    		$.confirm({
				            'title'		: _.isEmpty(param.title) ? 'Confirm Action' : param.title,
				            'message'	: _.isEmpty(param.message) ? 'Are you sure you want to continue?' : param.message,
				            'buttons'	: {
				                'Yes'	: {
				                    'class'	: 'blue',
				                    'action': param.callback
				                },
				                'No'	: {
				                    'class'	: 'gray',
				                    'action': param.noaction	// Nothing to do in this case. You can as well omit the action property.
				                }
				            }
				        });
				    },
				    growl:function(message){
				    	$.jGrowl.defaults.pool = 5;
				    	$.jGrowl(message, {
							sticky:			false,
							life: 			12000,
							log: 			function() {},
							beforeOpen: 	function() {}
						});
				    }
				},
				pubsub:{
					smartupdateInstance:null,
					publisherurl:null,
					publishername:null,
					start:function(){
						var pub = Snp.Core.pubsub;
						pub.smartupdateInstance.smartupdater({url : pub.publisherurl
																,minTimeout: 5000 // 2 seconds
																,dataType:'json'
																}, function (data) {
																	amplify.publish( pub.publishername ,data);
																});
					},
					restart:function(){
						var pub = Snp.Core.pubsub;
						if(pub.smartupdateInstance.smartupdater("getState") === 'ON'){
							pub.smartupdateInstance.smartupdater("restart");
						}
					},
					stop:function(){
						Snp.Core.pubsub.smartupdateInstance.smartupdater("stop");
					},
					init:function(element,url,pubname){
						if(!_.isEmpty(element) && !_.isEmpty(url) && !_.isEmpty(pubname))
						{
							Snp.Core.pubsub.smartupdateInstance = element;
							Snp.Core.pubsub.publisherurl = url;
							Snp.Core.pubsub.publishername = pubname;
							Snp.Core.pubsub.start();
						}
					}
				}
			};



		window.Snp || (window.Snp = {});
	    Snp.Core = Core;


	    $(function() {
	    	$().UItoTop({ easingType: 'easeOutQuart' });
	    	$('.isotope-container').isotope();

		    $(".rslides-pager").responsiveSlides({
		    	auto: true,
		        pager: true,
		        nav: true,
		        speed: 500,
		        maxwidth: 800,
		        namespace: "transparent-btns"
		    });

		    $(".rslides-ishow").responsiveSlides({

				auto: true,
		        pager: false,
		        nav: true,
		        speed: 500,
		        namespace: "centered-btns"

		    });

		    $('.fbox').fancybox({
	          openEffect  : 'elastic',
	          closeEffect : 'elastic',
	          padding : 0
	        });

	        

	        $(".fbox-media").click(function() {
				 $.fancybox({
				  'hideOnContentClick': false,
				  'autoScale': false,
				  'transitionIn': 'none',
				  'transitionOut': 'none',
				  'title': this.title, // optional
				  'width': '50%', // or your size
				  'height': '70%',
				  'href': this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
				  'type': 'swf',
				  'swf': {
				    'wmode': 'transparent',
				    'allowfullscreen': 'true'
				  }
				 }); // fancybox
				 return false;
				}); // click

		  });

	});
});