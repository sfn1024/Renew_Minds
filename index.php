
<!doctype html>
<html lang="en">

<head>
    <!-- ========================= IMPORTS ========================= -->
    <?php include('components/Imports.php'); ?>
    
</head>

<body>
    <!-- ========================= NAVBAR ========================= -->
    <?php include('components/Navbar.php'); ?>

    <style>
      .heading{
        color: #0a4275;
        font-size: 50px;
        margin-top: 30px;
      }

      .display-2{
        font-size: 60px;
      }

      .row span{
        color: #6970dd;
      }
      
      .main-btn{
        display: inline-block;
        padding: 0.625rem 1.875rem;
        line-height: 1.5625rem;
        background-color:#4e57d4;
        border: 0.1875rem solid #4e57d4 ;
        color: white;
        font-size: 1.125rem;
        text-transform: capitalize;
        --box-shadow: 0px 2px 10px -1px rgb(0 0 0 / 19%);
        --transition: all 0.5s ease;
      }
      
      .white-btn{
        padding: 0.625rem 1.875rem;
        line-height: 25px;
        background-color: white;
        border: 0.1875rem solid white;
        color: #4e57d4;
        font-size: 1.125rem;
        text-transform: capitalize;
        box-shadow: 0px 0px 2px 2px #acb1f1;
        --transition: all 0.5s ease;
      }
      
      .main-btn:hover{
        background-color: transparent;
        color: #4e57d4;
      
      }
      
      .white-btn:hover{
        background-color: transparent;
        color: #4e57d4;
        border-color: #4e57d4;
      }
      
      .top-banner{
        width: 100%;
        height: 100vh;
        background: url(./assets/media/home.jpg) no-repeat center ;
        background-size: 100%;
      }

      .home-section-2 {
       padding: 20px 30px 50px;
      }
      
      .home-section-2 .icon-box {
        padding: 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        }
        
        .home-section-2 .icon-box::before {
        content: '';
        position: absolute;
        background: #d9f1f2;
        right: 0;
        left: 0;
        bottom: 0;
        top: 100%;
        transition: all 0.3s;
        z-index: -1;
        }
        
        .home-section-2 .icon-box:hover::before {
        background: #37c3be;
        top: 0;
        border-radius: 0px;
        }
        
        .home-section-2 .icon {
        margin-bottom: 15px;
        }
        
        .home-section-2 .icon i {
        font-size: 48px;
        line-height: 1;
        color: #4e57d4;
        transition: all 0.3s ease-in-out;
        }
        
        .home-section-2 .title {
        font-weight: 700;
        margin-bottom: 15px;
        font-size: 18px;
        color: black;
        }
        
        .home-section-2 .description {
        font-size: 15px;
        line-height: 28px;
        margin-bottom: 0;
        }
        
        .home-section-2 .icon-box:hover .title , .home-section-2 .icon-box:hover .description {
        color: #fff;
        }
        
        .home-section-2 .icon-box:hover .icon i {
        color: #fff;
        }

    </style>

    <!-- ========================= INDEX ========================= -->
    

    <!--section-1 top-banner-->
      <section id="home">
        <div class="container-fluid top-banner">
            <div class="container">
                <div class="row">
                 
                 <div class="col-lg-6 col-md-6" data-aos="fade-down" data-aos-delay="50"> 
                        <h2 class="heading"> WELCOME TO RENEW MINDS &nbsp; <i class="fa-solid fa-heart-pulse text-danger"></i> </h2>
                        <br>
                        <P class="display-2">
                        MAKE YOUR <span>MENTAL HEALTH</span> <br> A PRIORITY</P>
                        
                        <div class="mt-4">
                            <a href="Appoinment.php">
                              <button class="main-btn rounded float-left mt-2">Appointment &nbsp; <i class="fa-solid fa-stethoscope"></i></button>
                            </a>
                            <a href="Contact.php">
                              <button class="white-btn rounded float-left mt-2 ms-lg-4 mt-lg-0 mt-4">Contact Us <i class="fas fa-angle-right ps-3"></i></button>
                            </a>
                        </div>
                    </div>
                 </div> 
                
            </div>
        </div>
    
    </section>
  <main id="main">

    <!--End section-1 top-banner-->
    
    <!-- ======= home-section-2 ======= -->
    <section id="home-section-2" class="home-section-2">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fa-regular fa-face-smile-beam"></i></div>
              <h4 class="title">Accept Your Emotions</h4>
              <p class="description">Embrace your feelings without judgment for emotional well-being.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fa-solid fa-heart-circle-check"></i></div>
              <h4 class="title">Self-Compassion</h4>
              <p class="description">Show kindness to yourself for inner healing and resilience.</p>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fa-solid fa-child-reaching"></i></div>
              <h4 class="title">Identify Your Values</h4>
              <p class="description"> Discover what truly matters to live a meaningful life.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fa-solid fa-hand-fist"></i></i></div>
              <h4 class="title">Recognize Your Strengths</h4>
              <p class="description">Acknowledge your unique abilities to boost confidence and growth.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <br>
    <!-- End home-section-2 -->
    

 
    
    <!-- ========================= FOOTER ========================= -->
    <?php include('components/Footer.php'); ?>

<script src="assets/js/main.js"></script>

</body>
</html>