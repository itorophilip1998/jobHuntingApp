<template>
    <div>


  <div class="site-wrap">

    <!-- header setion -->
    <div class="site-blocks-cover"  data-aos="fade" data-stellar-background-ratio="0.5">
           <headerApp></headerApp>

            <div class="container " >
              <div class="row row-custom align-items-center ">
                <div class="col-md-10">
                  <h1 class="mb-2 text-white brand w-75 rounded-lg content" ><span class="font-weight-bold ">Your Dream</span> <br> Job is Waiting</h1>
                  <div class="job-search">
                    <ul class="nav nav-pills mb-3 " id="pills-tab" role="tablist">
                      <li class="nav-item bg-white rounded-lg mr-2  ">
                        <a class="nav-link active py-3" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="true">Find A Job</a>
                      </li>
                      <li class="nav-item bg-white rounded-lg">
                        <router-link to="/post" class="nav-link py-3 " id="pills-candidate-tab" data-toggle="pill" role="tab" aria-controls="pills-candidate" aria-selected="false">Post a Job</router-link>
                      </li>
                    </ul>
                    <div class="tab-content bg-white p-3 p-md-4  rounded" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                        <form action="#" method="post">
                          <div class="row">
                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                              <input type="text" class="form-control shadow" placeholder="job title">
                            </div>
                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                              <div class="select-wrap">
                                <span class="icon-keyboard_arrow_down arrow-down"></span>
                                <select name="" id="" class="form-control shadow">
                                  <option value="">job type</option>
                                  <option value="fulltime">Full Time</option>
                                  <option value="fulltime">Part Time</option>
                                  <option value="freelance">Freelance</option>
                                  <option value="internship">Internship</option>
                                  <option value="internship">Termporary</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                              <input type="text" class="form-control shadow form-control-block search-input" id="autocomplete" placeholder="Location" onFocus="geolocate()">
                            </div>
                            <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                              <input type="submit" class="btn btn-primary shadow btn-block" value="Search">
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
    </div>

    <div class="site-section bg-light pt-md-3">
        <br class="d-block  d-md-none  "> <br class=" d-block  d-md-none"> <br class="d-block  d-md-none">
      <div class="container">
         <!--all data -->
                <div class="alldata ">
                    <div class="row" data-aos="fade" v-for="getjob in getjobs.data" :key="getjob.id" @click="singleJob(getjob)" style="cursor: pointer;">
                        <div class="col-md-12">
                          <div class="job-post-item bg-white rounded-lg  p-4 d-block d-md-flex align-items-center">
                             <div class="mb-4  mb-md-0 mr-5">
                              <div class="job-post-item-header d-flex align-items-center">
                                <h2 class="mr-3 text-dark h4"> <b>{{getjob.job_title}}</b> </h2>
                                <div class="badge-wrap">
                                 <span
                                 :class="`text-white
                                 ${(getjob.job_type=='Full Time') ? 'bg-danger': '' }
                                   ${(getjob.job_type=='Freelance') ? 'bg-info': '' }
                                  ${(getjob.job_type=='PartTime') ? 'bg-warning text-dark  ': '' }
                                 ${(getjob.job_type=='Internship') ? 'bg-secondary': '' }
                                 ${(getjob.job_type=='Termporary') ? 'bg-success': '' }
                                 ${(getjob.job_type=='Freelance') ? 'bg-secondary': '' }
                                 badge py-2 px-4`">{{getjob.job_type}} </span>
                                </div>
                              </div>
                              <div class="job-post-item-body d-block d-md-flex">
                                <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">{{getjob.company}}</a></div>
                                <div><span class="fl-bigmug-line-big104"></span> <span>{{getjob.location}}</span></div>
                              </div>
                             </div>

                             <div class="ml-auto">
                               <a href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>
                               <a href="#" class="btn btn-primary py-2">Apply Job</a>
                             </div>
                          </div>

                        </div>
                       </div>
                </div>
                <!-- pagination -->
               <div class="row mt-5">
                  <div class="text-center col-md-12">
                    <pagination  :data="getjobs" @pagination-change-page="loadJobs"></pagination>
                  </div>
                </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">Why Job<strong>start</strong> </h2>
          </div>
        </div>
        <div class="row hosting">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-portfolio23"></span>
                </div>
                <h2 class="h5">Search Millions of Jobs</h2>
              </div>
              <div class="unit-3-body">
                <p>
                     With more than 25 million jobs listed on Indeed, a great job description can help your jobs stand out from the rest.
                   </p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="200">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-big104"></span>
                </div>
                <h2 class="h5">Location Search</h2>
              </div>
              <div class="unit-3-body">
                <p>It does not matter where you are living or where you want to apply for the job,We locate you to the job,where you like</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="300">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-airplane86"></span>
                </div>
                <h2 class="h5">Post Jobs</h2>
              </div>
              <div class="unit-3-body">
                <p>We create awarness to the jobseekers,by allowing an employer who need employees to post jobs for jobseekers to apply.</p>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="400">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user144"></span>
                </div>
                <h2 class="h5">Premium Users</h2>
              </div>
              <div class="unit-3-body">
                <p>An employer or jobseeker is limited to post/apply jobs five(5) times, but when you go premium you can post/apply Millions of jobs</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="500">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-clipboard68"></span>
                </div>
                <h2 class="h5">Easy To Manage Jobs</h2>
              </div>
              <div class="unit-3-body">
                <p>Crafting a compelling job description is essential to helping you attract the most qualified candidates for your job</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="600">

            <div class="unit-3 h-100 bg-white">

              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user143"></span>
                </div>
                <h2 class="h5">Online Reviews</h2>
              </div>
              <div class="unit-3-body">
                <p>Your job descriptions are where you start marketing your company and your job to your future hire</p>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>


    <div class="site-section" style="background: whitesmoke;">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>


        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                    How does a jobseeker knows he/she is selected<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>A jobseeker Knows that he/she is selected when the company notify the concern via email address he/she registered in the the app</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to register?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>A user have to register to be able to create jobs or apply for job, which means you can either login the app as an employer to post jobs or as a jobseeker to apply for the job</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Below(footer) or above(header) the app you will see a contact us link and you click, it will navigate to contact us form where your fill in the details you need and write you complain and send, immediately we will the compny will reply your request</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>

      </div>
    </div>

    <footerApp></footerApp>
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
 ,
    data() {
        return {
            getjobs:{},
            selected:"Choose job type",
            search: "",

        }
    },
    mounted() {
        this.loadJobs();
    },
    methods: {
        singleJob(getjob)
        {
          this.$router.push(`/job/${getjob.id}`);
        },
       loadJobs(page=1) {
        axios.get('/getjobs?page=' + page)
                .then((res) => {
                 this.getjobs = res.data
       });
    },
},
}
</script>
