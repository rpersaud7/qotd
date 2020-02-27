import Vue from 'vue'
import App from './App.vue'
import QuotdButton from './components/quotd.vue'
import QuoteRandom from './components/random.vue'

var app = new Vue({
  el: '#app',
  render: h => h(App)
});

var quotd = new Vue({
  el: '#quotdButton',
  render: h => h(QuotdButton)
});

var quoteRandom = new Vue({
  el: '#quoteRandom',
  render: h => h(QuoteRandom)
});
