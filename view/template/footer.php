      </div>
      <div class="">
          
      </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script>
          $(document).ready(function(){
      $('.carousel').carousel();
    });
          // Next slide
            $('.carousel').carousel('next');
            $('.carousel').carousel('next', 3); // Move next n times.
            // Previous slide
            $('.carousel').carousel('prev');
            $('.carousel').carousel('prev', 4); // Move prev n times.
            // Set to nth slide
            $('.carousel').carousel('set', 4);
          $('.carousel.carousel-slider').carousel({full_width: true});
      </script>
    </body>
  </html>