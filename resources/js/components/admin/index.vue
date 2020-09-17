<template>
  <div>

            <main class="mobileView ">
                <br>
                <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading"><i class="fa fa-bell" aria-hidden="true"></i>View Port Notification</h4>
                  <p>Please the view fr the admin view is only visible on laptops and desktop devices</p>
                  <p class="mb-0">Switch of to Lg or Xl devices to view the admin content management system</p>
                </div>
           </main>
            <main class="pcView">
                <router-view></router-view>
           </main>
  </div>
</template>

<script>
export default {
 watch: {
        '$route':{
        handler: (to, from) => {
          document.title = 'JobStartAdmin | '+to.meta.title
        },
         immediate: true
      }
         }
}
</script>

<style scoped>

.mobileView
{
 display: block;
}
.pcView
{
 display: none;
}

@media only screen and (min-width: 1030px) {
.pcView
{
 display: block !important;
}
.mobileView
{
 display: none !important;
}
}
</style>
