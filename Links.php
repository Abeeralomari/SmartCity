
  <?php include ("include/Connection.php"); $path='./assets';include ("include/header.php"); ?>
<STYle>  #main {
         background: url("./assets/img/4.jpg") top center;
         background-size: contain;
          height: 500px;
    }
    
 .why-us   {    margin: 70px auto;}
 .why-us .content {
    padding: 30px;
    background: #072f5600;
    border-radius: 4px;
    color: #fff;}
 select{        WIDTH: 500PX;
    HEIGHT: 200PX;
    text-align: center;
    border: 2px groove var(--bs-gray-900);;
    border-radius: 10px;
    color: var(--bs-blue);
}
   select OPtion{    padding-top: 15px;    cursor: pointer;
}

    .content .text-center{ width: 505px;
    border: 2px groove wheat;    
    margin-left: 100px;  
      padding: 1px;
    border-radius: 10px;
  }
    </STYle>

  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">
            <div class="">  <h1 style="color:var(--bs-white); padding-bottom: 30px;">LINKS</h1></div>
        <div class="row">
          <div class="col-lg-12">
            <div class="content text-center">
              <div class="text-center" style="margin-left: 200px;">
           <select name="StudentIID[]" multiple id="studentSelect" onchange="redirectToLink(this)">
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
                 <option value="http://localhost/citysmart/smartcity/Links.php">http://localhost/citysmart/smartcity/Links.php</option>
            </select>
            </div>

              <div class="text-center"style="background: var(--bs-gray-500); width: 700px;">
              </div>
            </div>
          </div>
          
         
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section> <!-- End Why Us Section -->
 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include ("include/footer.php");?>

<!-- Dropdown Select Menu -->


<!-- JavaScript to Redirect on Change -->
<script>
function redirectToLink(select) {
    // Get the selected value
    const selectedValue = select.value;

    // Redirect if a value is selected
    if (selectedValue) {
        window.location.href = selectedValue;
    }
}
</script>
