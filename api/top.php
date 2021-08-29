<?php
$ch = curl_init();

curl_setopt_array($ch, [
  		CURLOPT_URL => "https://us.preregistration.ffmax.garena.com/api/rank?lang=pt-br&region=BR",
  		CURLOPT_HTTPHEADER => [
	"accept: application/json, text/plain, */*",
	"x-csrftoken: aItigzPXtE4nTqTtkJKZyS3AGHPUFDf4bcXkTyZwKPQEG1hfzubc4i2lA2NoMMDy",
	"sec-ch-ua-mobile: ?0",
	"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36 Edg/92.0.902.84",
	"sec-fetch-site: same-origin",
	"sec-fetch-mode: cors",
	"sec-fetch-dest: empty",
	"referer: https://us.preregistration.ffmax.garena.com/BR/?access_token=645AA92F376F472C3A99C80C77E125099F1ADD8AAEE730F06B2ADFE3E81DAA664DBD6EAD6E086EBA88F3F7B98059C6D04330AA21FA04FCCD193447A3DFF5ADCA1EC8EDB8063B598BA6FF847A57241067",
	"cookie: _ga_RN81RB2KQE=GS1.1.1627414982.1.1.1627415838.0",
	"cookie: _ga_5ZFPPM2PHQ=GS1.1.1629693326.6.0.1629693326.0",
	"cookie: _ga_KS47KC1J05=GS1.1.1629783349.8.0.1629783349.0",
	"cookie: _ga_5J5RCL0H3M=GS1.1.1629783349.8.0.1629783349.0",
	"cookie: token_session=a0a0aa43329c01a20082659c8a4d593314ef3e3683508e3f4f636f0150147a36a7cbee8a810387618f316e586079e7a7",
	"cookie: csrftoken=aItigzPXtE4nTqTtkJKZyS3AGHPUFDf4bcXkTyZwKPQEG1hfzubc4i2lA2NoMMDy",
	"cookie: _gid=GA1.2.1579126934.1630252044",
	"cookie: eventtoken=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhY2Nlc3NfdG9rZW4iOiIzMDlhZjkwZjg4MmM3NTFmNjIwYTVjZDg4OGQyYzFlYzk1ZTg3MzE5ZmFiNDI2Y2M1ZTQ3ZGQ2ZTU4NDIzYmZhIiwib3Blbl9pZCI6IjE0MThkNmZjODUzY2Y1ODdjZTAxODI0MzU0YmVjYzkyIiwibmlja25hbWUiOiJEYXZpIERlIE1hdG9zIFNjaGltaXR0IiwicGxhdGZvcm0iOjMsImNvdW50cnlfaW5mbyI6IkJSIiwiaG9zdF9yZWdpb24iOiJCUiIsImV4cCI6MTYzMDM2MDE0NX0.AGYeJnmTK1q3AbORsxpyk-dInh8e8tRyIvQvAkXlm3s",
	"cookie: _ga=GA1.2.1908646497.1627415208",
	"cookie: _gat_gtag_UA_164234803_1=1",
	"cookie: _ga_G7VSKE09WB=GS1.1.1630271247.2.1.1630273764.0"],
	  CURLOPT_RETURNTRANSFER=>true,	  
	]
);
$res = json_decode(curl_exec($ch));

for ($i = 0; $i<100;$i++){
echo 1+$i."º ".$res->data->rank[$i]->team_name." (".$res->data->rank[$i]->member_num.")<br><br>";
}
?>