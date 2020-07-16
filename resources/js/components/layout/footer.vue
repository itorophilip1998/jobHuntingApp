 <template>
     <div>

    <footer class="site-footer pb-1">
      <div class="container pb-0">
        <div class="row ">
              <div class="col-md-4 col-12 mb-5 mb-lg-0">
                    <h1><router-link to="/" style="color: rgb(145, 138, 138) !important;" class="h2 mb-0">Job<strong class="text-info"  >start</strong></router-link></h1>
<div v-if="user">
    <h3  class="footer-heading " style="opacity:30%" >
        <b>{{user.name}}</b> <br>
        {{user.email}}<br>
        <small>{{user.role}}</small>
      </h3>
<button  @click="logout()"  class="btn-info text-white  w-50 btn-sm btn" >Logout</button>
</div>
<div v-else >
<button data-toggle="modal" data-target="#login"  class="bg-secondary text-white shadow w-50 btn-sm btn mb-2" >Login</button>
<button data-toggle="modal" data-target="#signup"    class="shadow bg-white  w-50 btn-sm btn mb-2 " >Signup</button>
   <h6 class="text-center w-50" >OR</h6>
<button data-toggle="modal" data-target="#signup"    class="shadow btn-primary    w-50 btn-sm btn" >Login with facebook <i class="fa fa-facebook" aria-hidden="true"></i> </button>
</div>

 </div>
<!-- login -->
<div class="modal fade" id="login" data-target="#login"  tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-dark">
                <form @submit.prevent="login()">
                    <h2>Login</h2>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" v-model="loginEmail"  class="form-control py-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" v-model="loginPassword"  class="form-control py-1" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn  shadow btn-primary">login</button>
                    <button data-dismiss="modal" type="submit" class="btn shadow ">Close</button>
                  </form>
            </div>
        </div>
    </div>
</div>

<!-- Signup -->
<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body text-dark">
                <form @submit.prevent="signup()">
                    <h2>Signup</h2>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Full Name</label>
                      <input type="text" v-model="name"  class="form-control py-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" v-model="email"  class="form-control py-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" v-model="password"  class="form-control py-1" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                          <label for="my-select">Role</label>
                          <select v-model="role"  id="my-select" class="custom-select" name="">
                              <option>jobseeker</option>
                              <option>employer</option>
                          </select>
                    </div>
                    <button type="submit" class="btn  shadow btn-primary">Signup</button>
                    <button data-dismiss="modal" type="submit" class="btn shadow ">Close</button>
                  </form>
            </div>
        </div>
    </div>
</div>

          <div class=" col-6 col-md-4  mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Contact Info</h3>
            <ul class="list-unstyled">
              <li>
                <span class="d-block text-white"><i class="fa fa-map-marker" aria-hidden="true"></i> Address</span>
                New York - 2398 10 Hadson Carl Street
              </li>
              <li>
                <span class="d-block text-white">☎ Telephone</span>
                +1 232 305 3930
              </li>
              <li>
                <span class="d-block text-white"><i class="fa fa-envelope" aria-hidden="true"></i> Email</span>
                info@yourdomain.com
              </li>
            </ul>

          </div>

            <div class="col-6 col-md-4 mb-5 mb-lg-0">
                <h3 class="footer-heading mb-4">Company</h3>
                <ul class="list-unstyled">
                    <h5>
                  <li><router-link to="about"><i class="fa fa-users" aria-hidden="true"></i> About</router-link></li>
                  <li><router-link to="contact"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</router-link></li>
                  <li><a  class="btn btn-dark" data-toggle="modal" data-target="#modelId">Admin</a></li>
                </h5>

                  <!--Admin Modal -->
                  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                      <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                              <div class="modal-body text-dark">
                                <form @submit.prevent="admin()">
                                    <h2>Admin Login</h2>
                                    <div class="form-group">
                                      <label for="exampleInputEmail1">Email address</label>
                                      <input type="email" v-model="loginEmail"  class="form-control py-1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1">Password</label>
                                      <input type="password" v-model="loginPassword"  class="form-control py-1" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn  shadow btn-primary">login</button>
                                    <button data-dismiss="modal" type="submit" class="btn shadow ">Close</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                </ul>
              </div>

        </div>
      </div>
      <div class="text-center bg-secondary text-white">
                   2020 <i class="fa fa-copyright" aria-hidden="true"></i>  Jobstart version:1.0 @ jobstart.com
              </div>
    </footer>

     </div>
 </template>

<script>
    import Swal from 'sweetalert2'
    export default {
        data() {
            return {
                user:{},
                loginEmail:'',
                loginPassword:'',
                name:'',
                email:'',
                password:'',
                role:'',
            }
        },
        mounted() {
            axios.get('/user')
                .then((res) => {
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
        logout()
            {
              axios.post('/logout').then((res) => {
                axios.get('/user')
                .then((res) => {
                 this.user = res.data
                 });
                 this.message('top-end','success','logout successfully',false,1500);
              })
            },
        login()
            {
            const formData = new FormData();
            formData.append('email',this.loginEmail);
            formData.append('password', this.loginPassword);
              axios.post('/login',formData).then((res) => {
                axios.get('/user')
                .then((res) => {
                 this.user = res.data
                });
                 this.message('top-end','success','login successfully',false,1500);
              }).catch((err) => {
                this.message('top-end','error','incorrect details',false,1500);
        });
            },
            signup()
            {
            const formData = new FormData();
            formData.append('email',this.email);
            formData.append('name', this.name);
            formData.append('password', this.password);
            formData.append('role', this.role);
              axios.post('/register',formData).then((res) => {
                      axios.get('/user')
                .then((res) => {
                 this.user = res.data
       });
                 this.message('top-end','success','Signup successfully',false,1500);
              }).catch((err) => {
                this.message('top-end','error','incorrect details',false,1500);
        });
            },
            admin()
            {
             window.location=(`/adminuser`);
            }
        }
    }
</script>
