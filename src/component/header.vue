<template id="header">
	<div>
		<mt-header :title="title" >
			<router-link to="/" slot="left">
				<mt-button icon="back">返回</mt-button>
			</router-link>
		</mt-header>

		<!--<router-view style="margin-top: 0.69rem;" @to-content="getData">-->

		<!--</router-view>-->
	</div>
</template>

<script>
    export default {
        name: 'header',
		data(){
            return{
			}
		}
    }
</script>

<style>
</style>