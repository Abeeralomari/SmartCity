
  <?php include ("include/Connection.php"); $path='./assets'; include ("include/header.php"); ?>

<style> 
.ticket-button {
    background-color: white;
    color: #1c1c3d;
    font-weight: bold;
    font-size: 18px;
    padding: 15px 30px;
    border: 2px solid white;
    text-align: center;
    text-decoration: none;
    font-family: 'Arial', sans-serif;
    display: inline-block;
    position: relative;
    border-radius: 0;
         border-radius:0%;
}

.ticket-button:before,
.ticket-button:after {
    content: '';
    position: absolute;
    top: 0;
    width: 15px;
    height: 34%;
    margin-top:-3px;
    background-color: #1c1c3d;
}

.ticket-button:before {
    left: -2px;
    border-radius: 0 50% 50% 0;
}

.ticket-button:after {
    right: -2px;
    border-radius: 50% 0% 0% 50%
}
   .button {
    display: inline-block;
    position: relative;
    margin-top: 100px;
}
.button:before,
.button:after {
    content: '';
    position: absolute;
    top: 0;
    width: 15px;
    height: 33%;
    margin-top:42px;
    background-color:#1c1c3d;
}

.button:before {
    left: 0px;
    border-radius: 0 100% 100% 0;
     z-index:1000;

            

}

.button:after {
    right: 0px;
    border-radius: 100% 0% 0% 100%


}
   #main{
            background: url(./assets/img/5.jpg) top center;
            background-size: contain;
        }
.services .icon-box .icon {
background: #343a4082  !important;
    border-radius: 50% !important;}
.services .icon-box {
     width: 82%;
    height: 124px;
    border: none;
    padding: 10px 0px;
    transition: all ease-in-out 0.3s;
    border-radius: 1px;}
.services .icon-box .icon::before {
     content: "";
    position: absolute;
    animation-delay: 0s;
    animation: pulsate-btn 2s;
    animation-direction: forwards;
    animation-iteration-count: infinite;
    animation-timing-function: steps;
    opacity: 1;
    border-radius: 50%;
    top: -15%;
    left: -15%;
    background: rgba(198, 16, 0, 0);
}
.services .icon-box .icon::after {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-40%) translateY(-50%);
    width: 0;
    height: 0;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    border-left: 15px solid #fff;
    z-index: 100;
    transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

</style>

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="add_infor" class="services" style="margin-top:80px;">
      <div class="container">
       <div class="">
              <h1 style="color:var(--bs-white);    padding-bottom: 30px;">VIDEO</h1>
       </div>
     

        <div class="row" style="height: 293px;">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box " style="background: url(./assets/img/1.jpg) top center;background-size: cover;">
             <a href="assets/video/c.mp4" class="icon video-box d-flex justify-content-center align-items-stretch position-relative"></a>
           
             <div class="button">
             <a href="#" class="ticket-button">CLICK HERE</a>
           </div> 
            </div>
            
          </div>
       

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" style="background: url(./assets/img/3.jpg)top center;background-size: cover;">
              <div class="icon" style="background: url(./assets/img/3.jpg) top center;background-size: cover;"></div>
            <div class="button">
                <a href="#" class="ticket-button">CLICK HERE</a>
             </div> 
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box"style="background: url(./assets/img/2.jpg) top center;background-size: cover;">
              <div class="icon" style="background: url(./assets/img/2.jpg) top center;background-size: cover;"></div>
            <div class="button">
              <a href="#" class="ticket-button">CLICK HERE</a>
           </div> 
            </div>
          </div>

          
      </div>

        </div>

      </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php include ("include/footer.php");?>

