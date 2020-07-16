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
    <div id="breadcrumb"> <router-link to="/dashboard" title="Go to Home" class="tip-bottom" style="padding-right:2px;color:royalblue"><i class="icon-home"></i>Home</router-link> / Profile</div>
  </div>

<!--Action boxes-->

  <div class="container-fluid">
    <div class="quick-actions_homepage">
        <div class="widget-box" >
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Admin Profile</h5>
          </div>
              <div style="text-align: justify;padding:2px 10px;">
                  <h5>Admin Name</h5>
                  <p>{{adminusers.name}}</p>
                  <hr>
                  <h5>Admin Email Address</h5>
                  <p>{{adminusers.email}}</p>
                  <hr>
                  <h5>Role</h5>
                  <p>{{adminusers.role}}</p>
                  <hr>
                  <button class="btn btn-primary" style="border-radius: 5px;" data-toggle="modal" data-target="#modelId">Change Password</button>

                  <!-- Modal -->
                  <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                      <div class="modal-dialog " role="document">
                          <div class="modal-content">

                              <div class="modal-body">
                                  <h5>Change Password</h5>
                                  <hr>
                                    <div class="form-group">
                                      <h6 class="font-weight-bold" for="email">Old Password</h6>
                                      <input v-model="oldpassword" style="padding:16px !important;border-radius:10px;width:100% !important"  type="password" id="subject" class="form-control" placeholder="Enter old password">
                                  </div>
                                    <div class="form-group">
                                      <h6 class="font-weight-bold" for="email">New Password</h6>
                                      <input v-model="newpassword"  style="padding:16px !important;border-radius:10px;width:100% !important" type="password" id="subject" class="form-control" placeholder="Enter old password">
                                  </div>
                                    <div class="form-group">
                                      <h6 class="font-weight-bold" for="email">Confirm Password</h6>
                                      <input v-model="confirmpassword" style="padding:16px !important;border-radius:10px;width:100% !important"  type="password" id="subject" class="form-control" placeholder="Enter old password">
                                  </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" style="border-radius: 5px;"  @click="changePassword(adminusers.id)">Save Changes</button>
                                        <button class="btn btn-secondary" style="border-radius: 5px;" data-dismiss="modal">Close</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <br>
                  <br>
              </div>
        </div>

    </div>

  </div>
</div>

<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12" style="color: aliceblue;">
    <div class="text-center bg-secondary">
        2020 <i class="fa fa-copyright" aria-hidden="true"></i>  JobstartAdmin version:1.0 @ jobstart.com
   </div>
 </div>
</div>
  </div>

</template>

<script>
    import Swal from 'sweetalert2'
    export default {
    data() {
        return {
            adminusers:{},
            singleuser:{},
            oldpassword:'',
            newpassword:'',
            confirmpassword:'',
        }
    },
    mounted() {
        this.loadUser();
    },
     methods: {
        changePassword(id)
        {
            const formData = new FormData();
            formData.append('oldpassword',this.oldpassword);
            formData.append('newpassword',this.newpassword);
            formData.append('confirmpassword', this.confirmpassword);
            formData.append('admin_id', id);
            formData.append('_method', 'PUT');
            axios.post(`/admin/changepassword/${id}`, formData).then((res) => {
            this.message('top-end','success',res.data.message,false,1500);
            })
        },
        message(place,logo,topic,btn,time){
            Swal.fire({
            position: place,
            icon: logo,
            title: topic,
            showConfirmButton: btn,
            timer: time
        })
        },
        deletejob(data)
        {
            axios.delete(`/admin/deleteuser/${data.id}`)
                .then((res) => {
                 this.loadUser();
                 this.message('top-end','success',res.data.message,false,1500);
              });
        },
        viewjob(data)
        {
            this.singleuser=data;
        },
        loadUser(page=1) {
        axios.get('/admin/adminprofile?page=' + page)
                .then((res) => {
                 this.adminusers = res.data
              });
       }
     }
    }
    </script>

<style lang="scss">
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
.pagination
{
li.page-item
{
    list-style-type: none !important;
    display: inline;
    border:1px solid royalblue;
    border-radius:20px;
    padding:5px 2px;
    margin:0 3px;
    cursor: pointer !important;
   }
   li.page-item:hover
   {
       background-color: royalblue;
       color:white;
   }
   .page-link
   {
     color:royalblue;
     padding:5px 3px;

   }
   .page-link:hover
   {
    color:white;
   }
}
</style>

