<template>
    <div>
 <div class="site-wrap">

    <div class="unit-5 overlay pt-0" >
           <!-- header -->
          <headerApp></headerApp>
          <br><br><br><br><br>
      <div class="container text-center content" style="z-index: 1 !important;" >
        <h2 class="mb-0 brand">{{job.job_title}}</h2>
        <p class="mb-0 unit-6"><router-link to="/" class="text-info">Home</router-link> / <router-link to="/jobs" class="text-info">Available Jobs</router-link> /  <span>{{job.job_title}}</span></p>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">



            <div class="p-5 bg-white shadow-sm ">

              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-dark h4"><b>{{job.job_title}}</b></h2>
                 <div class="badge-wrap">
                  <span
                                 :class="` text-white
                                 ${(job.job_type=='Full Time') ? 'bg-danger': '' }
                                 ${(job.job_type=='Freelance') ? 'bg-info': '' }
                                 ${(job.job_type=='PartTime') ? 'bg-warning text-dark  ': '' }
                                 ${(job.job_type=='Internship') ? 'bg-secondary': '' }
                                 ${(job.job_type=='Termporary') ? 'bg-success': '' }
                                 ${(job.job_type=='Freelance') ? 'bg-secondary': '' }
                                 badge py-2 px-4`">{{job.job_type}} </span>
                 </div>

               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a :href="`http://www.google.com/search?q=${job.company}`">{{job.company}}</a></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>{{job.location}}</span></div>
               </div>
              </div>

              <p>
                  <h6><b>Description</b></h6>
                  {{job.description}}
             </p>
              <p>
                  <h6><b>Requirements</b></h6>
                  {{job.requirements}}
             </p>
              <p>
                  <h6><b>Salary Range</b></h6>
                  {{job.salary_range}}
              </p>

              <p class="mt-5">
                  <!-- seekers console -->
                    <a v-if="user.role=='jobseeker'" href="#" class="btn btn-primary shadow py-2 px-4"  data-toggle="modal" data-target='#qseekers'>Apply Job</a>
                    <a v-if="user.role !='jobseeker'" href="#" class="btn btn-primary shadow py-2 px-4"  data-toggle="modal" data-target='#nseekers'>Apply Job</a>
                        <!-- qualify seekers-->
                    <div class="modal fade" id="qseekers" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                   <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                           <div class="modal-header">
                                               <h5 class="modal-title">Apply Job</h5>
                                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                       <span aria-hidden="true">&times;</span>
                                                   </button>
                                           </div>
                                           <div class="modal-body">
                                            <form  @submit.prevent="uploadCv()">
                                                <div class="form-group">
                                                <label for="">About you</label>
                                                <textarea class="form-control" name="" id="" rows="3" v-model="about"></textarea>
                                                </div>

                                                    <div class="form-group">
                                                      <label for="exampleFormControlFile1">Upload your CV/Resume</label>
                                                      <input type="file" class="form-control" id="exampleFormControlFile1" placeholder="Upload your CV/Resume in a word document eg. doc,pdf etc"
                                                  accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,.pdf" @change="previewImage">
                                                    </div>

                                                <button type="submit" class="btn btn-primary shadow">Submit</button>
                                                <button type="button" class="btn btn-secondary shadow" data-dismiss="modal">Close</button>
                                              </form>
                                           </div>
                                       </div>
                                   </div>
                      </div>
                        <!--not qualify seekers-->
                    <div class="modal fade" id="nseekers" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                   <div class="modal-dialog modal-sm" role="document">
                                       <div class="modal-content">
                                           <div class="modal-body ">
                                               <h5 class="modal-title p-1">Please login as a jobseeker before you apply</h5>
                                               <a href="#footer" class="btn btn-primary shadow btn-sm">Ok</a>
                                               <a class="btn shadow btn-sm" data-dismiss="modal"  >Close</a>
                                           </div>
                                       </div>
                                   </div>
                      </div>


              <!-- employers console-->
              <!-- <button   class="btn shadow py-2 px-4" data-toggle="modal" data-target="#employers" >Edit</button>
              <button @click="deletePost()" type="button"   class="btn btn-primary  shadow py-2 px-4">Delete</button> -->
              <!-- Modal -->
              <!-- <div class="modal fade" id="employers" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                  <div class="modal-dialog shadow" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title">Edit Job</h5>
                      </div>
         <div class="modal-body">
           <form  class="p-2  bg-white">
              <div class="row form-group">
                <div class="col-md-12 mb-1 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Salary Range</label> <br>
                    <select v-model="job.salary_range" class="form-control"  name="" id="">
                      <option>{{job.salary_range}}</option>
                      <option>From <b>&#8358;</b>10,000  to  <b>&#8358;</b>49,000</option>
                      <option>From <b>&#8358;</b>50,000  to  <b>&#8358;</b>99,000</option>
                      <option>From <b>&#8358;</b>100,000  to  <b>&#8358;</b>500,000</option>
                      <option><b>&#8358;</b>500,000 and above</option>
                    </select>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Job Title <span class="text-danger">*</span> </label>
                  <input v-model="job.job_title" required type="text" id="fullname" class="form-control" placeholder="eg. Full Stack Frontend">
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Company <span class="text-danger">*</span> </label>
                  <input v-model="job.company"  type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc." required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Job Type</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">

                 <select v-model="job.job_type" class="form-control"  name="" id="">
                      <option selected>{{job.job_type}}</option>
                      <option>Full Time</option>
                      <option>Part Time</option>
                      <option>Freelance</option>
                      <option>Internship</option>
                      <option>Termporary</option>
                    </select>
                </div>

              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location <span class="text-danger">*</span> </h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" v-model="job.location" required class="form-control" placeholder="New York City">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12"><h3>Job Description <span class="text-danger">*</span></h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="" v-model="job.description"  class="form-control" id="" cols="30" rows="5" required></textarea>
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12"><h3>Job Requirements <span class="text-danger">*</span></h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea v-model="job.requirements" name=""  class="form-control" id="" cols="30" rows="3" required></textarea>
                </div>
              </div>


            </form>
             </div>
                <div class="modal-footer">
                    <button   type="button" class="btn shadow btn-secondary" data-dismiss="modal">Close</button>
                    <button @click="post()"  type="button" class="btn shadow btn-primary">Update</button>
                </div>
                      </div>
                  </div>
              </div> -->
            </p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white shadow-sm ">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><router-link to="/about" class="btn btn-primary  py-2 px-4">learn more</router-link></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer -->
    <footerApp id="footer"></footerApp>
    </div>

    </div>
