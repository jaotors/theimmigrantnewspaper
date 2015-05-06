<?php

class PartnersController extends BaseController {

	public function show()
	{
		$xml = simplexml_load_file('xml/partners.xml');
		$counter = 0;
		$template = 'template';
		View::name($template, 'web.partners');		
		$layout = View::of('web.partners', array('pagetitle' => 'The Immigrant - Partners','activenav'=>'partners'));
		return $layout->nest('content', 'web.partners', array('xml' => $xml, 'counter' => $counter));	
	}
}