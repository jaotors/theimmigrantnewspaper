<?php

return array(
	'send_email' => array(
			'fullname' => 'required|max:100',
			'company' => 'required|max:100',
			'address' => 'required',
			'country' => 'required|min:6',
			'telno' => 'required|max:100',
			'email' => 'required|max:100|email',
			'sector' => 'required|max:100',
			'reason' => 'required'
		),
	'subscribe_email' => array(
			'subscriptionEmail' => 'required|email'
		)
	);
