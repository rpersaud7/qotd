<template>
  <div>
    <div class="text-center">
        <h3 v-if="quoteContent.quote !== ''"> "{{ quoteContent.quote }}" - {{ quoteContent.author }}</h3>
      <button class="btn btn-success" @click="onQuotdClick">
          A Great Day for a Quote!
      </button>
    </div>
  </div>
</template>

<script type="text/babel">
import axios from 'axios';
export default {
  data () {
    return {
        quoteContent: {
          quote: ''
        }
    }
  },
  methods: {
     onQuotdClick() {
      axios.get('http://localhost:8000/api/quotes/quotd',
                {content: this.quoteContent})
                .then((response) => {
                  this.quoteContent = response.data.quotd;
                })
            .catch ((error) => console.log(error))
      this.$nextTick(() => { console.log('updated') })
      }
  }
}
</script>

<style lang="scss">

</style>
    