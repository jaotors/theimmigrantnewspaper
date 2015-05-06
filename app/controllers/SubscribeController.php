<?php

class SubscribeController extends BaseController {

	/** Sending an email to the company **/

	public function subscribeEmail()
	{
		$validator = Validator::make(Input::all(),Config::get('formrules.subscribe_email'));
		if($validator->fails()){
			return Redirect::to('/')->withErrors($validator)->withInput();
		}

		$email = array(
				'email' => Input::get('subscriptionEmail')
		);

		$checkEmail = Subscription::where('email', '=', $email['email'])->first();

		if(!$checkEmail)
		{
			Subscription::unguard();
			$newEmail = Subscription::create($email);
			$newEmail->reguard();

			$param = array(
				'from' => 'info@theimmigrant.com.ph',
				'fromName' => 'The Immigrant - Subscribe',
				'subject' => 'The Immigrant - Subscribe',
				'body' => View::make('emails.contactus.subscribe')
							->with('info', $email)
							->render(),
				'altbody' => 'The Immigrant',
				'recipients' => array(
									array('email'=>'atty.josevillanueva3@gmail.com', 'name'=>'Atty. J'
								)
				)
			);

			Mailhelpers::sendemail($param);

			Session::flash('flashdata', Config::get('flashmessage.send_contactus_email'));
			return Redirect::to('/');
		}

		Session::flash('flashdata', Config::get('flashmessage.check_contactus_email'));
		return Redirect::to('/');

	}
}