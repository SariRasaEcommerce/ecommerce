<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasiakun extends CI_Controller {
	public function NotifyMe(msg_title, msg_body, redirect_onclick){
		var granted=0;
		if(!("Notification" in window)){
			alert("This browser does not support dekstop notification");
		}
		else if (Notification.permission === "granted") {
			granted=1;
		}
		else if (Notification.permission !== 'denide') {
			Notification.requestPermission(function (permission){
				if(permission === "granted"){
					granted = 1;
				}
			}
		);
		}
		if(granted==1){
			var notification = new Notification(msg_title,{
				body : msg_body
			});
		}
		if(redirect_onclick){
			notification.onclick = function(){
				window.location.href = redirect_onclick;
			}
		}
	}
}