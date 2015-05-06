<?php

class ContactUsController extends BaseController {

	/** Sending an email to the company **/

	public function sendEmail()
	{
		$validator = Validator::make(Input::all(),Config::get('formrules.send_email'));
		if($validator->fails()){
			return Redirect::to('contactus')->withErrors($validator)->withInput();
		}

		$info = array(
			'fullname' => Input::get('fullname'),
			'company' => Input::get('company'),
			'address' => Input::get('address'),
			'country' => Input::get('country'),
			'telno' => Input::get('telno'),
			'faxno' => Input::get('faxno'),
			'cellphoneno' => Input::get('cellphoneno'),
			'email' => Input::get('email'),
			'website' => Input::get('website'),
			'sector' => Input::get('sector'),
			'reason' => Input::get('reason')
		);

		$param = array(
			'from' => 'info@theimmigrant.com.ph',
			'fromName' => 'The Immigrant - Contact Us',
			'subject' => 'The Immigrant - Contact Us',
			'body' => View::make('emails.contactus.contactus')
						->with('info', $info)
						->render(),
			'altbody' => 'The Immigrant',
			'recipients' => array(
								array('email'=>'atty.josevillanueva3@gmail.com','name'=>'Atty. J'
							)
			)
		);
		
		Mailhelpers::sendemail($param);

		Session::flash('flashdata', Config::get('flashmessage.send_contactus_email'));
		return Redirect::to('/contactus');
	}
}