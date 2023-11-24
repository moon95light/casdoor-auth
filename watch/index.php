<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require '../vendor/autoload.php';
    $config = ['host'=>'127.0.0.1','port'=>9308];
    $client = new \Manticoresearch\Client($config);

//$date1 = new DateTime('2022-04-01');
//$date2 = new DateTime('2022-04-10');
//$interval = $date1->diff($date2);
//echo $interval->days;
//exit;
 
//$x = [ 5, 23, 68   ];
//echo json_encode( $x );
//exit;




//echo "<pre>";
//$query = "SELECT * FROM marketplace where MATCH('@file_name 5850fb10-ada9-42c0-89cb-eca3786534eb')";
//$response = $client->sql($query);
//print_r($response);  

//echo date('l jS F (Y-m-d)', strtotime('-3 days'));
 
//$seconds = int() 146;  
//$output = sprintf('%02d:%02d:%02d', ($seconds/ 3600),($seconds/ 60 % 60), $seconds% 60);
//echo $output; 

//echo date('H:i:s', strtotime('1 hour 1 minute 1 second', strtotime('midnight')));



//exit;    
 
 
//echo getName($n);

//$array = str_split( 1234567890  );

//print_r( $array  );
//echo uniqid(43);
//exit;





    $id =(int) trim($_GET["v"]); 
    $index = $client->index('marketplace');
    $doc = $index->getDocumentById($id);
    $vid = $doc->file_name;
 
//print_r($doc);
//exit;
    //echo "<pre>";
    //print_r( $_GET );
    //exit;
    
    
$title = $doc->title; 
include("../header.php");
  
?>
 



<br><br> 

<div class="container-fluid pt-5">
   <div class="row">
     <div class="col-8 px-4">
       
       <div class="bg-dark">
       <video controls autoplay id="my-video" preload="auto" data-setup="{}"
                    class="video-js vjs-default-skin xvjs-big-play-centered vjs-16-9 ">
</div>     
                
                  
<h6 class="my-2 mb-0"><?=$doc->title;?></h6>                              
<div class="row">
    <div class="col-sm">
        <?=$doc->channel;?> 
        
               
        
         
            </div>

          
         <div class="col-7 text-end">
                <button type="button" class="btn btn-light shadow-none ">Subscribe</button>
               <button type="button" class="btn btn-light shadow-none" data-mdb-toggle="modal" data-mdb-target="#messageModal">Message</button>
 
         </div>         
         

</div> 
                 
                <div class="bg-light p-3 small my-2">
                     330 views &bull; 3 days ago<br>
                     <?=$doc->description;?>
                
                </div>
     </div>
     <div class="col-4">

<?php 
$index = $client->index('marketplace');
$results = $index->search('')->limit(1000)->get();
foreach($results as $doc) {
echo "<div class='row mb-3'><div class='col-4'><a href='/watch/?v=" . $doc->getId() . "'><img  class='img-fluid border' src='https://my.audition.tube/images/videos/" . $doc->file_name . ".jpeg'></a></div><div class='col-8 small'><a href='/watch/?v=" . $doc->getId() . "'>" . $doc->title . "</a><br>" . $doc->channel . "</div></div>";      
}            
?>
     </div>
   </div>
</div>
 


 <div class="modal fade right" id="messageModal" tabindex="-1" aria-labelledby="exampleSideModal2" style="display: none;" data-gtm-vis-first-on-screen2340190_1302="545643" data-gtm-vis-total-visible-time2340190_1302="100" data-gtm-vis-has-fired2340190_1302="1" aria-hidden="true">
        <div class="modal-dialog modal-side modal-bottom-right">
          <div class="modal-content">
            <div class="modal-header bg-primary text-white">
              <h5 class="modal-title" id="exampleSideModal2">Related article</h5>
              <button type="button" class="btn-close btn-close-white" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
<textarea class="form-control border-0 h-100"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Semd</button>

            </div>
          </div>
        </div>
      </div>

 
<?php include("../footer.php"); ?>





<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.5.3/video.min.js" integrity="sha512-wUWE15BM3aEd9D+01qFw8QdCoeB/wDYmOOqkgeeKiYXE+kiPOboLcOES+1lJMa5NiPBPBQenZYoOWRhf5jv4sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>

//const urlParams = new URLSearchParams(window.location.search);
//const vid = urlParams.get('v');
const vid = '<?php echo trim($vid);?>';
//alert( vid  );

//const vid = '<?php echo trim($_GET["v"]); ?>';
//alert( "https://cdn.audition.tube/audition/uploads/"+vid+"/"+vid+"/playlist.m3u8"  );

// 004183fb-3956-492e-93c5-4899ac3a601a
const player = videojs('my-video');

player.src({ src:"https://cdn.audition.tube/audition/uploads/"+vid+"/"+vid+"/playlist.m3u8", type: 'application/x-mpegURL', });
player.play();

</script> 



