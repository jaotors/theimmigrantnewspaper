@section('content')
	<div class="margin-top5">
		<div class="text-left border-none typography content-title columns">
			<h3>Our Sponsors</h3>		
		</div>
		@foreach($xml->sponsors as $key => $value)
		<div class="typography weight-500 margin-top5">
			<div class="columns content-title uppercase-title">
				<h5 id="{{$value->idName}}">{{$value->sponsorsName}}</h5>
				<div class="detail-hold detail-pic large-3 medium-3 columns">
					<img src="{{$value->imageSource}}">
				</div>
				<div class="text-left border-none weight-500 typography large-9 medium-9 columns padding-small-zero">
					<p>{{$value->info}}</p>
					<p>Visit their website: <a href="{{$value->link}}">{{$value->linkTitle}}</a></p>
				</div>
			</div>
		</div>
		<hr>
		@endforeach
	</div>
@endsection