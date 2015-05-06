<?php
class Authhelpers {


    public static function isAdministrator() {
       return (Auth::user()->usertype === 'ADMINISTRATOR');
    }

    public static function isManager() {
       return (Auth::user()->usertype === 'MANAGER');
    }

    public static function isInvestor() {
       return (Auth::user()->usertype === 'INVESTOR');
    }

    public static function issudo() {
       return (Auth::user()->usertype === 'SUPERUSER');
    }

    public static function isPermitted($controller, $method, $value=''){
        if(Authhelpers::issudo())return true;
    	$rights = Config::get('appconstants.accessrights');
    	$proc = $rights[strtolower(Auth::user()->usertype)][$controller][$method];
    	
    	if($method == 'create'){
    		if($proc[strtolower($value)]){
    			return true;
    		}
    	}else{

    		if($proc)
				return true;
    	}
        return false;
    }

    public static function base64encoder($string){
        return base64_encode($string);      
    }

    public static function base64decoder($string){
        return base64_decode($string);   
    }

    public function resetPassword($id) {
        $rawpassword = Str::random(10, 'alpha');

        $user = Mwuser::find(Crypt::decrypt($id));
        $user->password     = Hash::make($rawpassword);
        $user->updated_by   = $user->id;
        $user->updated_at   = date('Y-m-d H:i:s');
        $user->save();

        $param = array(
             'from' => 'do-not-reply@megaworldinternational.com'
            ,'fromName' => 'Megaworld International'
            ,'subject' => 'Megaworld International Forgot Password'
            ,'body' => View::make('emails.auth.forgotpassword')->with('rawpassword', $rawpassword)->render()
            ,'altbody' => 'Megaworld International'
            ,'recipients' => array(
                                array('email'=>$user['email'],'name'=>$user['name']), 
                            )
            );

        Mailhelpers::sendemail($param);
    }
}
