<div class="row">
	<div class="logo-hold columns large-8 medium-8">
		<a href="/"><img src="/resources/images/logo/logo.png" alt="The Immigrant Newspaper" /></a>
	</div>
	<div class="social-media columns large-4 medium-4 hide-for-small">
		<ul class="right">
			<li><a href="http://www.facebook.com/TheImmigrantNewspaper"><span class="fa fa-facebook-square"></span></a></li>
			<li><a href="http://twitter.com/theimmigrantnp"><span class="fa fa-twitter-square"></span></a></li>
			<li><a href="http://ph.linkedin.com/pub/the-immigrant-newspaper/b3/88/770/en"><span class="fa fa-linkedin-square"></span></a></li>
		</ul>
		{{Form::open(array('action' => array('SubscribeController@subscribeEmail')))}}
		<div>
			{{Form::text('subscriptionEmail',Input::old('subscriptionEmail'),array('class'=>($errors->first('subscriptionEmail')) ? 'i-ierror emailsubscribe' : ' emailsubscribe', 'placeholder'=>'Enter your Email Address'))}}
			
			
			{{Form::submit('Subscribe', array('class'=>'btn-subscribe'))}}
		</div>
		{{$errors->first('subscriptionEmail', '<i class="f-ierror">:message</i>');}}
		{{Form::close()}}
	</div>
</div>
<nav class="navigation-hold">
	<div class="navigation">
		<ul class="responsenav">
			<li class="show-for-small"><a href="#">Menu</a><span class="fa fa-align-justify navigation-icon"></span></li>
			<li class="{{($activenav == 'home') ? 'active' : '' }} first"><a href="/">Home</a></li>
			<li class="{{($activenav == 'whoarewe') ? 'active' : '' }} "><a href="/whoarewe">Who are we?</a></li>
			<li class="{{($activenav == 'partners') ? 'active' : '' }}"><a href="/partners">Partners</a></li>
			<li class="{{($activenav == 'sponsors') ? 'active' : '' }}"><a href="/sponsors">Sponsors</a></li>
			<li class="{{($activenav == 'ourpublications') ? 'active' : '' }}"><a href="/ourpublications">Our Publications</a></li>
			<li class="{{($activenav == 'featuredarticle') ? 'active' : '' }}"><a href="/featuredarticle">Featured Articles</a></li>
			<li class="{{($activenav == 'contactus') ? 'active' : '' }}"><a href="/contactus">Contact Us</a></li>
		</ul>
		<div class="hide-for-small nav-line" ></div>
	</div>
</nav>