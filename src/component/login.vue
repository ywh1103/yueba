<template id="login">
	<div style="width: 90%;margin: 0.5rem auto;">
		<div class="login">
			<mt-cell title="" icon="more">
				<mt-field class="hh" icon="more" label="用户名:" type="text" v-model="account"></mt-field>
			</mt-cell>
			<mt-cell title="" icon="more">
				<mt-field class="hh" icon="more" label="密码:" type="password" v-model="secret"></mt-field>
			</mt-cell>
		</div>
		<mt-button style="width: 100%;background: orange;margin-top: 0.5rem;" @click="tap()">登陆</mt-button>
		<router-link to="/register">
			<div class="reg">还没有会员账号？马上去注册</div>
		</router-link>

	</div>
</template>

<script>
    export default {
        name: 'login',
        data: function () {
            return {
                account: '',
                secret: ''
            }
        },
        methods: {
            tap: function () {
                var _this=this;
                $.ajax({
                    type: "get",
                    url: " http://datainfo.duapp.com/shopdata/userinfo.php",
                    data: {status: "login", userID:this.account,password:this.secret},
                    dataType: "json",
                    success: function (data) {
                        if (data == 0) {
                            lert("用户名不存在")
                        }
                        if (data == 2) {
                            alert("账号与密码不符")
                        } else {
                            localStorage.setItem("user",_this.account)
                            alert("登陆成功")
                            _this.$router.push('/my')
                        }
                    }
                })
            }
        }
    }
</script>

<style>
	.login {
		border: 1px solid #eee;
		border-radius: 0.05rem;
	}

	/*.hh{border-bottom: 1px solid #eee;}*/

	.mintui-more:before {
		content: "*";
		color: red;
	}
	.reg{
		border: 1px solid #eee;
		border-radius: 0.05rem;
		height: 1rem;
		text-align: center;
		line-height: 1rem;
		color: #000;
		margin-top: 1rem;
	}
</style>