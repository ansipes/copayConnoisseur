<template>

  <div class="uk-modal-dialog" style="background: none;">
  <div class="uk-grid">
        <div class="uk-width-1-3@m uk-margin-top uk-align-center">
          <div class="uk-card uk-card-default" style="border-radius: 25px;">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle uk-grid uk-padding-collapse">

                    <!-- Show this when the content is being edited. -->

                    <div class="uk-width-expand">
                        <input class="uk-card-title uk-margin-remove-bottom" style="width: 100%;" type="text" placeholder="Brand" v-model="brand" />
                        <input class="uk-text-meta uk-margin-remove-top" style="width: 100%;" type="text" placeholder="Generic" v-model="generic" />
                    </div>

                    <div class="uk-width-expand">
                        <input class="uk-card-title uk-align-right" align="right" style="width: 50%; margin-bottom: 25px; text-align: right;" type="text" placeholder="Copay" v-model="copay" />
                    </div>
                </div>
            </div>
            <div class="uk-card-body " style="background-color: #A9CEF4; color: white;">


              <!-- Show this when the content is being edited. -->

              <input style="width: 100%;" type="text" placeholder="Description" v-model="description" />

              <!-- This is where the coupon details are displayed. -->

              <div class="uk-grid uk-grid-collapse" >

                <div class="uk-width-1-2 uk-margin-bottom">
                  <p><strong>BIN:</strong></p>

                  <!-- Show this when the content is being edited. -->
                  <input style="width: 100px;" type="text" placeholder="BIN" v-model="bin" />
                </div>

                <div class="uk-width-1-2 uk-margin-bottom  uk-text-right">
                  <p><strong>PCN:</strong><br /></p>

                  <!-- Show this when the content is being edited. -->
                  <input  style="width: 100px; text-align: right;" type="text" placeholder="PCN" v-model="pcn" />
                </div>
              </div>

              <div class="uk-grid uk-grid-collapse" >

                <div class="uk-width-1-2">
                  <p><strong>GRP:</strong></p>

                  <!-- Show this when the content is being edited. -->
                  <input style="width: 100px;" type="text" placeholder="GRP" v-model="group" />
                </div>

                <div class="uk-width-1-2 uk-text-right">
                  <p><strong>PID:</strong></p>

                  <!-- Show this when the content is being edited. -->
                  <input style="width: 100px; text-align: right;" type="text" placeholder="PID" v-model="member" />
                </div>
              </div>


              </div>

              <div class="uk-grid uk-grid-collapse">
                <div class="uk-width-1-2">

                  <!-- Show this when the content is being edited. -->
                  <div  title="Cancel" uk-tooltip>
                  <button @click="reset" uk-icon="icon: arrow-left" class="uk-button uk-button-secondary uk-width-1-1 uk-modal-close" style="border-radius:  0px 0px 0px 25px; padding-left:15px;"></button>
                  </div>
                </div>

                <div class="uk-width-1-2">

                  <!-- Show this when the content is being edited. -->
                  <div title="Save" uk-tooltip>
                  <button @click="create" uk-icon="icon: check" class="uk-button uk-button-secondary uk-width-1-1 uk-modal-close" style="border-radius:  0px 0px 25px 0px ;" ></button>
                  </div>
                </div>
              </div>

        </div>

      </div>
    </div>
  </div>

</template>

<script>
import axios from 'axios';
import Loader from './Loader';

export default {
  components: {
    Loader
  },

  data() {
    return {
      brand: '',
      generic: '',
      copay: '',
      description: '',
      bin: '',
      pcn: '',
      group: '',
      member: ''
    }
  },

  methods: {
    create () {
      console.log('ContactForm -> create');
      if (this.loading) {
        alert('request is already being made');
        return false;
      }
      this.loading = true;
      this.sendRequest();
    },

    sendRequest () {
      axios.post('/copayCards', {

      })
      .then((response) => {
        console.log('ContactForm -> sendRequest success');
        console.log(response.data);
        this.loading = false;
        this.reset();
        this.$emit('created');
      })
      .catch((error) => {
        console.error('ContactForm -> sendRequest error');
        // show an error message
      });
    },

    reset () {
      this.brand = '';
      this.generic = '';
      this.copay = '';
      this.description = '';
      this.bin = '';
      this.pcn = '';
      this.group  = '';
      this.member = '';
    }
  }
};
</script>

<style scoped>
</style>
