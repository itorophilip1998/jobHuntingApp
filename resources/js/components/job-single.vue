<template>
    <div>
 <div class="site-wrap">

    <div class="unit-5 overlay pt-0" >
           <!-- header -->
          <headerApp></headerApp>
          <br><br><br><br><br>
      <div class="container text-center content" style="z-index: 1 !important;" >
        <h2 class="mb-0 brand d-md-block d-none">{{job.job_title}}</h2>
        <h4 class="mb-0 brand d-md-none d-block">{{job.job_title}}</h4>
        <p class="mb-0 unit-6"><router-link to="/" class="text-info">Home</router-link> / <router-link to="/jobs" class="text-info">Available Jobs</router-link> /  <span>{{job.job_title}}</span></p>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">


            <div class="p-md-5 p-1 bg-white shadow-sm ">
              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h4 class="mr-3 text-dark h4"><b>{{job.job_title}}</b></h4>
                 <div class="badge-wrap ">
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
               <div class="job-post-item-body d-block d-md-flex ">
                 <div class=" mr-md-3"><span class="fl-bigmug-line-portfolio23"></span> <a :href="`http://www.google.com/search?q=${job.company}`">{{job.company}}</a></div>
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
                                               <h5 class="modal-title p-1">Please login as a jobseeker before you apply,scroll down to login</h5>
                                               <button  class="btn btn-primary shadow btn-sm" data-dismiss="modal">
                                                    Ok
                                                </button>
                                               <a class="btn shadow btn-sm" data-dismiss="modal"  >Close</a>
                                           </div>
                                       </div>
                                   </div>
                      </div>



            </p>
            </div>
          </div>

          <div class="col-lg-4 d-none d-md-block">
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



