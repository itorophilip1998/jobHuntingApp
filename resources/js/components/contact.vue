<template>
    <div>

  <div class="site-wrap">

 <!-- header -->
    <div class="unit-5 overlay pt-0 ">
         <headerApp></headerApp>
            <br> <br> <br> <br> <br>
      <div class="container text-center content" style="z-index: 1 !important;"  >
        <h2 class="mb-0  brand">Contact Us</h2>
        <p class="mb-0 unit-6"><router-link to="/" class="text-info">Home</router-link> / <span>Contact</span></p>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-12 col-lg-8 mb-5">

            <form @submit.prevent="send()" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input v-model="full_name"  type="text" id="fullname" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input v-model="email"  type="email" id="email" class="form-control" placeholder="Email Address">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Subject</label>
                  <input v-model="subject" type="text" id="subject" class="form-control" placeholder="Enter Subject">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label>
                  <textarea v-model="content"  name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <button @click="send()" type="submit" class="btn btn-primary  py-2 px-4">Send</button>
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
              <p><router-link to="/about" class="btn btn-primary shadow  py-2 px-4">Learn More</router-link></p>
            </div>
          </div>
        </div>
      </div>
    </div>


   <!-- header -->
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
    },
    data() {
        return {
                full_name:'',
                email:'',
                subject:'',
                content:'',
        }
    },
     methods: {
          send()
          {
            const formData = new FormData();
            formData.append('full_name',this.full_name);
            formData.append('email',this.email);
            formData.append('subject', this.subject);
            formData.append('content', this.content);
            axios.post('/contactmail', formData).then((res) => {
            this.message('top-end','success',res.data.message,false,1500);
            })

          }
     },
    }
    </script>

