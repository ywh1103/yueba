<template id="my">

	<div style="margin-top: 0.8rem">
		<div class="tops">
			<router-link to="/login">
				<img class="photo" src="http://1251027630.cdn.myqcloud.com/1251027630/zhichi_frontend/static/webapp/images/default_photo.png">
				<div class="log">{{msg}}</div>
			</router-link>
		</div>
		<router-link to="/register">
			<mt-cell class="fontcolor" title="注册"  is-link value="">
			</mt-cell>
		</router-link>
		<router-link to="/login">
			<mt-cell class="fontcolor" title="登陆" is-link></mt-cell>
		</router-link>
	</div>
	
</template>
<script>
	export default {
		name: 'my',
        data(){
            return{
                msg:'请先登陆',
				user:"",
                title:'我的'
            }
        },
        created:function () {
            this.$emit('to-content', this.title)
            this.user = localStorage.getItem('user');
            if(this.user){
                this.msg='您好  '+ this.user;
            }
        }
	}
</script>

<style>
	.tops{
		margin-top: 0;
		height: 2.2rem;width: 100%;
		background-image: url(http://1251027630.cdn.myqcloud.com/1251027630/zhichi_frontend/static/webapp/images/top_bg.jpg);
		background-size: 100%;
		overflow: hidden;
	}
	.log{
		padding-top: 1rem;color: #fff;font-size: 0.3rem;color: #fff;
		float: left;
	}
	.photo{
		padding: 0.7rem;
		border: 0;
		width: 1rem;
		height:1rem;
		border-radius: 50%;
		vertical-align: middle;
		float: left;
	}
	.photo img{width: 100%;height: 100%}
	.fontcolor{color: #666}
</style>