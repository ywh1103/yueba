<template id="register">
    <div style="width: 90%;margin: 0.5rem auto;">
        <div class="reg">
            <mt-cell title="" icon="more">
                <mt-field class="hh" icon="more" label="用户名:" type="text" v-model="account"></mt-field>
            </mt-cell>
            <mt-cell title="" icon="more">
                <mt-field class="hh" icon="more" label="手机号:" type="tel" v-model="mobile"></mt-field>
            </mt-cell>

            <mt-cell title="" icon="more" :value="secret">
                <mt-field class="hh" icon="more" label="密码:" type="password" v-model="secret"></mt-field>
            </mt-cell>
            <mt-cell title="" icon="more" :value="secret">
                <mt-field class="hh" icon="more" label="确认密码:" type="password" v-model="sure"></mt-field>
            </mt-cell>
        </div>
        <mt-button style="width: 100%;background: orange;margin-top: 0.5rem;" @click="tap()">注册</mt-button>

    </div>
</template>

<script>
    export default {
        name: 'register',
        data: function () {
            return {
                account: '',
                secret: '',
                mobile: '',
                sure:''
            }
        },
        methods: {
            tap: function () {
                if(this.secret==this.sure){
                    $.ajax({
                        type:"get",
                        url:"http://datainfo.duapp.com/shopdata/userinfo.php",
                        data:{status:"register",userID:this.account,password:this.secret},
                        dataType:"json",
                        success:function (data) {
                            console.log(data)
                            if(data==1){
                                alert("success")
                            }
                            if(data==0){
                                alert("重名用户名")
                            }
                            if(data==2){
                                alert("error")
                            }
                        }
                    })
                }else {
                    alert("两次密码不一致")
                }
            }
        }
    }
</script>

<style>
    .reg {
        border: 1px solid #eee;
        border-radius: 0.05rem;
        overflow: hidden;
        height: 50%;
    }

    /*.hh{border-bottom: 1px solid #eee;}*/

    .mintui-more:before {
        content: "*";
        color: red;
    }
</style>