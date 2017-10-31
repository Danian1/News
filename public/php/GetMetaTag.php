<?php

function file_get_contents_curl($url) {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

$url = $_POST['url'];

$html = file_get_contents_curl($url);

$doc = new DOMDocument();
@$doc->loadHTML($html);

$metas = $doc->getElementsByTagName('meta');

for ($i = 0; $i < $metas->length; $i++){
	$meta = $metas->item($i);
	if($meta->getAttribute('property') == 'og:title' || $meta->getAttribute('property') == 'title')
		$titlu = $meta->getAttribute('content');
	if($meta->getAttribute('property') == 'og:description' || $meta->getAttribute('property') == 'description')
		$descriere = $meta->getAttribute('content');
	if($meta->getAttribute('property') == 'og:image' || $meta->getAttribute('property') == 'image')
		$image = $meta->getAttribute('content');
}

$link = parse_url($url);
$host = $link['host'];

echo json_encode(array("titlu"=>$titlu, "descriere"=>$descriere, "host"=>$host, "imglink"=>$image));

?>