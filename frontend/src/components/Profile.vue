<template>
  <div id="profile">
    <div class="photo">
      <img class="profile-photo" :src="profilePicture.img" alt="Profile-Photo">
    </div>
    <div class="desc">
      <h1 class="name">{{profile.name}}</h1>
      <div class="intro">
        <div class="bio">
          <div class="Intro grey-txt-color">
            <h3  class="label">Bio</h3>
            <span class="text-light">
             {{profile.bio}}
            </span>
          </div>
        </div>
        <div class="contact-info grey-txt-color">
          <h3 class="label">Phone</h3>
          <span class="text-pink text-light">{{profile.phone}}</span>
          <h3 class="label">Email</h3>
          <span class="text-pink text-light">{{profile.email}}</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Profile',
  props:{
    profile:Object
  },
  computed: {
    profilePicture () {
      return { 
        img: this.profile.profile_picture && require(`../assets/${this.profile.profile_picture}`)
          // ? Use the following code if data is coming from backend API
        // img: this.profile.profile_picture && this.profile.profile_picture
      }
    }
}
}
</script>

<style>
#profile {
  display: flex;
  justify-content: center;
  background-color: #fff;
  padding: 4rem 5rem;
  border-radius: 0.5rem;
}
.photo {
  width: 200px;
  height: 200px;
  border-radius:50%;
  overflow: hidden;
  flex: none; 
}
.photo .profile-photo {
  width: 100%;
  height: 100%;
}
.desc {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding-left: 2rem;
  /* min-width: 70%; */
}
.desc .intro {
  display: flex;
} 
.desc .intro .contact-info {
  padding-left: 2.5rem;
}

.text-pink {
 color: magenta;
}
@media(max-width: 500px) {
  #profile{
    flex-direction: column;
    align-items: center;
    text-align: justify;
    padding: 1rem 2rem;
  }
  .desc {
    padding: 0;
  }
  .desc .intro {
    flex-direction: column;
  }
  .desc .intro .contact-info{
    padding: 0;
  }
  h1.name{
    margin: 0 auto;
  }
}

</style>
