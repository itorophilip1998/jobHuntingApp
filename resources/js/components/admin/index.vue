<template>
  <div>
            <main>
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

<style>

</style>
