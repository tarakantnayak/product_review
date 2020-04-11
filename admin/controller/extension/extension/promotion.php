<?php
class ControllerExtensionExtensionPromotion extends Controller {
	public function index() {
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL, 'https://opencart.tips/index.php?route=extension/feed/ads/ads');
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);

		$response = curl_exec($curl);

		curl_close($curl);

		if ($response) {
			return $response;
		} else {
			return '';
		}
	}
}