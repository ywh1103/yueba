<template id="list">
	<div>

		<div style="margin-top: 0.8rem">
			<div>
				<div style="padding:16px;" >
					<img alt="People" :src="tam[0]" style="width:40px;height:40px;float:left">
					<div class="md-title" style="margin-top: 11px!important;font-size:16px!important;font-weight:700!important;">&nbsp;&nbsp;&nbsp;{{tit}}</div>
				</div>
				<div class="md-card-content">
					<p style="padding-top:40px;">
						<a class="img" target="_blank" href="http://www.u148.net/article/141553.html">
							<img alt="来自有意思吧（www.u148.net）" title="万物皆有裂痕，那是光照进来的地方" :src="tam[1]" style='width:343px;height:258px;margin:0 auto;display:block;'>
						</a>
						<p style="display: block;width:263px;height:auto;margin:0 auto;font-weight:400;padding:10px 0">
							<span style='font-size:14px;line-height:22px;'>
								{{pic[0]}}
							</span>
						</p>
						
						<p style='font-size:14px;line-height:22px;width:343px;display:block;margin:0 auto;padding:22px 0;height: auto;'>
							{{pic[1]}}
						</p>
						<a class="img" target="_blank" href="http://www.u148.net/article/141553.html">
							<img alt="来自有意思吧（www.u148.net）" title="万物皆有裂痕，那是光照进来的地方" :src="tam[3]"style='width:343px;height:258px;margin:0 auto;display:block;'>
						</a>
						<p style='font-size:14px;line-height:22px;width:343px;display:block;margin:0 auto;padding:22px 0'>
							{{pic[2]}}
						</p>
						<a class="img" target="_blank" href="http://www.u148.net/article/141553.html">
							<img alt="来自有意思吧（www.u148.net）" title="万物皆有裂痕，那是光照进来的地方" :src="tam[4]"style='width:343px;height:258px;margin:0 auto;display:block;'>
						</a>
						<p style='font-size:14px;line-height:22px;width:343px;display:block;margin:0 auto;padding:22px 0'>
							{{pic[3]}}
						</p>
						
						<p style='font-size:14px;line-height:22px;width:343px;display:block;margin:0 auto;padding:22px 0'>
							{{pic[4]}}
						</p>
						<a class="img" target="_blank" href="http://www.u148.net/article/141553.html">
							<img alt="来自有意思吧（www.u148.net）" title="万物皆有裂痕，那是光照进来的地方" :src="tam[2]"style='width:343px;height:258px;margin:0 auto;display:block;'>
						</a>
					</p>
				</div>
			</div>
		</div>
		
	</div>
</template>

<script>
	import axios from 'axios';
	export default {
		name:'list',
		data(){
			return{
				tam:'',
				pic:'',
				tit:'',
				title:'列表'
			}
		},
		
		mounted(){
            this.$emit('to-content', this.title)
			var a=this.$route.params.id
			console.log(a)
			var _this=this
			axios.get('./src/php/user.php').then(function(response){

//			 	for (var i in response.data){
						
//			 		_this.arr.push(response.data[i])
			 		 console.log(response.data)
               		 console.log(response.data[a])
					_this.tam=response.data[a].img.split(",")
					_this.pic=response.data[a].txt.split(",")
//					console.log(_this.pic)
					_this.tit=response.data[a].name
//			 	}
			  
			 }).catch(function(error){
			    console.log(error);
			  });
		},	
	}
	
</script>

<style>
	.r1{background: #f70938;height: 64px;}
</style>