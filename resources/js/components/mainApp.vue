<template>
    <div class="">
        <!-- Main section -->
           <main>
                <router-view></router-view>
           </main>
    </div>
</template>

<script>
    export default {
              methods: {

        },
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
