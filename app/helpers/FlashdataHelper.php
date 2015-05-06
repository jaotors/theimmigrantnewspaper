<?php 

class FlashdataHelper{

	static public function flash(){
		$html = "";
		if(Session::get('flashdata')){
			$flash = Session::get('flashdata');
			$class = ($flash['code'] == 1 ? "notifygreen" : ($flash['code'] === 0 ? "notifyred" : "notifyorange"));
			$html .= '<div data-reveal id="myModal" class="reveal-modal app-notifications ">';
			$html .= "<h5 class='".$class."'>". $flash['message'] ." </h5>";
			$html .= '<a class="close-reveal-modal">&#215;</a>';
			$html .= "</div>";
			$html .= "<script type='text/javascript'> $(document).ready(function(){";
			$html .= "$('#myModal').foundation('reveal', 'open');";
			$html .= '$(".close-reveal-modal, .reveal-modal-bg" ).on( "click tap", function() {';
			$html .= "$('#myModal').foundation('reveal', 'close');";
			$html .= '});';	
			$html .= "});</script>";
			Session::forget('flashdata');
		}
		
		
		return $html;
	}
}