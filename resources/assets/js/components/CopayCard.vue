<template>

      <div class="uk-width-1-3@m uk-margin-top uk-margin-bottom">
        <div class="uk-card uk-card-default uk-card-hover" style="border-radius: 25px;">
          <div class="uk-card-header">
            <div class="uk-grid-small uk-flex-middle uk-grid uk-padding-collapse">

                  <!-- Show this when the content is live. -->

                  <div class="uk-width-expand" v-show="!editing">
                      <h3 class="uk-card-title uk-margin-remove-bottom">{{ copayCard.brand }}</h3>
                      <p class="uk-text-meta uk-margin-remove-top">{{ copayCard.generic }}</p>
                  </div>

                  <div class="uk-width-expand" v-show="!editing">
                      <h1 class="uk-align-right">${{ copayCard.copay }}</h1>
                  </div>

                  <!-- Show this when the content is being edited. -->

                  <div class="uk-width-expand" v-show="editing">
                      <input class="uk-card-title uk-margin-remove-bottom" style="width: 100%;" type="text" v-model="brand" />
                      <input class="uk-text-meta uk-margin-remove-top" style="width: 100%;" type="text" v-model="generic" />
                  </div>

                  <div class="uk-width-expand" v-show="editing">
                      <input class="uk-card-title uk-align-right" align="right" style="width: 50%; margin-bottom: 25px; text-align: right;" type="text" v-model="copay" />
                  </div>
              </div>
          </div>
          <div class="uk-card-body " style="background-color: #A9CEF4; color: white;">

            <!-- Show this when the content is live. -->

            <p v-show="!editing && !barcode">{{ copayCard.description }}</p>

            <!-- Show this when the content is being edited. -->

            <input v-show="editing && !barcode" style="width: 100%;" type="text" v-model="description" />

            <!-- This is for barcode generation only. Never display. -->
            <textarea v-bind:id="copayCard.brand" class="uk-hidden">
              BIN: {{ copayCard.bin }}
              PCN: {{ copayCard.pcn }}
              GRP: {{ copayCard.group }}
              PID: {{ copayCard.member }}
            </textarea>

            <!-- This is where the coupon details are displayed. -->

            <div class="uk-grid uk-grid-collapse" v-show="barcode">

              <div class="uk-width-1-2 uk-margin-bottom">
                <p><strong>BIN:</strong></p>

                <!-- Show this when the content is live. -->
                <p v-show="!editing">{{ copayCard.bin }}</p>

                <!-- Show this when the content is being edited. -->
                <input v-show="editing" style="width: 100px;" type="text" v-model="bin" />
              </div>

              <div class="uk-width-1-2 uk-margin-bottom  uk-text-right">
                <p><strong>PCN:</strong><br /></p>

                <!-- Show this when the content is live. -->
                <p v-show="!editing">{{ copayCard.pcn }}</p>

                <!-- Show this when the content is being edited. -->
                <input v-show="editing" style="width: 100px; text-align: right;" type="text" v-model="pcn" />
              </div>
            </div>

            <div class="uk-grid uk-grid-collapse" v-show="barcode">

              <div class="uk-width-1-2">
                <p><strong>GRP:</strong></p>

                <!-- Show this when the content is live. -->
                <p v-show="!editing">{{ copayCard.group }}</p>

                <!-- Show this when the content is being edited. -->
                <input v-show="editing" style="width: 100px;" type="text" v-model="group" />
              </div>

              <div class="uk-width-1-2 uk-text-right">
                <p><strong>PID:</strong></p>

                <!-- Show this when the content is live. -->
                <p v-show="!editing" class="uk-padding-collapse">{{ copayCard.member }}</p>

                <!-- Show this when the content is being edited. -->
                <input v-show="editing" style="width: 100px; text-align: right;" type="text" v-model="member" />
              </div>
            </div>

            <!-- Only show this on mobile phones. -->

            <div class="uk-hidden@m uk-hidden@l uk-margin-top" v-bind:id="copayCard.id" ></div>
            </div>

            <div class="uk-grid uk-grid-collapse">
              <div class="uk-width-1-5">
                <!-- Show this when the content is live. -->
                <div v-show="!editing" title="Close" uk-tooltip>
                <button @click.prevent="remove"  uk-icon="icon: close" class="uk-button uk-button-secondary uk-width-1-1" style="border-radius:  0px 0px 0px 25px; padding-left:15px;"></button>
                </div>
                <!-- Show this when the content is being edited. -->
                <div v-show="editing" title="Cancel" uk-tooltip>
                <button @click="cancel" uk-icon="icon: arrow-left" class="uk-button uk-button-secondary uk-width-1-1" style="border-radius:  0px 0px 0px 25px; padding-left:15px;"></button>
                </div>
              </div>

              <div class="uk-width-3-5">
                <!-- Show this when the content is live. -->
                <button v-show="!barcode" @click="generate" class="uk-button uk-button-secondary uk-width-1-1" >Show Coupon</button>

                <!-- Show this when the content is being edited. -->
                <button v-show="barcode" @click="information" class="uk-button uk-button-secondary uk-width-1-1" >Show Info</button>
              </div>

              <div class="uk-width-1-5">
                <!-- Show this when the content is live. -->
                <div v-show="!editing" title="Edit" uk-tooltip>
                <button @click="edit" uk-icon="icon: pencil" class="uk-button uk-button-secondary uk-width-1-1" style="border-radius:  0px 0px 25px 0px ;" ></button>
                </div>

                <!-- Show this when the content is being edited. -->
                <div v-show="editing" title="Save" uk-tooltip>
                <button @click="save" uk-icon="icon: check" class="uk-button uk-button-secondary uk-width-1-1" style="border-radius:  0px 0px 25px 0px ;" ></button>
                </div>
              </div>
            </div>

      </div>

    </div>
