 <template>
   <div>

  <div class="site-wrap">
    <div class="unit-5 overlay pt-0 " >
        <!--header-->
        <headerApp></headerApp>
        <br><br><br><br><br>
      <div class="container text-center content" style="z-index: 1 !important;">
        <h2 class="mb-0 brand">Post a Job</h2>
        <p class="mb-0 unit-6"><router-link to="/" class="text-info">Home</router-link> / <span>Post a Job</span></p>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
            <form @submit.prevent="post()" class="p-5 bg-white">
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Salary Range</label> <br>
<div class="row">
    <div class="col-3">
        <label for="">Currency</label>
        <select v-model="countryM" class="form-control"  name="" id="">
                      <option><b>₦</b></option>
                      <option><b>$</b></option>
                      <option><b>€</b></option>
                      <option><b>₨</b></option>
                      <option><b>₿</b></option>
                      <option><b>₼</b></option>
                      <option><b>₽</b></option>
                      <option><b>₾</b></option>
                      <option><b>₶</b></option>
                      <option><b>₻</b></option>
                      <option><b>₹</b></option>
                      <option><b>௹</b></option>
                      <option><b>₮</b></option>
                      <option><b>¥</b></option>
                      <option><b>₳</b></option>
                      <option><b>₸</b></option>
                      <option><b>৳</b></option>
                      <option><b>֏</b></option>
                      <option><b>₣</b></option>
                      <option><b>₲</b></option>
                      <option><b>₫</b></option>
                      <option><b>₱</b></option>
                      <option><b>₭</b></option>
                      <option><b>₰</b></option>
                      <option><b>₪</b></option>
                      <option><b>₺</b></option>
                      <option><b>₷</b></option>
                      <option><b>₠</b></option>
                      <option><b>﷼</b></option>
                      <option><b>៛</b></option>
                      <option><b>૱</b></option>
                      <option><b>₴</b></option> 
                    </select>
    </div>
    <div class="col-9">
        <label for="">Salary</label>
        <select v-model="salary_range" class="form-control"  name="" id="">
                      <option>10,000  to  50,000</option>
                      <option>50,000  to  100,000</option>
                      <option>100,000  to 500,000</option>
                      <option>500,000 and above</option>
                    </select>
    </div>

</div>

                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Job Title <span class="text-danger">*</span> </label>
                  <input maxlength="50" v-model="job_title" required type="text" id="fullname" class="form-control" placeholder="eg. Full Stack Frontend">
                </div>
              </div>

              <div class="row form-group ">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Company email address  <span class="text-danger">*</span> </label>
                  <input maxlength="50" v-model="company_email"  type="email" id="fullname" class="form-control" placeholder="eg. youremail@domain.com" required>
                </div>
              </div>
              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Company <span class="text-danger">*</span> </label>
                  <input maxlength="70" v-model="company"  type="text" id="fullname" class="form-control" placeholder="eg. Facebook, Inc." required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Job Type</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-1"  >
                    <input @change="fullTime" type="radio" id="option-job-type-1" name="job-type"> Full Time
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-2">
                    <input @change="partTime"  type="radio" id="option-job-type-2" name="job-type"> Part Time
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-3">
                    <input @change="freelance"  type="radio" id="option-job-type-3" name="job-type"> Freelance
                    </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-4">
                    <input @change="internship"  type="radio" id="option-job-type-4" name="job-type"> Internship
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-4">
                    <input  @change="termporary"  type="radio" id="option-job-type-4" name="job-type"> Termporary
                  </label>
                </div>

              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Location <span class="text-danger">*</span> </h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" v-model="location" required class="form-control" placeholder="New York City">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12"><h3>Job Description <span class="text-danger">*</span></h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="" v-model="description"  class="form-control" id="" cols="30" rows="5" required></textarea>
                </div>
              </div>


              <div class="row form-group">
                <div class="col-md-12"><h3>Job Requirements <span class="text-danger">*</span></h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="" v-model="requirements"  class="form-control" id="" cols="30" rows="3" required></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                   <button type="submit"   v-if="user.role=='employer'"  class="btn btn-primary shadow py-2 px-4"  data-toggle="modal" data-target='#qemployer'>Post</button>
                    <a  v-if="user.role !='employer'" href="#" class="btn btn-primary shadow py-2 px-4"  data-toggle="modal" data-target='#nemployer'>Post</a>
             <!--not qualify employer-->
             <div class="modal fade" id="nemployer" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-body ">
                            <h5 class="modal-title p-1">Please login as an employer  before you Post</h5>
                            <a href="#footer" class="btn btn-primary shadow btn-sm">Ok</a>
                            <a class="btn shadow btn-sm" data-dismiss="modal"  >Close</a>
                        </div>
                    </div>
                </div>
   </div>


                </div>
              </div>

            </form>
          </div>

          <div class="col-lg-4 d-none d-md-block">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>

            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
              <p><router-link to="/about" class="btn btn-primary shadow py-2 px-4 ">Learn More</router-link></p>
            </div>
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
    import Swal from 'sweetalert2'
    import headerApp from './layout/header'
    import footerApp from './layout/footer'
    export default {
    components:{
    headerApp,
    footerApp,
    },
    data() {
        return {
                countryM:'',
                salary_range:'',
                job_title:'',
                company:'',
                job_type:'',
                location:'',
                description:'',
                requirements:'',
                company_email:'',
                user:{},

        }
    },
    mounted() {
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
         freelance()
          {
            this.job_type="Freelance";
          },
          partTime()
          {
            this.job_type="PartTime";
          },
        fullTime()
          {
            this.job_type="Full Time";
          },
          internship()
          {
            this.job_type="Internship";
          },
          termporary()
          {
            this.job_type="Termporary";
          },


          post()
          {
            const formData = new FormData();
            formData.append('salary_range',this.countryM +" "+ this.salary_range);
            formData.append('job_title',this.job_title);
            formData.append('company', this.company);
            formData.append('location', this.location);
            formData.append('job_type', this.job_type);
            formData.append('description', this.description);
            formData.append('requirements', this.requirements);
            formData.append('company_email', this.company_email);
            axios.post('/postjob', formData).then((res) => {
            this.message('top-end','success',res.data.message,false,1500);
            })

          }
     },

    }
    </script>

