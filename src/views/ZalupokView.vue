<template>
  <div class="about1">
    <div class="container">
      <h1>This is an about page Zalupok</h1>
      <!-- <pre> {{posts}} </pre> -->
      <hr>
      <div class="row">
        <div class="col col-12 col-md-4 mt-3 mb-3" v-for="post in posts" :key="post.id">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{post.title}}</h5>
              <div class="card-test" v-html="post.excerpt"></div>
              <router-link  type="button" class="btn btn-success" :to="`/post/${post.id}`" >Read more</router-link>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>
</template>

<script>
  import server from '@/server';
  
  export default {
    data(){
      return{
        posts: null
      }
    },
    computed: {
      loading(){
        return this.posts === null;
      }
    },
    created(){
      server.get('wp/v2/posts?order=asc').then(response => {
        this.posts = response.data.map(post =>({
          id: post.id,
          title: post.title.rendered,
          excerpt: post.excerpt.rendered,       
        }));
        console.log(response);
      });
    }
  }
  
</script>