
    <template>
        <div>
            <div class="unit-5 overlay pt-0 " >
                <!-- header -->
                <headerApp></headerApp>
                <br><br><br> <br><br> <br>

              <div class="container content  text-center" style="z-index: 1 !important;" >

                <h2 class="mb-0 brand">Recent Jobs</h2>
                <p class="mb-0 unit-6"><router-link to="/" class="text-info">Home</router-link> / <span>Jobs</span></p>
              </div>
            </div>

            <div class="site-section bg-light">
              <div class="container">
                  <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Recent Jobs</h2>
          </div>
          <div class="col-md-3" data-aos="fade" data-aos-delay="200">
            <router-link to="/post" class="btn btn-primary py-3 shadow btn-block"><span class="h5">+</span> Post a Job</router-link>
          </div>
        </div>
              <!--all data -->
                <div class="alldata">
                    <div class="row" data-aos="fade" v-for="getjob in getjobs.data" :key="getjob.id" @click="singleJob(getjob)" style="cursor: pointer;">
                        <div class="col-md-12">
                          <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
                             <div class="mb-4 mb-md-0 mr-5">
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
                                <div class="mr-3"><span class="fl-bigmug-line-portfolio23 "></span> <a href="#">{{getjob.company}}</a></div>
                                <div><span class="fl-bigmug-line-big104"></span> <span>{{getjob.location}}</span></div>
                              </div>
                             </div>
                             <div class="ml-auto">
                                    <!-- <a  title="You have not Apply for the Job yet" href="#" class="text-white btn btn-danger rounded-circle btn-favorite"><span class="icon-heart"></span></a> -->
                                    <a    title="You have Apply for the Job" href="#" class="btn btn-secondary rounded-circle btn-favorite text-gray-500"><span class="icon-heart"></span></a>

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
    footerApp,
    },
    data() {
        return {
            getjobs:{},
            selected:"Choose job type",
            user: {},
            auth: {},

        }
    },
    mounted() {
        this.loadJobs();
         axios.get('/admin/alljobmails?page=1')
                .then((res) => {
                 this.user = res.data
          });
         axios.get('/user')
                .then((res) => {
                 this.auth = res.data
          });
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
computed: {

 }
}
</script>
