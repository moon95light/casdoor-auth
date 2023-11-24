<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require '../vendor/autoload.php';
    $config = ['host'=>'127.0.0.1','port'=>9308];
    $client = new \Manticoresearch\Client($config);
    $index = $client->index('videos'); 
    $index = $client->index('marketplace');
 
 
 
    



//echo "<pre>";
//print_r( $results  );
//exit;


//echo "<pre>";
//print_r( $results  );
//exit;


//exit;

$title = "Search"; 
include("../header.php");

?>


<div class="container-fluid px-5">
<div class="row">
<?php
//  $search->match('Ryobi','title,long_title');
// ->sort('id','desc')

$results = $index->search('','title,description,channel')->limit(1000)->get();
//echo "<pre>";
//print_r( $results  );
//exit;

foreach($results as $doc) {
//print_r( $doc  );

$duration = $doc->duration;

//echo date('H:i:s',  $duration ); 

echo $duration;   
echo "<div class='row mb-4'><div class='col-3'><a href='/watch/?v=" . $doc->getId() . "'><img  class='img-fluid border' src='https://my.audition.tube/images/videos/" . $doc->file_name . ".jpeg'></a></div><div class='col-9'><a href='/watch/?v=" . $doc->getId() . "'>" . $doc->title . "</a><br>" . $doc->channel . "</div></div>";   
   
   //echo 'Document:'.$doc->getId()."\n";
 
}



?>
</div></div>

 







<?php include("../footer.php"); ?>

