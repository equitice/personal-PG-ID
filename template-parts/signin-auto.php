<?php 

$PHPSESSID2 = $_COOKIE['PHPSESSID2'];
if(!empty($PHPSESSID2)){
	$curl = curl_init();

	curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://auth.staging.propertyguru.com/v1/session-to-jwt/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'session='.$PHPSESSID2.'&country=singapore',
        CURLOPT_HTTPHEADER => array(
            'User-Agent: PosmanRuntime/7.28.4',
            'Accept: */*',
            'Accept-Encoding: grip,deflate,br',
            'Connection: keep-alive',
            'x-clientid: I8LTYAEY-TWBZJFGG-9Y0XX1Z5-MZAZRAM8',
            'x-clientsecret: y2pt2jxfyxgm5kr6jq4v49zc0jnu12tg',
            'content-type: application/x-www-form-urlencoded'
        ),
	));
	
	$response = curl_exec($curl);
	curl_close($curl);
	$token = json_decode($response)->accessToken;
	$agentId = json_decode($response)->user->agentId;
	$region = json_decode($response)->user->region;
	$name = json_decode($response)->user->username;
	$password = json_decode($response)->user->id;

	if(!empty($token)){

		$user = get_users();
		$all_user = [];
		$user_pass = [];
		foreach($user as $users){
			$all_user[] = $users->user_login;
            $user_pass[] = $users->user_pass;
		}

        if(in_array($name,$all_user) && in_array($password,$user_pass)){
            $login_data = array();
            $login_data['user_login'] = $name;
            $login_data['user_password'] = $password;
            $login_data['remember'] = true;
            wp_signon($login_data,false);
        
        }else{
            wp_create_user($name, $password);
            $login_data = array();
            $login_data['user_login'] = $name;
            $login_data['user_password'] = $password;
            $login_data['remember'] = true;
            wp_signon($login_data,false);
        }
        
    }   
    
}


