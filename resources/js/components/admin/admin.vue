 <template>
   <div>

<!--Header-part-->
<div >
    <h3 style="padding:0 7px;"><router-link  style="color: #28b779;" to="/dashboard"> JobStart Admin</router-link></h3>
</div>
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">

</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar">
  <ul>
    <li class=""><router-link to="/dashboard"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Dashboard</span></router-link> </li>
    <li class=""><router-link to="/adminjobs"><i class="fa fa-shopping-bag" aria-hidden="true"></i> <span>Jobs</span></router-link> </li>
    <li class=""><router-link to="/adminusers"><i class="fa fa-users"></i> <span>Users</span></router-link> </li>
    <li class=""><router-link to="/adminemployers"><i class="fa fa-user" aria-hidden="true"></i> <span>Employers</span></router-link> </li>
    <li class=""><router-link to="/jobseekers"><i class="fa fa-inbox" aria-hidden="true"></i> <span>Job Seekers</span></router-link> </li>
    <li class=""><router-link to="/admincontact"><i class="fa fa-envelope" aria-hidden="true"></i> <span>Contact Us Mails</span></router-link> </li>
    <li class=""><router-link to="/adminapplyjobs"><i class="fa fa-envelope-open" aria-hidden="true"></i> <span>Apply Job Mails</span></router-link> </li>
    <li class=""><router-link to="/adminprofile"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span>Profile</span></router-link> </li>
    <li class=""><router-link to="/adminpayment"><i class="fa fa-credit-card" aria-hidden="true"></i> <span>Payment</span></router-link> </li>
    <li class=""><a><i class="fa fa-long-arrow-right" aria-hidden="true"></i><span>Logout</span></a> </li>
  </ul>
</div>
<!--sidebar-menu-->

<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
       <div id="breadcrumb"> <router-link to="/dashboard" title="Go to Home" class="tip-bottom" style="padding-right:2px;color:royalblue"><i class="icon-home"></i>Home</router-link> / Dashboard</div>

  </div>

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions" style="padding: 30px 10px ;">
            <li class="bg_lb span3"> <router-link class="quick-link"  to="/adminjobs"> <i class="fa fa-shopping-bag fa-5x  "></i> <br> <span class="label label-important">20</span>Jobs</router-link> </li>
            <li class="bg_lg span3"> <router-link class="quick-link"  to="/adminusers"> <i class="fa fa-users   fa-5x"></i> <br> Users</router-link> </li>
            <li class="bg_ly span3"> <router-link class="quick-link"  to="/adminemployers"> <i class="fa fa-user  fa-5x "></i> <br><span class="label label-success">101</span> Employers </router-link> </li>
            <li class="bg_lo span3"> <router-link class="quick-link"  to="/jobseekers"> <i class="fa fa-inbox  fa-5x "></i> <br> Jobs Seekers</router-link> </li>
            <li class="bg_ls span3"> <router-link class="quick-link"  to="/admincontact"> <i class="fa fa fa-envelope  fa-5x"></i> <br> Contact Us Mails</router-link> </li>
            <li class="bg_ls span3"> <router-link class="quick-link"  to="/adminapplyjobs"> <i class="fa fa-envelope-open fa-5x  "></i> <br> Apply Job Mails</router-link> </li>
            <li class="bg_lb span3"> <router-link class="quick-link"  to="/adminprofile"> <i class="fa fa-user-circle-o fa-5x"></i> <br>Pofile</router-link> </li>
            <li class="bg_lg span3"> <router-link class="quick-link"  to="/adminpayment"> <i class="fa fa-credit-card  fa-5x "></i> <br> payment</router-link> </li>
            <li class="bg_lr span3"> <a @click="logout()" class="quick-link"> <i class="fa fa-long-arrow-right fa-5x "></i> <br> Logout</a> </li> 
      </ul>
    </div>

  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12" style="color: aliceblue;">
      2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a>
 </div>
</div>
  </div>

</template>

<script>
    export default {

    data() {
        return {
                full_name:'',
                email:'',
                subject:'',
                content:'',
        }
    },
     methods: {
 logout(){
          axios.post('/logout').then((res) => {
                 this.message('top-end','success','logout successfully',false,1500);
                 window.location.reload()
              })
         },
     },
    }
    </script>

<style lang="scss" scoped>
.fa-5x
{
    color: whitesmoke !important;
    font-size: 30px !important;
    margin-top: 10px;

}
.quick-link
{
    color: whitesmoke !important;

}
.span3
{
    border-radius: 15px !important;
    padding: 20px 5px;
}
</style>

