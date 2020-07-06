 <template>
     <div>
       <header class="site-navbar py-md-1" role="banner">
            <div class="container">
              <div class="row align-items-center">

                <div class="col-6 col-xl-2 pt-0">
                  <h1 class="mb-0 brand"><router-link to="/" style="color: silver !important;" class="h2 mb-0">Job<strong >start</strong></router-link></h1>
                </div>

                <div class="col-10 col-xl-10 d-none d-xl-block  site-navigation " >
                  <nav class="site-navigation text-right "  role="navigation">
                    <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                      <li class="active"> <router-link to="/">Home</router-link></li>
                      <li class="has-children ">
                        <a href="#">Available Jobs</a>
                        <ul class="dropdown bg-secondary border-0">
                          <li><router-link to="/job/Fulltime">Full Time</router-link></li>
                          <li><router-link to="/job/Parttime">Part Time</router-link></li>
                          <li><router-link to="/job/Freelance">Freelance</router-link></li>
                          <li><router-link to="/job/Internship">Internship</router-link></li>
                          <li><router-link to="/job/Termporary">Termporary</router-link></li>
                        </ul>
                      </li>
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

                  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                </div>

              </div>
            </div>


            </header>
     </div>
 </template>
