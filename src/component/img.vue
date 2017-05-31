<template id='img'>

	<div id="i" style="margin-top: 0.8rem">
		<!--容器-->
		<div id="container"></div>
	</div>

</template>

<script>
	
	export default{
		name:'img',
        data(){
            return{
                arr:[],
                title:'图片'
            }
        },
		mounted:function(){
            this.$emit('to-content', this.title)
            for(var num in _videoimg){
                var _img = document.createElement("img");
                _img["src"]=_videoimg[num].img;
                console.log(_img["src"]);
                _img.className = "itemimg";
                var _box =document.createElement("div");
                _box.className = "box";
                var _item = document.createElement("div");
                _item.className = "item";
                _item.appendChild(_img);
                _box.appendChild(_item);
                var conatiner = document.getElementById("container");
                container.appendChild(_box);
            }
            //自动加载项
            window.onload = function(){
                waterflow();
            }
//瀑布流加载
            function waterflow(){
                console.log("222");
                var _container = document.getElementById("container");
                var _boxes = document.getElementsByClassName("box");
                var _clientWidth = document.documentElement.clientWidth;
                var _boxWidth = _boxes[0].offsetWidth;
                var _col = Math.floor(_clientWidth/_boxWidth+1);
                _container.style.width = _col * _boxWidth+"px";
                _container.style.margin = "auto";
                var _arrayRow =[];
                for(var i = 0;i<_boxes.length;i++){
                    if(i<_col){
                        _arrayRow[i] = _boxes[i].offsetHeight;
                        console.log(_arrayRow)
                    }else{
                        var _minHeight = Math.min.apply(null,_arrayRow);
                        var _minIndex = _arrayRow.indexOf(_minHeight);
                        console.log(_minHeight,_minIndex);

                        _boxes[i].style.left = _minIndex * _boxWidth +"px";
                        _boxes[i].style.top = _minHeight + "px";
                        _boxes[i].style.position = "absolute";

                        _arrayRow[_minIndex] += _boxes[i].offsetHeight;
                    }
                }
            }
		}
	}
</script>

<style>
 i{color: red;}
 *{margin: 0;padding: 0;}
 .box{    padding: 5px;
	 float: left;
	 text-align: center;
	 margin: 0;
	 margin-left: -0.2rem;}
 .item{border:solid 1px #aaa;border-radius: 5px;padding: 4px;}
 .item img{width: 2.4rem;
	 height: auto;
	 text-align: center;
	 display: block;
	 border-radius: 5px;}
 #container{position:relative;left:10%;}
</style>