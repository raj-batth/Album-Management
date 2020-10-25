<template>
  <div id="album">
    <div class="title-photo" :style="cssProps"><h2>{{album.title}}</h2></div>
    <div class="description">
      <div class="detail">
       {{album.description}}
      </div>
      <div class="like-date">
        <div class="heart"><span v-if="album.featured">&#10084;</span></div>
        <div class="date text-light grey-txt-color">{{album.date}}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Album',
  components: {
  },
  props:{
    album: Object
  },
  data(){
    return{
       cssProps: {
          backgroundImage: `url(${require('@/assets/'+this.album.img)})`
          // ? Use the following code if data is coming from backend API
          // backgroundImage: `url(${this.album.img})`
        }
    }
  }
}
</script>

<style>
#album {
  background-color: #fff;
  border-radius: 1rem;
  overflow: hidden;
}
.title-photo {
  height: 23rem;
  /* background: url(../assets/img/landscape1.jpg) no-repeat; */
  position: relative;
}
h2{
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  color: #fff;
  font-size: 3rem;
}
.description{
  padding: 1.5rem 3rem;
  text-align: justify;
}
.like-date {
  display: flex;
  justify-content: space-between;
  margin-top: 1rem;
}
.heart{
  color: red;
  /* font-size: 2.5rem; */
  
}
</style>
