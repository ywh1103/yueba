<template id="footer">
	<div class="box">
		<mt-tabbar class='bg' style="height: 60px;position: fixed">
			<router-link to="/read" class='a1' >
				<mt-tab-item >
				  	<div @click='tap1'>
				  <img src="src/img/阅读.png" slot="icon" />
				 	  <p>阅读</p>
				  	</div>
				</mt-tab-item>
			</router-link>
		  
		    <router-link to="/music" class='a1' >
				<mt-tab-item>
				  <div @click='tap2'>
				  		<img src="src/img/音乐.png" slot="icon"/>
				    <p>音乐</p>
				  </div>
				</mt-tab-item>
			</router-link>
			
			<router-link to="/video" class='a1'>
				<mt-tab-item>
				 <div @click='tap3'>
				 <img src="src/img/视频.png" slot="icon"/>
				    <p>视频</p>
				  </div>
				</mt-tab-item>
			</router-link>
			
			<router-link to="/img" class='a1' >
				<mt-tab-item>
				  	<div @click='tap4'>
				  	<img src="src/img/图片.png" slot="icon" />
				    	<p>美图</p>
				  	</div>
				</mt-tab-item>
			</router-link>
			
			<router-link to="/my" class='a1' >
				<mt-tab-item>
				<div @click='tap5'>
					<img src="src/img/个人.png" slot="icon" />
				   <p>我的</p>
				</div>
				</mt-tab-item>
			</router-link>
		</mt-tabbar>
	</div>
</template>

<script>

	export default{
		name:'footer',
		methods:{
			tap1:function(){
				$('.bg').css({"background":"#5a5a5a"})
			},
			tap2:function(){
				$('.bg').css({"background":"#5a5a5a"})
			},
			tap3:function(){
				$('.bg').css({"background":"#5a5a5a"})
			},
			tap4:function(){
				$('.bg').css({"background":"#5a5a5a"})
			},
			tap5:function(){
				$('.bg').css({"background":"#5a5a5a"})
			}
		}
		
	}
</script>

<style>	
	.a1{
		display: inline-block;
		flex: 1;
		color: white;
		padding:0 !important;
	}
	.a1 img{margin: 6px 0;}
	a{text-decoration: none;}
	.bg{background: #5a5a5a;}
	.a1 p{text-align: center;}
</style>