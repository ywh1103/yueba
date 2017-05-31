<template>
  <div id="app">
      <div>
          <mt-header :title="title" fixed>
              <router-link to="/" slot="left" @click.native="tap">
                  <mt-button icon="back">返回</mt-button>
              </router-link>
          </mt-header>
      </div>
	<router-view @to-content="getData" @to-parent="getdata" style="margin-bottom: 1rem"></router-view>

  	<v-footer v-if="isshow"></v-footer>
  	
  </div>
</template>

<script>
    import footer from './component/footer.vue'
		export default {
		  name: 'app',
		  data () {
		    return {
                title:'阅读',
                isshow:true
		    }
		  },
		  components:{
			'v-footer':footer
			},
            methods:{
                getData: function (data) {
                    this.title = data
                },
                getdata:function (res) {
                    this.isshow=res
                },
                tap:function(){
                    this.isshow=true
                }
            }
		}

</script>

<style lang="scss">
    .mint-header{
        background-color: #75797b
    }
    .mintui{
        color: #fff;
    }
</style>
