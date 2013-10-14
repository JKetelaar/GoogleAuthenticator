<?php
class Login{
	
	public static function TFAGenerate(){
		require_once 'GoogleAuthenticator.php';
		
		$ga = new GoogleAuthenticator();
	
		$secret = $ga->createSecret();
		echo "Secret is: ".$secret."<br>";

		$qrCodeUrl = $ga->getQRCodeGoogleUrl($SiteTitle, $secret);
		echo "<br>QR-Code: <br><img src='".$qrCodeUrl."'/>\n\n";
	}
	
	public static function TFACheck($secret, $key){
		require_once 'GoogleAuthenticator.php';
		
		$ga = new GoogleAuthenticator();

		/* Clock tolerance = 30 seconds, so in this case it's 60 seconds - Because 30*2 = 60 */
		$checkResult = $ga->verifyCode($secret, $key, 2);
		if ($checkResult) {
			echo 'OK';
		} else {
			echo 'FAILED';
		}		
	}
}