</template>

<script>
import axios from 'axios';

export default {

  props: [
    'copayCard'
  ],

  data () {
    return {
      brand: this.copayCard.brand,
      generic: this.copayCard.generic,
      copay: this.copayCard.copay,
      description: this.copayCard.description,
      bin: this.copayCard.bin,
      pcn: this.copayCard.pcn,
      group: this.copayCard.group,
      member: this.copayCard.member,
      editing: false,
      loading: false,
      barcode: false
    }
  },

  methods: {

    remove () {
      console.log('copayCard -> remove');
      this.loading = true;
      axios.delete(`/copayCards/${this.copayCard.id}`)
        .then((response) => {
          console.log('copayCard -> remove success');
          this.$emit('deleted')
          this.loading = false;
        })
        .catch((error) => {
          console.log('copayCard -> remove error');
          // stop deleting and dont remove from the dom
          // tell the user deletion failed
        });
    },

    save () {
      console.log('copayCard -> save');
      axios.put(`/copayCards/${this.copayCard.id}`, {
          brand: this.brand,
          generic: this.generic,
          copay: this.copay,
          description: this.description,
          bin: this.bin,
          pcn: this.pcn,
          group: this.group,
          member: this.member
        })
        .then((response) => {
          console.log('copayCard -> save success');
          this.$emit('updated', {
            copayCard: this.copayCard,
            brand: this.brand,
            generic: this.generic,
            copay: this.copay,
            description: this.description,
            bin: this.bin,
            pcn: this.pcn,
            group: this.group,
            member: this.member
          });
          this.editing = false;
          this.barcode = false;

        })
        .catch((error) => {
          console.log('copayCard -> save error');
          //show the user that it couldn't be updated
        });
    },

    edit () {
      this.editing = true;
      if (this.barcode === true) {
        var container = document.getElementById(this.copayCard.id);
        container.removeChild(container.firstChild);
      }

    },

    cancel () {
      console.log('copayCard -> cancel');
      this.brand = this.copayCard.brand;
      this.generic = this.copayCard.generic;
      this.copay = this.copayCard.copay;
      this.description =this.copayCard.description;
      this.bin =this.copayCard.bin;
      this.pcn = this.copayCard.pcn;
      this.group = this.copayCard.group;
      this.member = this.copayCard.member;
      this.editing = false;
      this.barcode = false;
    },

    information() {
      var container = document.getElementById(this.copayCard.id);
      container.removeChild(container.firstChild);
      this.barcode = false;
    },

    generate() {
      this.barcode = true;
      var textToEncode = document.getElementById(this.copayCard.brand);
      PDF417.init(textToEncode.value);
      var barcode = PDF417.getBarcodeArray();
      // block sizes (width and height) in pixels
      var bw = 2;
      var bh = 2;
      // create canvas element based on number of columns and rows in barcode
      var container = document.getElementById(this.copayCard.id);
      var canvas = document.createElement('canvas');
      canvas.width = bw * barcode['num_cols'];
      canvas.height = bh * barcode['num_rows'];
      canvas.style.width = "100% !important";
      container.appendChild(canvas);
      var ctx = canvas.getContext('2d');
      // graph barcode elements
      var y = 0;
      // for each row
      for (var r = 0; r < barcode['num_rows']; ++r) {
          var x = 0;
          // for each column
          for (var c = 0; c < barcode['num_cols']; ++c) {
              if (barcode['bcode'][r][c] == 1) {
                  ctx.fillRect(x, y, bw, bh);
              }
              x += bw;
          }
          y += bh;
        }
      }
  }

}

</script>

<style>
  canvas {
    width: 100% !important;
  }
</style>
