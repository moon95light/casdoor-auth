<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require '../vendor/autoload.php';
    use Firebase\JWT\JWT;
    use Firebase\JWT\Key;

    $config = ['host'=>'127.0.0.1','port'=>9308];
    $client = new \Manticoresearch\Client($config);
   
//$index->drop(true); 
//exit;    
//$index->drop(true);
//exit;


$index = $client->index('channels'); 
$index->drop(true);
$response = $index->create([
    'avatar'=>['type'=>'text'],    
    'name'=>['type'=>'text'],    
    'description'=>['type'=>'text'],   
    'facebook'=>['type'=>'text'],
    'twitter'=>['type'=>'text'],    
    'linkedin'=>['type'=>'text'],
    'instagram'=>['type'=>'text'],    
    'web'=>['type'=>'text'],            
    'available_space'=>['type'=>'integer'],
    'first_name'=>['type'=>'text'],
    'last_name'=>['type'=>'text'], 
    'email'=>['type'=>'text'],
    'email_verified_at'=>['type'=>'integer'],     
    'trusted'=>['type'=>'integer'],
    'banned_at'=>['type'=>'integer'],
    'created_at'=>['type'=>'integer'],
    'updated_at'=>['type'=>'integer']
]);
print_r( $response  ); 
 

/*
$index = $client->index('marketplace');
$response = $index->create([
    'file_name'=>['type'=>'text'],
    'user_id'=>['type'=>'integer'],
    'channel'=>['type'=>'text'],    
    'boost'=>['type'=>'integer'],               
    'title'=>['type'=>'text'],
    'description'=>['type'=>'text'],
    'duration'=>['type'=>'integer'],
    'width'=>['type'=>'integer'],
    'height'=>['type'=>'integer'],
    'category'=>['type'=>'multi'],    
    'tags'=>['type'=>'text'],
    'created_at'=>['type'=>'integer'],
    'updated_at'=>['type'=>'integer']
]);
print_r( $response  );
*/ 
echo "222 111<pre>";
      
    
?>  