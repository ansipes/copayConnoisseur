<template>

  <div>

  <NavBar></NavBar>
  <HeaderImage></HeaderImage>
    <div class="uk-container collection">
      <div class="uk-grid " v-show="copayCards.length > 0">
        <CopayCard v-for="(copayCard, index) in copayCards" :key="index" :copayCard="copayCard" @updated="update" @deleted="remove(index)"></CopayCard>
      </div>
      <transition name="fade">
        <MainLoader v-if="loading"></MainLoader>
      </transition>
      <div id="my-id" uk-modal="center: true">
            <CopayCardForm @created="fetch"></CopayCardForm>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import CopayCard from './CopayCard';
import CopayCardForm from './CopayCardForm';
import MainLoader from './MainLoader';
import NavBar from './NavBar';
import HeaderImage from './HeaderImage';

export default {
  components: {
    CopayCard,
    CopayCardForm,
    MainLoader,
    NavBar,
    HeaderImage
  },

  data () {
    return {
      copayCards: [],
      loading: false
    }
  },

  mounted () {
    this.fetch();
  },

  methods: {

    fetch () {
      console.log('App -> fetch');
      this.loading = true;
      axios.get('/copayCards')
        .then((response) => {
          console.log('App -> fetch success');
          console.log(response.data);
          this.copayCards = response.data;
          this.loading = false;
        })
        .catch((response) => {
          console.log('App -> fetch error');
          // show error
          this.loading = false;
        })
    },

    update (data) {
      // this.fetch();
      var i = this.copayCards.indexOf(data.copayCard);
      for (var d in data) {
        this.copayCards[i][d] = data[d];
      }
    },

    remove (i) {
      console.log(`App -> remove ID: ${i}`);
      this.copayCards.splice(i, 1);
    }

  }
}
</script>

<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s
}
.fade-enter, .fade-leave-to {
  opacity: 0
}
.collection {
  background-color: #f8f8f8;
  padding-bottom: 200px;
}
</style>
