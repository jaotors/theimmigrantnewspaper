<div class="typography columns large-3 medium-3">
	<h4>Featured Articles</h4>
	@foreach ($others as $key => $value)
		@if($value['name'] != $article)
			@if($value['name'] === 'default')
				<div class="f-article other-detail-hold text-left">
					<h4>Current Issue</h4>
			@else
				<div class="other-article other-detail-hold text-left">
			@endif
					<div class="detail-hold"><a href="{{$value['link']}}"><img src="{{$value['imglink']}}"></a></div>
					<h6>{{$value['displayname']}}</h6>
					<p>{{$value['description']}}<a class="normal-link" href="{{$value['link']}}">Read More</a></p>
				</div>
		@endif
	@endforeach
</div>