</template>

<script>
    import Swal from 'sweetalert2'
    import headerApp from './layout/header'
    import footerApp from './layout/footer'
    export default {
    components:{
    headerApp,
    footerApp
    },
  data() {
      return {
          job:{},
          user:{},
          about:"",
          resume:"",


      }
  },
  mounted() {
        axios.get(`/showjob/${this.$route.params.name}`).then((result) => {
                this.job = result.data;
        });
       axios.get('/user').then((res) => {
                 this.user = res.data
       });
    },
       methods: {
            message(place,logo,topic,btn,time){
            Swal.fire({
            position: place,
            icon: logo,
            title: topic,
            showConfirmButton: btn,
            timer: time
            })
            },
            deletePost()
            {
              axios.delete(`/deletejob/${this.$route.params.name}`).then((res) => {
                 this.message('top-end','success',res.data.message,false,1500);
                 this.$router.push(`/jobs`);
                })
            },
            previewImage() {
                let input = event.target;
                this.resume= input.files[0];
            },
            uploadCv()
            {
                const formData = new FormData();
                formData.append('full_name', this.user.name);
                formData.append('email', this.user.email);
                formData.append('subject', "CV/Resume");
                formData.append('content', this.about);
                formData.append('attachment', this.resume);
                formData.append('to', this.job.company_email);
                let config = { headers: { 'Content-Type': 'multipart/form-data' } }
                axios.post('/jobcv', formData, config).then((res) => {
                    this.message('top-end','success',res.data.message,false,1500);
                });
            },

      }
    }
    </script>



