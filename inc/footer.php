  <footer>
          <div class="container">
            <div class="row">
                 <div class="col-md-3">
                    <div class="fst-box">
                        <img class="logo" src="images/logo.png">
                        <ul>
                          <li><i class="fa fa-user" aria-hidden="true"></i> Lezioni one To One <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                          <li> <i class="fa fa-users" aria-hidden="true"></i> Lezioni di gruppo <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                          <li><i class="fa fa-calendar-o" aria-hidden="true"></i> I nostri corsi <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                          <li> <i class="fa fa-id-card-o" aria-hidden="true"></i> Abbona  menti <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                          <li> <i class="fa fa-cube" aria-hidden="true"></i> Prodotti <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                          <li><i class="fa fa-user" aria-hidden="true"></i> Account <i class="fa fa-angle-right" aria-hidden="true"></i></li>
                        </ul>
                    </div>
                 </div>

                 <div class="col-md-6">
                  <div class="fst-box">
                      <div class="mail"> <i class="fa fa-envelope" aria-hidden="true"></i> info@fabrico.com </div>

                      <ul>
                        <li> Pantatti <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li> Privacy Policy <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li> Cookie Policy <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                        <li> Termini e Condizioni <i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                      </ul>

                  </div>
                 </div>

                 <div class="col-md-3">
                   <div class="scd-box">
                      <ul>
                        <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
                        <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                        <li><i class="fa fa-linkedin" aria-hidden="true"></i></li>
                        <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
                      </ul>
                   </div>
                 </div>

            </div>

            <div class="row mt-5">
              <div class="col-md-12">
                <div class="copyright">
                  <p>2020 © Fabrico Fitness® - P. Iva 05146060289</p>
                  <p>Designed by Fabrico</p>
                </div>
              </div>
            </div>

          </div>
        </footer>  <!--end-footer-->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>

    <script>
      $(document).ready(function(){
        $("button.tgls").click(function(){
          $(".togal-manus").slideToggle();
        });
      });
      </script>
      <script>
        $(document).ready(function(){
          $("button.clos-btn").click(function(){
            $(".togal-manus").slideToggle();
          });
          $("#search_button").on("click", function() {
			$('header').toggleClass('header-active');
			$("#search_field").toggle();
			$(".search-panel").toggle();
          });
        });
        </script>
		
		
		<script>
  jQuery("#carouse3").owlCarousel({
autoplay: true,
lazyLoad: true,
loop: true,
margin: 20,
/*
animateOut: 'fadeOut',
animateIn: 'fadeIn',
*/
responsiveClass: true,
autoHeight: true,
autoplayTimeout: 7000,
smartSpeed: 800,
nav: true,
responsive: {
0: {
items: 1
},

600: {
items: 1
},

1024: {
items: 1
},

1366: {
items: 1
}
}
});
</script>

    <script>
      jQuery("#carouse2").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
    margin: 20,
    /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 7000,
    smartSpeed: 800,
    nav: true,
    responsive: {
    0: {
    items: 1
    },
    
    600: {
    items: 3
    },
    
    1024: {
    items: 2
    },
    
    1366: {
    items: 3
    }
    }
    });
    </script>




  </body>
</html>