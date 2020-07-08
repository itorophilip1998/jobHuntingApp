 <template>
   <div>

  <div class="site-wrap">
    <div class="unit-5 overlay pt-0 " >
        <!--header-->
        <headerApp></headerApp>
        <br><br><br><br><br>
      <div class="container text-center" style="z-index: 1 !important;">
        <h2 class="mb-0 brand">Go Premium</h2>
        <p class="mb-0 unit-6"><router-link to="/" class="text-info">Home</router-link> / <span>premium</span></p>
      </div>
    </div>




    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
        <div class="col-lg-4">
             <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Terms and Conditions</h3>
              <p>To Go premium,you will have access to so many jobs opportunity and apply them anytime as an employee and also have access to more than 5 jobs opportunity,you will also have access as an employer to drop more than 5 jobs opportunity</p>
              <p><a href="#" class="btn btn-primary  shadow py-2 px-4">Agree</a> <a href="#" class="btn btn-default shadow  py-2 px-4">Decline</a> </p>
            </div>
          </div>

          <div class="col-md-12 col-lg-8 mb-5">
             <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-price-1">
                    <input type="checkbox" id="option-price-1"> <span class="text-success">$300</span> For 30 days
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-price-2">
                    <input type="checkbox" id="option-price-2"> <span class="text-success">$200</span> / Monthly Recurring
                  </label>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Job Title</label>
                  <input type="text" id="fullname" class="form-control" placeholder="eg. Full Stack Frontend">
                </div>
              </div>

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Company</label>
                  <input type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc.">
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12"><h3>Job Type</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-1">
                    <input type="radio" id="option-job-type-1" name="job-type"> Full Time
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-2">
                    <input type="radio" id="option-job-type-2" name="job-type"> Part Time
                  </label>
                </div>

                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-3">
                    <input type="radio" id="option-job-type-3" name="job-type"> Freelance
                    </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-4">
                    <input type="radio" id="option-job-type-4" name="job-type"> Internship
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-4">
                    <input type="radio" id="option-job-type-4" name="job-type"> Termporary
                  </label>
                </div>

              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="New York City">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Job Description</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
                </div>
              </div>


            </form>
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

