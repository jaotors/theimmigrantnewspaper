<?php
require_once(dirname(__FILE__) .'./../plugins/phpmailer/class.phpmailer.php');
class Mailhelpers {

	static $apiuser = 'snp.theimmigrant@gmail.com';
	static $apikeydev = 'b_bqbSJy9LVJD4c86_lVEg';
	static $apikeyprod = 'HLSE7C6PlOloJepup-Kp2w';

	public static function sendemail($arguments = array()){
		$mandrill['recipient'] = json_encode(Mailhelpers::sendto($arguments['recipients']));
        $mandrill['tags'] = json_encode(isset($arguments['tags']) ? $arguments['$arguments'] : "");
        $mandrill['apikey'] = json_encode(Mailhelpers::$apikeyprod);
        $mandrill['htmlcontent'] = json_encode($arguments['body']);
        $mandrill['subject'] = json_encode($arguments['subject']);
        $mandrill['frommail'] = json_encode($arguments['from']);
        $mandrill['fromname'] = json_encode($arguments['fromName']);

        $response = Mailhelpers::mandrillApi($mandrill);
        return $response;
	}

	private static function sendto($collection){
		$list = array();
        foreach ($collection as $collect) {
            array_push($list, array('email'=>$collect['email'],'name'=>$collect['name']));
        }
        return $list;
	}

	private static function mandrillApi($data){
        $uri = 'https://mandrillapp.com/api/1.0/messages/send.json';
        $params = View::make('emails.mandrill')->with($data)->render();	
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $uri);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);

        $results = curl_exec($ch);
        $result = json_decode($results);
        return $result;
    }

    public static function sendemailSMTP($arguments = array())
    {
		$mail = new PHPMailer;
		$mail->IsSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
		$mail->Port = 587;                                    // Set the SMTP port
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = Mailhelpers::$apiuser;                // SMTP username
		$mail->Password = Mailhelpers::$apikeyprod;                  // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

		$mail->From = $arguments['from'];
		$mail->FromName = $arguments['fromName'];

		foreach ($arguments['recipients'] as $recipient) {
			$mail->AddAddress($recipient['email'], $recipient['name']);
		}
		$mail->IsHTML(true);                                  // Set email format to HTML

		$mail->Subject = $arguments['subject'];
		$mail->Body    = $arguments['body'];
		$mail->AltBody = isset($arguments['altbody']) ? $arguments['altbody'] : '';

		if(!$mail->Send()) {
		   return false;
		}
		return true;
    }
}
