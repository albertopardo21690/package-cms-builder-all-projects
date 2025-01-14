<?php 

class CurlController{

	/*=============================================
	Peticiones a la API
	=============================================*/	

	static public function request($url,$method,$fields){

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'http://api.pos.com/'.$url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $method,
			CURLOPT_POSTFIELDS => $fields,
			CURLOPT_HTTPHEADER => array(
				'Authorization: gdfhdfhsdfyeryr34646fhdfy4564t3456fhgdy'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$response = json_decode($response);
		return $response;

	}

	/*=============================================
	Peticiones a la API de ChatGPT
	=============================================*/	

	static public function chatGPT($content,$token,$org){

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://api.openai.com/v1/chat/completions',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS =>'{
		    "model": "gpt-4-0613",
		    "messages":[{"role": "user", "content": "'.$content.'"}]
		}',
		  CURLOPT_HTTPHEADER => array(
		    'Authorization: Bearer '.$token,
		    'OpenAI-Organization: '.$org,
		    'Content-Type: application/json'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$response = json_decode($response);
		return $response->choices[0]->message->content;

	}


}
