import Vue from 'vue'
const files = require.context('@/components/render/', true, /\.vue$/i)
files.keys().map(key => {
    console.log(key)
    return Vue.component(key.split('/').pop().split('.')[0], files(key).default)
})
