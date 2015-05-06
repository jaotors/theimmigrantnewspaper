<?php

class ArticlesController extends BaseController {

	protected $titletag = 'The Immigrant - Articles';

	protected $articledesc = array(
			'default' => array(
				'name'=>'default',
				'displayname'=>'Q2 2015 Inclusive economics',
				'description'=>'The APEC meetings, which the Philippines is hosting this year, aim to build inclusive market economies that reach the people at the bottom of the pyramid.',
				'imglink'=>'/resources/images/article/small-img/inclusiveeconomics.jpg',
				'link'=>'/featuredarticle'
			),

			'theimmigrantfaqs' => array(
				'name'=>'theimmigrantfaqs',
				'displayname'=>'The Immigrant FAQs, Flying fair, flying right',
				'description'=>'The salient points of the Air Passenger Bill of Rights that everyone should know',
				'imglink'=>'/resources/images/article/small-img/theimmigrantfaqs.jpg',
				'link'=>'/articles/theimmigrantfaqs'
			),

			'racetoparadise' => array(
				'name'=>'racetoparadise',
				'displayname'=>'Race to paradise',
				'description'=>'The annual San Fernando Race would have taken dozens of yachts from Hong Kong to the shores of La Union',
				'imglink'=>'/resources/images/article/small-img/racetoparadise.jpg',
				'link'=>'/articles/racetoparadise'
			),

			'usthediplomat' => array(
				'name'=>'usthediplomat',
				'displayname'=>'What diplomacy is all about',
				'description'=>'US-Philippine ties grow stronger in APEC’s 26th year',
				'imglink'=>'/resources/images/article/small-img/usthediplomat.jpg',
				'link'=>'/articles/usthediplomat'
			),

			/*'justthepacs' => array(
				'name'=>'justthepacs',
				'displayname'=>'ESSAY, Just the Pacs, Man',
				'description'=>'Is Manny Pacquiao still relevant? Book author and boxing commentator Ted Lerner lists down the reasons',
				'imglink'=>'/resources/images/article/small-img/justthepacs.jpg',
				'link'=>'/articles/justthepacs'
			),

			'theimmigrantfaqs' => array(
				'name'=>'theimmigrantfaqs',
				'displayname'=>'The Immigrant FAQs, SMARTENING UP',
				'description'=>'Dean Ernesto P. Maceda Jr. lists down things you should know about the Anti-dummy Law',
				'imglink'=>'/resources/images/article/small-img/theimmigrantfaqs.jpg',
				'link'=>'/articles/theimmigrantfaqs'
			),

			'swissthediplomat' => array(
				'name'=>'swissthediplomat',
				'displayname'=>'Swiss-Philippine Relations',
				'description'=>'At first glance, Switzerland and the Philippines could hardly be more different: one, a landlocked mountainous country with barely eight million inhabitants with advanced economy;',
				'imglink'=>'/resources/images/article/small-img/swissthediplomat.jpg',
				'link'=>'/articles/swissthediplomat'
			)

			'windsofchange' => array(
				'name'=>'windsofchange',
				'displayname'=>'Q1 2013 Winds of Change',
				'description'=>'With sound legislation and economic principles from the current administration, the Philippines is poised, more than ever, to greater heights. Sonny Coloma tells the inside story',
				'imglink'=>'/resources/images/article/small-img/windsofchange.jpg',
				'link'=>'/articles/windsofchange'
			),

			'healthoptions' => array(
				'name'=>'healthoptions',
				'displayname'=>'Q1 2014 Health Options',
				'description'=>'While travel insurance from an expatriates’ home country seems the best option today, it is not the only one. Veteran journalist Blanch R. Fernandez reports on the Philippines public health system',
				'imglink'=>'/resources/images/article/small-img/healthoptions.jpg',
				'link'=>'/articles/healthoptions'
			),

			'stateoftheexpatnation' => array(
				'name'=>'stateoftheexpatnation',
				'displayname'=>'Q3 2013 State of the Expat Nation',
				'description'=>'Southeast Asian countries’ economic integration looms, yet the Philippines, the world’s largest labor exporter, grapples with handling foreigners on its own shores. Migration issue expert Jeremaiah M. Opiniano reports',
				'imglink'=>'/resources/images/article/small-img/soexpatnation.jpg',
				'link'=>'/articles/stateoftheexpatnation'
			)

			'phlathome' => array(
				'name'=>'phlathome',
				'displayname'=>'Q4 2013 PHL at Home',
				'description'=>'The Philippines, a consistent top 20 placer in the world’s best retirement destinations, is now poised for higher ground. Johnna Villaviray-Giolagon reports',
				'imglink'=>'/resources/images/article/small-img/phlathome.jpg',
				'link'=>'/articles/phlathome'
			)

			'funrun' => array(
				'name'=>'funrun',
				'displayname'=>'Q2 2013 Fun Run',
				'description'=>'With a meager budget, the Department of Tourism has started a phenomenal meme campaign that breaks boundaries. Rhoel V. Fernandez reports',
				'imglink'=>'/resources/images/article/small-img/funrun.jpg',
				'link'=>'/articles/funrun'
			),

			'rosyprospects' => array(
				'name'=>'rosyprospects',
				'displayname'=>'Q2 2014 Rosy Prospects',
				'description'=>'Seasoned travel journalist Earl D.C. Bracamonte highlights the bright spots of the recent World Economic Forum Travel and Tourism Competitiveness Report',
				'imglink'=>'/resources/images/article/small-img/rosyprospects.jpg',
				'link'=>'/articles/rosyprospects'
			),

			'crossingtheedgeofallegiance' => array(
				'name'=>'crossingtheedgeofallegiance',
				'displayname'=>'Q4 2012 Crossing the Edge of Allegiance',
				'description'=>'Joel P. Salud discusses what one risks in dual citizenship',
				'imglink'=>'/resources/images/article/small-img/allegiance.jpg',
				'link'=>'/articles/crossingtheedgeofallegiance'
			)*/

		);

