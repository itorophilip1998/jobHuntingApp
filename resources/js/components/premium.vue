 <template>
   <div>

  <div class="site-wrap">
    <div class="unit-5 overlay pt-0 " >
        <!--header-->
        <headerApp></headerApp>
        <br><br><br><br><br>
      <div class="container text-center content" style="z-index: 1 !important;">
        <h2 class="mb-0 brand">Go Premium</h2>
        <p class="mb-0 unit-6"><router-link to="/" class="text-info">Home</router-link> / <span>premium</span></p>
      </div>
    </div>




    <div class="site-section bg-light">
      <div class="container">
        <div class="row">

          <div class="col-md-8 m-auto mb-5">
              <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Premium Services</h3>
              <p>To Go premium,you will have access to so many jobs opportunities and apply them anytime as an employee and also have access to more than five(5) jobs opportunity,you will also have access as an employer to drop more than five(5) job opportunities in the forum,just apply now and enjoy the unlimited power pack forever...... <br>
            <div class="alert alert-success" role="alert">
                <strong> <i class="fa fa-bell" aria-hidden="true"></i><b>Stop haunting for job,subsribe to get your live job</b></strong>
            </div>
            </p>
                <div class="row">
                    <div class="col-md-6 col-12">
                     <div class="card mt-2 shadow">
                        <img class="card-img-top" src="./images/image_8.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title text-primary">Premium Plan with ₦2,000 </h4>
                            <p class="card-text">This plan is an unlimited plan to post/apply jobs with just ₦2,000 only.</p>
                            <button class="btn-primary  btn shadow">Subscribe Now</button>
                        </div>
                    </div>
                </div>
                    <div class="col-md-6 col-12">
                     <div class="card mt-2 shadow" style="background-color: rgba(0, 0, 0, 0.692);">
                        <img class="card-img-top" src="./images/image_7.jpg" alt="">
                        <div class="card-body text-center">
                            <h4 class="card-title text-warning">Free Plan with ₦0,00</h4>
                            <p class="card-text text-white">This plan is a default plan and a limited plan to post/apply jobs only five(5) times for free.</p>
                            <button class="btn-warning  btn shadow " disabled>free for all users</button>
                        </div>
                    </div>
                </div>
                </div>
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

