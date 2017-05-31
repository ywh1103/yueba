<template id="home">
	<div >

	<div class="top"  style="margin-top: 0.8rem">
		<ul class="list" v-for="i in arr" >
			<li class="a1">
				<router-link :to="'/list/'+i.my_id">
				<div>
					<div class="left">{{i.my_id}}</div>
					<div class="right">
						<p class="p1">{{i.name}}</p>
						<p class="p2">{{i.intro}}</p>
					</div>
				</div>
				</router-link>
				
			</li>
		</ul>
		
	</div>	
		<router-view></router-view>	
	</div>
</template>

<script>
	import axios from 'axios';
//	import list from 'axios';
	export default {
		name:'home',
		template:'#home',
		data(){
			return{
				ipt:'',
				arr:[],
				title:'阅读'

			}
		},
        created(){
                var _this=this;
            this.$emit('to-content', this.title)
                axios.post('./src/php/user.php')
					.then(function(response){
			    console.log(response);
			 	for (var i in response.data){
//			 		console.log(response.data[i])
			 		_this.arr.push(response.data[i])
			 		
//			 		_this.aa.push(response.data[i].name)
			 	}
			  
			  })
			  .catch(function(error){
			  //  console.log(error);
			  });
		}

	}
</script>

<style>
	*{margin: 0;padding: 0;}
	ul,li{list-style: none;}
	a{text-decoration: none;}
	.r1{background: #f70938;height: 40px !important;}
	.list{ width: 100%;padding:0.3rem 0;}
	.a1{width: 290px; height: 60px;padding: 23px 15px 23px 15px;}
	.left{width: 40px;height: 40px;margin-left: 16px;border-radius: 50%;background:#867c7e; color:#fff;text-align: center;line-height: 40px; float: left;}
	.right{width: 220px;height: 40px;float: right;border-bottom: solid #b2b2b2 1px;}
	.p1{width: 220px;line-height: 20px;font-size: 16px; color: #666;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;}
	.p2{width: 220px; line-height: 20px;font-size: 14px;color: #b2b2b2; white-space: nowrap;overflow: hidden;text-overflow: ellipsis;}
	.top{margin-top: 64px;}
</style>