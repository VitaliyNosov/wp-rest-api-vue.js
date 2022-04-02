<template>

  <div class="post">
    <h1>{{ post.title.rendered }}</h1>
      <hr>
        <div v-html="post.content.rendered"></div>
      <hr>
    <router-link to="/zalupok" type="button" class="btn btn-success">Back to all posts</router-link>
  </div>

</template>

<script>
  import server from '@/server';
  // import App404 from '@/components/E404.vue';
  
export default {
    // components: {
    //   App404
    // },
    data(){
      return{
        post: null
      }
    },
    computed: {
      loading(){
        return this.post === null;
      },
      id(){
        return this.$route.params.id;
      }
    },
    created(){
      server.get(`wp/v2/posts/${this.id}`).then(response => {
        this.post = response.data;
        // console.log(response);
      })
      // }).catch(e => {
      //   this.err404 = true;
      // })
    }
  }
</script>

