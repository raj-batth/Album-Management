<template>
<section id="albums" v-if="albums">
  <div  v-for="album in albums" :key="album.id">
    <Album :album="album"/>
  </div>
</section>
</template>

<script>
import Album from './Album'

export default {
  name: 'Albums',
  components: {
    Album
  },
  props: {
    albums: Array,
  }
}
</script>

<style>
#albums {
  padding: 3rem 1.5rem;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  column-gap: 2rem;
  row-gap: 2rem;
}
@media(max-width: 768px) {
  #albums{
    grid-template-columns: 1fr 1fr;
  }
}
@media(max-width: 500px) {
  #albums{
    grid-template-columns: 1fr;
  }
}
</style>
