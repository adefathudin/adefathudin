   <!-- about section
   ================================================== -->
   <section id="blog">  

   	<div class="row section-intro">
   		<div class="col-twelve">

   			
   			<h1>My Blog Contents</h1>
               
 		</div>   		
   	</div> <!-- /section-intro -->

   	<div class="row about-content">
       <?php
//API URL
 $sumber = 'https://adefathudin.com/blog/api/feeds.php';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);
for($a=0; $a < count($data); $a++)
   {
    echo "
    <div class='col-six tab-full'>    
    <p><a href='".$data[$a]['link']."'>".$data[$a]['post_title']."</a></p>
    </div>";
   }
?>
           <a class="twitter-timeline" data-theme="dark" href="https://twitter.com/adefathudin?ref_src=twsrc%5Etfw">Tweets by adefathudin</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
   	</div>

   </section> <!-- /process-->    