	protected $articles = array(

			'default'=>array('name'=>'default'),
			'racetoparadise'=>array('name'=>'racetoparadise'),
			'usthediplomat'=>array('name'=>'usthediplomat'),
			'theimmigrantfaqs'=>array('name'=>'theimmigrantfaqs'),
			'swissthediplomat'=>array('name'=>'swissthediplomat'),
			'rosyprospects'=>array('name'=>'rosyprospects'),
			'healthoptions'=>array('name'=>'healthoptions'),
			'phlathome'=>array('name'=>'phlathome'),
			'stateoftheexpatnation'=>array('name'=>'stateoftheexpatnation'),
			'funrun'=>array('name'=>'funrun'),
			'windsofchange'=>array('name'=>'windsofchange'),
			'crossingtheedgeofallegiance'=>array('name'=>'crossingtheedgeofallegiance')
		);

	public function show($name='default')
	{
		$template = 'template';
		View::name($template, 'web.articles.'.$name);
		$data = array(
			'article'=> $this->articles[$name]['name'],
			'others' => $this->articledesc, $name
			);

		$counter = 0;
		if($name === 'default')
		{
			$layout = View::of('web.articles.'. $name, array('pagetitle' => $this->titletag,'activenav'=>'featuredarticle'));
		}
		else
		{
			$layout = View::of('web.articles.'. $name, array('pagetitle' => $this->titletag,'activenav'=>''));
		}
		return $layout->nest('content', 'web.articles.'. $name, $data);	
	}

	public function downloadPdf($filename)
	{
		$file = 'pdfarticles/'.$filename.'.pdf';

		header('Content-Disposition: attachment; filename='.$filename);
		header('Content-type: application/pdf');
		header('Content-length: ' .filesize($file));
		readfile($file);
		exit();
	}


}