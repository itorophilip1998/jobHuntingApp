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
                  <th style="width: 70px;">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(adminjob, index) in adminjobs.data" :key="index" class="gradeA">
                  <td>{{adminjob.job_title}}</td>
                  <td>{{adminjob.job_type}}</td>
                  <td>{{adminjob.location}}</td>
                  <td class="center" style="text-align: center;">
                      <a @click="viewjob(adminjob)" class="btn" title="View"   style="padding: 1px 4px;color: royalblue;background: white;border: 1px solid lightgray;border-radius: 5px;" data-toggle="modal" data-target="#modelId" > <i class="fa fa-eye" aria-hidden="true"></i> </a>
                      <a @click="deletejob(adminjob)" class="btn" title="Delete" style="padding: 1px 5px;color: rgb(201, 7, 7);background: white;border: 1px solid lightgray;border-radius: 5px;"  ><i class="fa fa-trash" aria-hidden="true"></i></a>

                      <!--View Modal -->
                      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                  <div class="modal-body" style="text-align: justify;">
                                      <h5>{{singlejob.job_title}}

                                      <span
                                      :class="`text-white
                                      ${(singlejob.job_type=='Full Time') ? 'btn-danger': '' }
                                        ${(singlejob.job_type=='Freelance') ? 'btn-info': '' }
                                       ${(singlejob.job_type=='PartTime') ? 'btn-warning text-dark  ': '' }
                                      ${(singlejob.job_type=='Internship') ? 'btn-secondary': '' }
                                      ${(singlejob.job_type=='Termporary') ? 'btn-success': '' }
                                      ${(singlejob.job_type=='Freelance') ? 'btn-secondary': '' }
                                      badge py-2 px-4`">{{singlejob.job_type}} </span>
                                    <hr></h5>


              <p>
                  <h6><i class="fa fa-home" aria-hidden="true"></i> <b>Company Name</b></h6>
                  <a :href="`http://www.google.com/search?q=${singlejob.company}`">{{singlejob.company}}</a>
             </p>
              <p>
                  <h6><i class="fa fa-map-marker" aria-hidden="true"></i> <b>Location</b></h6>
                  {{singlejob.location}}
             </p>
              <p>
                  <h6><i class="fa fa-pencil" aria-hidden="true"></i> <b>Description</b></h6>
                  {{singlejob.description}}
             </p>
              <p>
                  <h6><i class="fa fa-handshake-o" aria-hidden="true"></i> <b>Requirements</b></h6>
                  {{singlejob.requirements}}
             </p>
              <p>
                  <h6><i class="fa fa-money" aria-hidden="true"></i> <b>Salary Range</b></h6>
                  {{singlejob.salary_range}}
              </p>
              <div>
                <button class="btn btn-primary" style="border-radius: 5px;float: right;" data-dismiss="modal">Close</button>
              </div>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
        <!-- pagination -->
        <div class="row mt-5">
            <div class="text-center col-md-12">
              <pagination  :data="adminjobs" @pagination-change-page="loadJobs"></pagination>
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
            adminjobs:{},
            singlejob:{},
        }
    },
    mounted() {
        this.loadJobs();
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
        deletejob(data)
        {
            axios.delete(`/deletejob/${data.id}`)
                .then((res) => {
                 this.loadJobs();
                 this.message('top-end','success',res.data.message,false,1500);
              });
        },
        viewjob(data)
        {
            this.singlejob=data;
        },
       loadJobs(page=1) {
        axios.get('/admin/alljobs?page=' + page)
                .then((res) => {
                 this.adminjobs = res.data
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

