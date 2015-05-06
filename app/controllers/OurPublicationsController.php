<?php

class OurPublicationsController extends BaseController {

	protected $titletag = 'The Immigrant - Our Publications';

	protected $issue = array(

		'inclusiveeconomics' => array(
			'name'=>'inclusiveeconomics',
			'displayname'=>'Q2 2015 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'150430081358-a0a2efa293e643155d341c85f13038e7',
			'pdfName'=>'Q2_2015_THE_IMMIGRANT'
		),

		'aseanintegration' => array(
			'name'=>'phbracesforaseanintegration',
			'displayname'=>'Q1 2015 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'150219072911-79998fefed3964f647b0c4c97515c0b7',
			'pdfName'=>'Q1_2015_THE_IMMIGRANT'
		),

		'breakingthrough' => array(
			'name'=>'breakingthrough',
			'displayname'=>'Q4 2014 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'141118092133-5f4e3e3f4a40a843cca71710f1652cf8',
			'pdfName'=>'Q4_2014_THE_IMMIGRANT'
		),

		'economicspark' => array(
			'name'=>'economicspark',
			'displayname'=>'Q3 2014 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'140727065523-b52338742efff4b92c9bd8bac7f6b0f3',
			'pdfName'=>'Q3_2014_THE_IMMIGRANT'
		),

		'rosyprospects' => array(
			'name'=>'rosyprospects',
			'displayname'=>'Q2 2014 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'140609232642-50949fba2ccfb7ab6d306d1054013623',
			'pdfName'=>'Q2_2014_THE_IMMIGRANT'
		),

		'healthoptions' => array(
			'name'=>'healthoptions',
			'displayname'=>'Q1 2014 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'140127224443-05ea0e3b14a7ac3b3ee4d318df78892f',
			'pdfName'=>'Q1_2014_THE_IMMIGRANT'
		),
		
		'phlathome' => array(
			'name'=>'phlathome',
			'displayname'=>'Q4 2013 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'131107060437-353bf3fda139be0818408cd6657cc976',
			'pdfName'=>'Q4_2013_THE_IMMIGRANT'
		),

		'stateoftheexpatnation' => array(
			'name'=>'stateoftheexpatnation',
			'displayname'=>'Q3 2013 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'130717213726-f4c74c34d440bc226cb38ea885e01bc7',
			'pdfName'=>'Q3_2013_THE_IMMIGRANT'
		),

		'funrun' => array(
			'name'=>'funrun',
			'displayname'=>'Q2 2013 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'130429131320-520fb84354ad4fe5af5c9b72e04bdbc1',
			'pdfName'=>'Q2_2013_THE_IMMIGRANT'
		),

		'windsofchange' => array(
			'name'=>'windsofchange',
			'displayname'=>'Q1 2013 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'130429131926-aa5984c2674c4b50bdacf218ab3c14e1',
			'pdfName'=>'Q1_2013_THE_IMMIGRANT'
		),

		'crossingtheedgeoftheallegiance' => array(
			'name'=>'crossingtheedgeoftheallegiance',
			'displayname'=>'Q4 2012 THE IMMIGRANT NEWSPAPER',
			'documentId'=>'150105014920-700f37e88ef13fd7c3b1709e578847b3',
			'pdfName'=>'Q4_2012_THE_IMMIGRANT'
		)
	);

	public function ishow($issuename)
	{
		$issue = $this->issue[$issuename];
		$template = 'template';
		View::name($template, 'web.ourpublications.default');

		$layout = View::of('web.ourpublications.default', array('pagetitle' => $this->titletag,'activenav'=>''));
		return $layout->nest('content', 'web.ourpublications.default', array('issue'=>$issue));
	}

	public function show()
	{
		$template = 'template';
		View::name($template, 'web.ourpublications');		
		$layout = View::of('web.ourpublications', array('pagetitle' => 'The Immigrant - Our Publications','activenav'=>'ourpublications'));
		return $layout->nest('content', 'web.ourpublications');
	}
}