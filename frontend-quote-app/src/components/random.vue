<template>
  <div>
    <div class="text-center">
    <h3 v-if="quoteContent.quote !== ''"> "{{ quoteContent.quote }}" - {{ quoteContent.author }}</h3>
      <button class="btn btn-success" @click="onRandomClick">
          Quoth the Random Raven
      </button>
    </div>
  </div>
</template>

<script type="text/babel">
import axios from 'axios';
export default {
    data() {
        return {
            quoteContent: {
                quote: ''
            }
        }
    },
    methods: {
        onRandomClick() {
            axios.get('http://localhost:8000/api/quotes/random',
                    {content: this.quoteContent})
                    .then((response) => {
                        this.quoteContent = response.data.random;
                    })
                .catch ((error) => console.log(error))
            this.$nextTick(() => console.log('updated'))
        }
    }
}
</script>