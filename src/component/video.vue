<template id="video">
	<div style="margin-top: 0.8rem">
				
			</video>
		<div class="video_con" v-for='item in arr'  >
				<h1>{{item.title}}</h1>
				<img :src="item.img" alt="" class="img"/>
				
				<video :src="item.video" controls="controls"></video>
		</div>
		
			
		
		
		
		<footer class="footer">
			<div>
				<router-link  to='/home' >
					<i class="iconfont icon-yuedu"></i>
					<div class="zi" style="color: #3e85e0;">阅读</div>
				</router-link>
			</div>
			<div>
				<router-link  to='/music' >
					<i class="iconfont icon-icon02"></i>
					<div class="zi">音乐</div>
				</router-link>
			</div>
			<div>
				<router-link  to='/video' >
					<i class="iconfont icon-yinle"></i>
					<div class="zi">视频</div>
				</router-link>
			</div>
		
			<div>
				<router-link to='/meitu'  class='link' >
					<i class="iconfont icon-meitu"></i>
					<div class="zi">美图</div>
				</router-link>
			</div>
		</footer>
		
		
		
	</div>
	
	
</template>


<script type="text/javascript">
	export default{
		name:'video',
		data(){
			return{
				arr:[],
                title:'视频'
			}
		},
		mounted(){
			var _this=this;
            this.$emit('to-content', this.title)
			axios.get('./src/php/fatchVideo.php').then(function(res){
				console.log(res.data)
				_this.arr=res.data
			})
			
			
			
		},
		updated(){
			
				$('.video_con').on('tap',function(){
////				$(this).find('img').css('display','none')
//				$(this).find('img').hide().siblings('img').show()
//				$(this).find('video').show().siblings('video').hide()
////				$(this).find('img').siblings().show()
////				$(this).find('video').siblings().hide()
					
				$(this).addClass('room').siblings().removeClass('room')
				for (var i=0; i<$('.video_con').not(this).find('video').length; i++) {
				
					$('.video_con').not(this).find('video')[i].pause()
				}
				$(this).find('video')[0].play()
			
			})
			
//				for(var i=0;i<_this.arr.length;i++){
//					console.log(_this.arr.length)
//					$('.video_con').not($(this)).find('img').css('display','block')
//			}
			
			
			
		}
		
			
		
		
	}
	
	
</script>


<style type="text/css">
	*{padding:0;margin:0}
	html{font-size: 16px;}
	.header_m{width:100%;height:70px;background-color: #008000;font-size: 30px;position: fixed;top:0}
	.video_con{width:100%;height: 250px;}
	.video_con h1{width:100%;height:30px;line-height: 30px;font-size: 14px;text-align: center;font-weight: normal;color:darkgoldenrod}
	.video_con img{width:100%;height:220px;display: block;}
	.video_con video{display: none;width:100%;height:220px}
	
	.swipe img{width:100%;height:100%;}
	
	.footer{border-top: 1px solid #ccc;height: 44px;position: fixed;bottom: 0;width: 100vw;background: #008000;}
	.footer>div{float: left;width: 25vw;text-align: center;}
	.footer .zi{font-size: 17px !important;color: #666;text-decoration: none;color:#fff}
	.iconfont{font-size: 17px !important;color:#fff}
	.room img{display: none;}
	.room video{display: block;}
</style>