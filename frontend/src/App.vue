<template>
  <div id="app">
    <Profile :profile = "profile"/>
    <Albums :albums = "albums"/>
  </div>
</template>

<script>
import Profile from './components/Profile'
import Albums from './components/Albums'
export default {
  name: 'App',
  components: {
    Profile,
    Albums
  },
  data(){
    return {
      profile:{},
      albums:[]
    }
  },
  mounted: async function() {
    try {
      let response = await this.$http.get('data/landscapes.json'); 
      this.profile = response.data;
      this.albums = response.data.album;     

      //? Code to fetch data from Laravel API
      // let response = await this.$http.get('http://127.0.0.1:8000/api/photographers/2/albums'); 
      // this.profile = response.data.data;
      // this.albums = response.data.data.albums;     
    } catch (error) {
      console.log(error)
    }
  }
}
</script>

<style>
#app {
  margin: 3rem 1.5rem;
}
.text-light{
  font-weight: 300;
}
.grey-txt-color {
 color: #888;
}

</style>
