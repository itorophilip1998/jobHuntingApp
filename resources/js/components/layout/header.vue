 <template>
     <div>



       <header class="site-navbar py-md-1 " role="banner">
            <div class="container">
              <div class="row align-items-center">

                <div class="col-6 col-xl-2 pt-0">
                  <h1 class="mb-0 brand"><router-link to="/" style="color: silver !important;" class="h2 mb-0">Job<strong >start</strong></router-link></h1>
                </div>
                <div class="col-10 col-xl-10 d-none d-md-block  site-navigation " >
                  <nav class="site-navigation text-right "  role="navigation">
                    <ul class="site-menu js-clone-nav mr-auto d-none d-md-block">
                      <li class="active"> <router-link to="/">Home</router-link></li>
                      <li class="has-children">
                        <a href="#">Available Jobs</a>
                        <ul class="dropdown bg-secondary border-0">
                          <li><router-link to="/jobs">Full Time</router-link></li>
                          <li><router-link to="/jobs">Part Time</router-link></li>
                          <li><router-link to="/jobs">Freelance</router-link></li>
                          <li><router-link to="/jobs">Internship</router-link></li>
                          <li><router-link to="/jobs">Termporary</router-link></li>
                        </ul>
                      </li>
                      <li><router-link to="/premium" >Premium</router-link></li>
                      <li><router-link to="/about" >About</router-link></li>
                      <li><router-link to="/contact" >Contact</router-link></li>
                      <li>
                          <router-link to="/jobs" class="rounded bg-primary py-1 px-3  shadow" >Want Job</router-link>
                          <router-link to="/post" class="rounded bg-secondary py-1 px-3  shadow">Post Job</router-link>
                      </li>
                    </ul>
                  </nav>
                </div>


                <div class="col-6 col-xl-2 text-right d-block">

                  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;">
                      <a @click="toggle()" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                        <div class="sidebar">

                        </div>
                </div>

              </div>
            </div>
            </header>

               <!-- sidebar -->
                <div ref="sidebar" @mouseout="cancel()" class="sidebar d-md-none bg-white mr-auto shadows pb-0">
                   <h3 class="text-dark p-1  mt-3" >Job<span class="text-primary">start</span>  <span class="float-right btn mr-2 text-secondary" ref="close"  @click="cancel()">X</span></h3>
                   <hr class="my-0">
                <ul class="pt-3  sidebarScroller">
                    <li class="active"> <router-link class="link"  @click="cancel()" to="/"> <i class="fa fa-home" aria-hidden="true"></i> Home</router-link></li>
                    <li >  <a class="text-primary link" data-target="#my-collapse" data-toggle="collapse" aria-expanded="false" aria-controls="my-collapse"> <i class="fa fa-folder-o" aria-hidden="true"></i> Available Jobs</a></li>
                        <div id="my-collapse" class="collapse pl-4 ">
                            <ul class="border-0" style="padding: 0 !important;">
                                <li @click="cancel()"><router-link class="link"  to="/jobs">Full Time</router-link></li>
                                <li @click="cancel()"><router-link class="link" to="/jobs">Part Time</router-link></li>
                                <li @click="cancel()"><router-link class="link" to="/jobs">Freelance</router-link></li>
                                <li @click="cancel()"><router-link class="link" to="/jobs">Internship</router-link></li>
                                <li @click="cancel()"><router-link class="link" to="/jobs">Termporary</router-link></li>
                              </ul>
                        </div>


                    <li><router-link @click="cancel()" class="link" to="/premium" > <i class="fa fa-money" aria-hidden="true"></i> Premium</router-link></li>
                    <li><router-link @click="cancel()" class="link" to="/about" > <i class="fa fa-info-circle" aria-hidden="true"></i> About</router-link></li>
                    <li><router-link @click="cancel()" class="link" to="/contact" > <i class="fa fa-phone" aria-hidden="true"></i> Contact</router-link></li>
                    <li><router-link @click="cancel()" class="link" to="/jobs" > Want Job</router-link>   </li>
                    <li><router-link @click="cancel()" class="link" to="/post" >Post Job</router-link></li>
                  </ul>
           </div>

           <div class="overlay2" id="overlay" ref="overlay" @click="cancel()" ></div>

     </div>
 </template>

 <script>
    export default {
    data() {
        return {

        }
    },
    methods: {
        toggle()
            {
                this.$refs.sidebar.style.display='block';
                this.$refs.open.style.display='none';
                this.$refs.close.style.display='block';
                this.$refs.overlay.style.display='block';
                document.getElementById("overlay").overlay.style.display='block';
            },
            cancel()
            {
                this.$refs.sidebar.style.display='none';
                this.$refs.open.style.display='block';
                this.$refs.close.style.display='none';
                this.$refs.overlay.style.display='none';
            }
    },

    }
    </script>

