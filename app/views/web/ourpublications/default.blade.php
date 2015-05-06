@section('content')
	<div class="margin-top5">
		<div class="typography content-other columns large-9 medium-9">
			<h3>{{$issue['displayname']}}</h3>
		</div>
		<div class="typography content-other columns large-3 medium-3">
			<a href="/getpdf/{{$issue['pdfName']}}">
				<h5 class="download-issue"><span class="fa fa-cloud-download"></span>&nbsp;Download the PDF File?</h5>
			</a>
		</div>
		<div class="issue-hold">
			<iframe class="iframe-issue" src="http://static.issuu.com/webembed/viewers/style1/v2/IssuuReader.swf?mode=window&amp;pageNumber=1&amp;jsAPIClientDomain=issuu.com&amp;jsAPIInitCallback=jsAPIInitCallback&amp;jsInternalCallback=jsInternalCallback&amp;viewMode=doublePage&amp;name=&amp;username=&amp;creator=&amp;printButtonEnabled=&amp;documentId={{$issue['documentId']}}&amp;theme=flypaper&amp;watermarkEnabled=false&amp;defaultNavBarEnabled=false&amp;actionBarEnabled=false&amp;defaultDockEnabled=false&amp;backgroundColor=%23253139&amp;preloaderBackground=%23253139"></iframe>
		</div>
	</div>
@endsection