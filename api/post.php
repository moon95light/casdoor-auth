<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require '../vendor/autoload.php';
    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    $config = ['host'=>'127.0.0.1','port'=>9308];
    $client = new \Manticoresearch\Client($config);
    $index = $client->index('marketplace');
    
echo "<pre>"; 
 
 
 
 
   
    // PARSE PAYLOAD    
    $data = file_get_contents("tmp/1699998149.json");
    $data = json_decode($data, true);
    foreach ($data[0] as $key => $value) { $$key = $value; }
    $jwt = $data['token'];
    $event = $data['event'];
//echo $file_title;
//echo $jwt;    
print_r( $data );
//exit;

    // DECODE TOKEN   
    $key = 'jwtkey2023';
    $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
    $array = (array) $decoded; 
    if (strcmp($array[0], $file_name) !== 0) {  exit; }




if ( $file_title &&  ($event == "create" || $event == "update" || $event == "restore")  ) {


    $doc = $index->replaceDocument([
    'file_name' => (string) $file_name,
    'user_id' => (int) $user_id,
    'channel' => (string) $channel,    
    'boost' => (int) 1,               
    'title' => (string) $file_title,
    'description' => (string) $description,
    'duration' => (int) $file_duration,
    'width' => (int) $file_width,
    'height' => (int) $file_height,
    'category' => [],    
    'tags' => (string) $file_tags,
    'created_at' => (int) strtotime($created_at),
    'updated_at' => (int) strtotime($updated_at)
    ], (int) $id );           
    print_r($doc);
}
if ($event == "remove" ) {
    $doc = $index->deleteDocument( (int) $id );
    print_r($doc);
}


exit;
$results = $index->search('')->get();
foreach($results as $doc) {
echo $doc->title; 
print_r( $doc  );  
}

echo "111<pre>";
//print_r();        
    
?>  