<template>
  <nav>
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> |
    <router-link to="/pupok">Pupok</router-link> |
    <router-link to="/zalupok">Zalupok</router-link> |
    <router-link to="/wordpress-page">Word Press-Page</router-link>
  </nav>
  <router-view/>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}


.wordpress-page-style{
  width: 100%;
  height: 86.5vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 25px;
  background-color: #42b983;
  color: #fff;
  
}

.content{
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
} 

.card{
  margin-bottom: 50px;
}

</style>


