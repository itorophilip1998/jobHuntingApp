 <template>
   <div>

<!--Header-part-->
<div >
   <h3 style="padding:0 7px;"><router-link  style="color: #28b779;" to="/dashboard"> JobStart Admin</router-link></h3>
</div>
<!--close-Header-part-->


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
    <div id="breadcrumb"> <router-link to="/dashboard" title="Go to Home" class="tip-bottom" style="padding-right:2px;color:royalblue"><i class="icon-home"></i>Home</router-link> / Jobs</div>
  </div>

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Jobs Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Job Title</th>
                  <th>Job Type</th>
                  <th>Location</th>
                  <th style="width: 100px;">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr class="gradeA">
                  <td>Webkit</td>
                  <td>Safari 1.3</td>
                  <td>OSX.3</td>
                  <td class="center">
                      <button href=""   style="padding: 1px 4px;color: royalblue;" > <i class="fa fa-eye" aria-hidden="true"></i> </button>
                      <button href="" style="padding: 1px 5px;color: maroon;"  ><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </td>
                </tr>


              </tbody>
            </table>
          </div>
        </div>
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

