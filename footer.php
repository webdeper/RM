 <footer class="jumbotron" id="footer">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-5">
    				<ul>
    					<li>
    						<h4>㈜ 리서치멘토 ㅣ Researchmetor.Co.,LTD.</h4>
    						</li>
    						<hr>
    						<li>
    						<b>Head office :</b> 905, 25 Yeonmujang 5 ga-gil, Seongsu 2-ga 3-dong, Seongdong-gu, Seoul, Korea
    						</li>
    						<br>
    						<li>
    							<b>India office :</b>  1st Floor, 66/1, Hobli, Siddapura, Varthur, Bengaluru, Karnataka 560066, India
    						</li>
    						<br>
						<li>
						
							<b>General Enquiry :</b> <br> <a href="#">info@reseachmentor.co.kr , cro@reserachmentor.co.kr</a>
							<br>
							<b>Statistical inquiry :</b> <br> <a href="#">stats@researchmentor.co.kr</a>
						</li>
   				
   					<br>
   					
   					<li>
   						 <b>Telephone : </b> 1522-4821 
   					</li>
    				</ul>
    			</div>
    			<div class="col-md-4">
    				<ul>
    					<li><h4>CERTIFIED</h4></li>
    					<hr>
    					<div class="card-deck">
    						<div class="card">
    							<img src="img/c1.png" width="200px" class="card-img-top" alt="">
    						</div>
    						<div class="card">
    							<img src="img/c2.png" width="200px" class="card-img-top" alt="">
    						</div>
    					</div>
    					<br>
    					<div class="card-deck">
    						<div class="card">
    							<img src="img/CDISC-logo.jpg" width="px" class="card-img-top" alt="">
    						</div>
    						<div class="card">
    							<img src="img/c4.png" width="200px" class="card-img-top" alt="">
    						</div>
    					</div>
    					<br>
    					
    				</ul>
    			</div>
    			<div class="col-md-3" id="bro">
    			<ul>
    					<li><h4>BROCHURE</h4></li>
    					<hr>
    				<div class="card-deck">
    					<div class="card">
    					<a href="img/brochure.pdf"><img class="card-img-top" src="img/new-01.png"></a>
    				</div>
    				<div class="card">
    					<a href="img/new2.pdf"><img class="card-img-top" src="img/new-11.png"></a>
    				</div>
    				</div>
					</ul>
    			</div>
    		</div>
    		<hr>
    		<p class="lead" style="font-size: 13px;">
    			<center>Copyright(c) 2019 by Researchmentor.Co.,LTD. All rights reserved.</center>
    		</p>
    	</div>
    </footer>
    
    
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
	  	$('body').scrollspy({ target: '#list-example' })
	  </script>
	         
     <script>
	  	// Params
var sliderSelector = '.swiper-container',
    options = {
      init: true,
      loop: true,
      speed:600,
		
      slidesPerView: 2, // or 'auto'
      // spaceBetween: 10,
      centeredSlides : true,
      effect: 'coverflow', // 'cube', 'fade', 'coverflow',
      coverflowEffect: {
        rotate: 50, // Slide rotate in degrees
        stretch: 80, // Stretch space between slides (in px)
        depth: 100, // Depth offset in px (slides translate in Z axis)
        modifier: 1, // Effect multipler
        slideShadows : true, // Enables slides shadows
      },
      grabCursor: true,
      parallax: false,
    
     
      breakpoints: {
        1250: {
          slidesPerView: 1,
          spaceBetween: 0
        }
      },
      // Events
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        }
      }
    };
var mySwiper = new Swiper(sliderSelector, options);

// Initialize slider
mySwiper.init();
		
	  </script>
       
 
  </body>
</html>