<template>
    <div>

  <div class="site-wrap">
    <div class="unit-5 overlay pt-0" >
        <!-- header -->
        <headerApp></headerApp>
        <br><br><br> <br><br> <br>
      <div class="container text-center content" style="z-index: 1 !important;"   >
        <h2 class="mb-0 brand">About Us</h2>
        <p class="mb-0 unit-6"><router-link to="/" class="text-info" >Home</router-link> / <span>About</span></p>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-5 d-none d-lg-block" data-aos="fade">
            <img src="./images/bg_1.jpg" class="img-md-fluid w-100" alt="Placeholder image">
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="bg-white pl-lg-5 pl-0  pb-lg-5 pb-0">
            <h2 class="font-weight-bold text-black" data-aos="fade">About</h2>
<p>We are a startup with global ambitions and are savvy to realize them.
Jobberman is an online career portal from Nigeria. We place a high premium on
Job search that is relevant and up-to-the-minute.
  The market opportunity is exciting;
 Nigeria is a large country, large working population, and internationally growing.
  Our long-term goal is simple: to be the go-to company for the industry.
  We dont only offer job information services, we are here to build careers.</p>
            <ul class="site-block-check">
              <li>We create awarness to both employers and jobseekers</li>
              <li>We make elevant information goes viral to enlighten people</li>
              <li>We develope</li>
            </ul>
             </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END section -->

    <div class="site-section" style="background-color: whitesmoke;">
      <div class="container ">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-bold text-black " data-aos="fade">Our Team</h2>

          </div>
        </div>
        <div class="row top-destination">
          <div class="col-lg-3 col-md-6 col-12 m-auto" data-aos="fade">
            <a href="#" class="place">
              <img src="./images/person_1.jpg" alt="Image placeholder"     class="rounded-lg shadow  zoom" >
              <h2>Michelle Megan</h2>
              <p>CEO, Co-founder</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-12  m-auto" data-aos="fade">
            <a href="#" class="place">
              <img src="./images/projectM.jpg" alt="Image placeholder" class="rounded-lg shadow zoom" >
              <h2>Mike Stellar</h2>
              <p>Project Manager</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-12  m-auto" data-aos="fade">
            <a href="#" class="place">
              <img src="./images/fullstackDev.jpg" alt="Image placeholder" class="rounded-lg shadow zoom" >
              <h2>Itoro Philip</h2>
              <p>Fullstack Dev</p>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-12  m-auto" data-aos="fade">
            <a href="#" class="place">
              <img src="./images/fullstackdev2.jpg" alt="Image placeholder" class="rounded-lg shadow zoom" >
              <h2>Gideon Moses</h2>
              <p>Fullstack Dev</p>
            </a>
          </div>

        </div>
      </div>
    </div>

    <div class="site-blocks-cover site"  data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-10">
            <h1 class="mb-2 text-black w-75">Get 40% Less For <span class="font-weight-bold">New Employer</span> Job Posts</h1>
            <p class="h3"><router-link to="/post" class="btn btn-primary py-3 px-5">Post a Job</router-link></p>
          </div>
        </div>
      </div>
    </div>


<!-- footer -->
<footerApp></footerApp>
    </div>
    </div>
</template>

   <script>
    import headerApp from './layout/header'
    import footerApp from './layout/footer'
    export default {
    components:{
    headerApp,
    footerApp
    }
    }
    </script>




