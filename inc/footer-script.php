    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- JS Plugin -->
    <script type="text/javascript" src="assets/vendor/owlcarousel/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.circular-carousel.js"></script>


    <script type="text/javascript" src="assets/vendor/lightGallery/js/lightgallery.js"></script>
    <script type="text/javascript" src="assets/vendor/lightGallery/js/lightgallery.min.js"></script>
    <script type="text/javascript" src="assets/vendor/lightGallery/js/lg-fullscreen.min.js"></script>
    <script type="text/javascript" src="assets/vendor/lightGallery/js/lg-thumbnail.min.js"></script>




    <script type="text/javascript">

      function gal() {
          $(this).lightGallery({
              dynamic: true,
              dynamicEl: [{
                  src: 'assets/images/card/6.jpg',
                  thumb: 'assets/images/card/6.jpg'
              },{
                  src: 'assets/images/card/7.jpg',
                  thumb: 'assets/images/card/7.jpg',
              },{
                src: 'assets/images/card/8.jpg',
                thumb: 'assets/images/card/8.jpg',
              },{
                src: 'assets/images/card/9.jpg',
                thumb: 'assets/images/card/9.jpg',
              }]
          });
      }



    radiobtn1 = document.getElementById('s1');
    radiobtn1.checked = true;
    $("#slide3").addClass("display-none");
    $("#slide4").addClass("display-none");
    $("#slide5").addClass("display-none");
    $("#slide6").addClass("display-none");
    $("#slide7").addClass("display-none");
    $("#slide8").addClass("display-none");

    $("#slide9").addClass("opacity");
    $("#slide2").addClass("opacity");

    function previousfunction() {
      radiobtn1 = document.getElementById('s1');
      radiobtn2 = document.getElementById('s2');
      radiobtn3 = document.getElementById('s3');
      radiobtn4 = document.getElementById('s4');
      radiobtn5 = document.getElementById('s5');
      radiobtn6 = document.getElementById('s6');
      radiobtn7 = document.getElementById('s7');
      radiobtn8 = document.getElementById('s8');
      radiobtn9 = document.getElementById('s9');

      if(radiobtn1.checked == true){
        document.getElementById("slide9").click();
      }

      else if(radiobtn2.checked == true){
        document.getElementById("slide1").click();
      }

      else if(radiobtn3.checked == true){
        document.getElementById("slide2").click();
      }

      else if(radiobtn4.checked == true){
        document.getElementById("slide3").click();
      }

      else if(radiobtn5.checked == true){
        document.getElementById("slide4").click();
      }

      else if(radiobtn6.checked == true){
        document.getElementById("slide5").click();
      }

      else if(radiobtn7.checked == true){
        document.getElementById("slide6").click();
      }

      else if(radiobtn8.checked == true){
        document.getElementById("slide7").click();
      }

      else if(radiobtn9.checked == true){
        document.getElementById("slide8").click();
      }
    }

    function nextfunction() {

      radiobtn1 = document.getElementById('s1');
      radiobtn2 = document.getElementById('s2');
      radiobtn3 = document.getElementById('s3');
      radiobtn4 = document.getElementById('s4');
      radiobtn5 = document.getElementById('s5');
      radiobtn6 = document.getElementById('s6');
      radiobtn7 = document.getElementById('s7');
      radiobtn8 = document.getElementById('s8');
      radiobtn9 = document.getElementById('s9');

      if(radiobtn1.checked == true){
        document.getElementById("slide2").click();
      }

      else if(radiobtn2.checked == true){
        document.getElementById("slide3").click();
      }

      else if(radiobtn3.checked == true){
        document.getElementById("slide4").click();
      }

      else if(radiobtn4.checked == true){
        document.getElementById("slide5").click();
      }

      else if(radiobtn5.checked == true){
        document.getElementById("slide6").click();
      }

      else if(radiobtn6.checked == true){
        document.getElementById("slide7").click();
      }

      else if(radiobtn7.checked == true){
        document.getElementById("slide8").click();
      }

      else if(radiobtn8.checked == true){
        document.getElementById("slide9").click();
      }

      else if(radiobtn9.checked == true){
        document.getElementById("slide1").click();
      }
    }

    function slidefunction(num) {

      radiobtn = document.getElementById(num);
      radiobtn.checked = true;

      $("#slide1").addClass("display-none");
      $("#slide2").addClass("display-none");
      $("#slide3").addClass("display-none");
      $("#slide4").addClass("display-none");
      $("#slide5").addClass("display-none");
      $("#slide6").addClass("display-none");
      $("#slide7").addClass("display-none");
      $("#slide8").addClass("display-none");
      $("#slide9").addClass("display-none");

      $("#slide1").removeClass("opacity");
      $("#slide2").removeClass("opacity");
      $("#slide3").removeClass("opacity");
      $("#slide4").removeClass("opacity");
      $("#slide5").removeClass("opacity");
      $("#slide6").removeClass("opacity");
      $("#slide7").removeClass("opacity");
      $("#slide8").removeClass("opacity");
      $("#slide9").removeClass("opacity");



      if(num == 'slide1'){
        $("#slide1").removeClass("display-none");
        $("#slide2").removeClass("display-none");
        $("#slide9").removeClass("display-none");


        $("#slide9").addClass("opacity");
        $("#slide2").addClass("opacity");
      }

      else if(num == 'slide2'){
        $("#slide2").removeClass("display-none");
        $("#slide1").removeClass("display-none");
        $("#slide3").removeClass("display-none");

        $("#slide1").addClass("opacity");
        $("#slide3").addClass("opacity");
      }

      else if(num == 'slide3'){
        $("#slide3").removeClass("display-none");
        $("#slide2").removeClass("display-none");
        $("#slide4").removeClass("display-none");

        $("#slide2").addClass("opacity");
        $("#slide4").addClass("opacity");
      }

      else if(num == 'slide4'){
        $("#slide4").removeClass("display-none");
        $("#slide3").removeClass("display-none");
        $("#slide5").removeClass("display-none");

        $("#slide3").addClass("opacity");
        $("#slide5").addClass("opacity");
      }

      else if(num == 'slide5'){
        $("#slide5").removeClass("display-none");
        $("#slide4").removeClass("display-none");
        $("#slide6").removeClass("display-none");

        $("#slide4").addClass("opacity");
        $("#slide6").addClass("opacity");
      }

      else if(num == 'slide6'){
        $("#slide6").removeClass("display-none");
        $("#slide5").removeClass("display-none");
        $("#slide7").removeClass("display-none");

        $("#slide5").addClass("opacity");
        $("#slide7").addClass("opacity");
      }

      else if(num == 'slide7'){
        $("#slide7").removeClass("display-none");
        $("#slide6").removeClass("display-none");
        $("#slide8").removeClass("display-none");

        $("#slide6").addClass("opacity");
        $("#slide8").addClass("opacity");
      }

      else if(num == 'slide8'){
        $("#slide8").removeClass("display-none");
        $("#slide7").removeClass("display-none");
        $("#slide9").removeClass("display-none");

        $("#slide7").addClass("opacity");
        $("#slide9").addClass("opacity");
      }

      else if(num == 'slide9'){
        $("#slide1").removeClass("display-none");
        $("#slide9").removeClass("display-none");
        $("#slide8").removeClass("display-none");

        $("#slide1").addClass("opacity");
        $("#slide8").addClass("opacity");
      }

    }







    </script>
