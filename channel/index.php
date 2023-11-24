<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require '../vendor/autoload.php';
    $config = ['host'=>'127.0.0.1','port'=>9308];
    $client = new \Manticoresearch\Client($config);
 
  
//echo "<pre>";
$index = $client->index('channels');
$results = $index->search('')->limit(1000)->get();
foreach($results as $doc) {
//print_r( $results );


}  
    

 
 
 

 
    
    
$title = "Channels"; 
include("../header.php");
  
?>


<!-- Jumbotron -->
 
<div class="p-5 bg-dark text-white mt-5" >
  <div class="px-4 py-5 " >
  <h1 class="display-4">Cisco Systems</h1>
  <p class="w-50">
    This is a simple hero unit, a simple jumbotron-style component for calling extra
    attention to featured content or information.
  </p>
 
  <button type="button" class="btn btn-danger btn-lg px-5 roumded-0 shadow-none">
    Message                                             
  </button>
</div>  
</div>
<!-- Jumbotron -->





<?php include("../footer.php"); ?>

