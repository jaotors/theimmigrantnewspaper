<?php

class SponsorsController extends BaseController {

	public function show()
	{
		$xml = simplexml_load_file('xml/sponsors.xml');
		$counter = 0;
		$template = 'template';
		View::name($template, 'web.sponsors');		
		$layout = View::of('web.sponsors', array('pagetitle' => 'The Immigrant - Sponsors','activenav'=>'sponsors'));
		return $layout->nest('content', 'web.sponsors', array('xml' => $xml, 'counter' => $counter));	
	}
}