<template>
    <div class="">
        <!-- Main section -->
           <main  class=" overflow-hidden">
                <router-view></router-view>
           </main>
    </div>
</template>

<script>
    export default {

        mounted() {
            console.log('Component mounted.')
        },
         watch: {
        '$route':{
        handler: (to, from) => {
          document.title = 'JobStart | '+to.meta.title
        },
         immediate: true
      }
         }
         }


</script>
