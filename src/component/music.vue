<template id="music">
    <div style="margin-top: 0.8rem">
        <mt-swipe :auto="4000" style="width:100%; height: 150px;">
            <mt-swipe-item style="width:100%; height: 150px;">
                <img style="width:100%; height: 150px;"
                     src="http://p3.music.126.net/koESYfghIkL6EkJhbB5CXw==/19042441881532404.jpg"/>
            </mt-swipe-item>
            <mt-swipe-item style="width:100%; height: 150px;">
                <img style="width:100%; height: 150px;"
                     src="http://p4.music.126.net/vBkaoZbUvlLCTszbSR552A==/18498183627573962.jpg"/>
            </mt-swipe-item>
            <mt-swipe-item style="width:100%; height: 150px;">
                <img style="width:100%; height: 150px;"
                     src="http://p4.music.126.net/7PxgxRjd7hicCpLVA32YYA==/19187577416400499.jpg"/>
            </mt-swipe-item>
            <mt-swipe-item style="width:100%; height: 150px;">
                <img style="width:100%; height: 150px;"
                     src="http://p3.music.126.net/3_iSYvbjOiKeYFmbpYChPA==/18959978509453169.jpg"/>
            </mt-swipe-item>
            <mt-swipe-item style="width:100%; height: 150px;">
                <img style="width:100%; height: 150px;"
                     src="http://p4.music.126.net/L1eJb3xO16G2U5SxSz9MCA==/19113910137342812.jpg"/>
            </mt-swipe-item>
        </mt-swipe>


        <div class="music-nav">
            <router-link to="/play">
                <div class="music-item">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkYxRTU3RDE2MUI3ODExRTc4NjY4Q0Y3MDExNTQzNjgzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkYxRTU3RDE3MUI3ODExRTc4NjY4Q0Y3MDExNTQzNjgzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RjFFNTdEMTQxQjc4MTFFNzg2NjhDRjcwMTE1NDM2ODMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RjFFNTdEMTUxQjc4MTFFNzg2NjhDRjcwMTE1NDM2ODMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7RTQjqAAAI+UlEQVR42uyd/1Xb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"
                         alt="" style="width: 50px;position: absolute;margin-left: 13px; margin-top: 10px;">
                    <p style="font-size: 13px; margin-top: 82px; margin-left: 15px;">私人FM</p>
                </div>
            </router-link>
            <div class="music-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAFPklEQVR42u3d71XiWBjAYdwKKIES6GDpYO1g6EAaMJetYOhAOpAOoAPpQDqADlyS+GFnjuDcJCQ35Pmd834dY24e84fojEaSJEmSJEmSJEmSJEmSJEm6UgiP53kbLZcfFyeE1/NM7ayGyrKnq/s8hOPnPp/YWd3imFyF8fuiqYl9PovY5292WLeLtfjjxSoXbGan1d7ny6h9rh4tFiCAWCxAABEggAgQQAQIIAIEEAFinwMCiH0OSPs7fTp6fv47ekJ4iVqs/BWJKl/HVN/n1b/OZKgYxucD9Uexo0N4j9rZZniTv66SZT/P88+9w5gVL7BZdFMdy7HAcldnlxLG1gKbhrG8FFcjvb6UcsYwtz+jPPX1rHG0iKYlKK/9OZuEMLdoppOb+eR/KQ4O0/UlV7JI4DDpIBmnhmNqcUxil1vjlJ5W+cDPpPcYOBEgawtiEkUy6/5xbv1v4nCeVfESXPknfGYRs478WovIf9/U3+ex//7881jYnOdU89h67xrItsbG72oL9zbv/b/NW4I51DjO5v06e+Q/FZo6UAEZzuvu+VVGr84iVe49ysupaWeLBUi/fx+k6kcJ+aV7B0+ujhXOHNNOFwuQfgMpv/6iApB12zvpMQnFgAwPSLkNm+gPD1veSavoG/IUFguQewEySfuRb37Ap3ANCMgwgVS5B863u7Vi7z1SWSxA7gnIY+Tar1IFsr7hTpoDMlAg8cfhrq0dNEvm1Bb3/4OcHN0tr38I+xtvywGQPznVXrsnKh8vb/wPU43u80Vx8H+/zyfJ3Au39p/5pAZEQ4a6S+ZyDxABAogAAUSAACJAABEggEiASIBIgAAiQAARIA0B2Y6yLBjT+MT+wcIkgRiTygBiDCDGAGIMIMYAYgwgxgACiAEEEAMIIAYQQIzxsqK8rAiIBIgEiAQIIAIEEAECiAABRIAAIkAAESCASIBIgEiASIAAIkAAESCACBBABAggAgQQAQKI7rwHQCRAABEggAgQQAQIIAIEEAECiIYVIBIgEiASIIAIEEAECCACBBB90QMggOgyDkAAESCAqF+XWF41kQABRIAAIkAAESCACBBABAggGliASBFAnp8BkQCRAJEAAUSAACJAABEggKjHQHwOIgEiASIBAogAAUSANAnkwcoKEEAESCSQj48HQATINSAh/GVlBchXQHIcgAiQ/02WASJAABEggAiQxoH8C4gAAUSAACJAbgfE5yAC5BsgPkkXIBeAlAEiQAARINWASIAAIkBiP0mXAAFEgAAiQBoB4o82CBBABAggAgQQAQKIAAFEgAAiQACRAJEAkQABRIAAIkAAESCACBBABAggAuTCcbhva6OmgCgRIO8Rx+GuvQ2LA7KxkroBjnHkcbhrc+NO6V37aWBAHiOBrNK9OQphbkXV8DG4jjwGF21u3DJy496tqDq7Dy6PwWmbGzirsIELK6uGjr9t5LF36mIjTxWQzKyuah53qwrH3bovG3qERJXLshB9zHX2gzmESaWNLf+Y3JPVVsSxNj7Pa0Uch/48Sfj9xj3LfhTfvHTph3B+1sivPKofZ/Nuv4GqG/7rN7EtdoQxJYiX87w1cFztU1C+bASJMU1Pq492ryPZWxCTGI5lWteKVR77GnMbHLs0P92ExHSPY5/ug5/8iQEkBg5nEgNH3XsSN+6mLRyrUS/zCNjcFsah+L2Q3n8aWucTd2O+ejs3/+F7V29hlFBWhXqLbKrfZyzu//Wk/O3K8ifADhjzDYjNJ4qJl9NKOGbYMwVBkiRJkiRJkiRJkiRJku6r/wB3icmC7GrFPQAAAABJRU5ErkJggg=="
                     alt="" style="width: 50px;position: absolute;margin-left: 13px; margin-top: 10px;">
                <p style="font-size: 13px; margin-top: 82px; margin-left: 12px;">每日推荐</p>
            </div>
            <div class="music-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkZCRDUwMDU1MUI3ODExRTc4NjY4Q0Y3MDExNTQzNjgzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZCRDUwMDU2MUI3ODExRTc4NjY4Q0Y3MDExNTQzNjgzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RkJENTAwNTMxQjc4MTFFNzg2NjhDRjcwMTE1NDM2ODMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RkJENTAwNTQxQjc4MTFFNzg2NjhDRjcwMTE1NDM2ODMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5Scy4mAAASR0lEQVR42uyd/3na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"
                     alt="" style="width: 50px;position: absolute;margin-left: 13px; margin-top: 10px;">
                <p style="font-size: 13px; margin-top: 82px; margin-left: 18px;">热歌榜</p>
            </div>
            <div class="music-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMgAAADICAYAAACtWK6eAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkYxRTU3RDFBMUI3ODExRTc4NjY4Q0Y3MDExNTQzNjgzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkZCRDUwMDUyMUI3ODExRTc4NjY4Q0Y3MDExNTQzNjgzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RjFFNTdEMTgxQjc4MTFFNzg2NjhDRjcwMTE1NDM2ODMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RjFFNTdEMTkxQjc4MTFFNzg2NjhDRjcwMTE1NDM2ODMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6f3kE7AAADOElEQVR42uzd/W3aQBjA4XOV/8sIjMAGZYO6E8SdoN2AeALUCegGSSdIRmgnSEbIBu576qEm/UgxUsFwzyO9QlhGQkY/2UicaYZhSMCfvXIIQCAgEBAICAQEAgIBgYBAQCCAQEAgIBAQCAgEBAICAYGAQEAggEBAICAQEAhMwMWx30DT96dyrJYxlzFtzCzmMeYu5lN5ZA/DauUMcuJyDJuY25iuPN9ub8v2zZPtuMSqyrqE8ZKuRIJAqtLtEMdWO2JfBHIWPvzn/RHISX/3WIx8zcJ3EYHUYnHg1yEQEAgIBAQCAgEEAgIBgYBAQCAgEDhdFw4BU9H0ff6hZ/5FdBczL5vzys2bmH5YrR6cQag1jmU83MdcPYkjm5Vg7mOfTiDUGEf+BfR1+vdSgc2hIxEIUzBmTf+6XIoJhCrOHnmp8pg1NNtLLoFQhX0WmLUCoRbzKb85gSAQgYBAQCAgEBAICAQEAgIBgQACAYGAQEAgIBCYIHc1OW/zmLflMS9Muov5GvPFoRFI7VYxH9Pztd7L8vgQ867Egkus6uSbIFylv98IIZ9RbpP/UxRIhbq0200NZiUS/8orkOourXZ10DuECIRjW6Txa7wvHTaB1BTIIV4jEE7S3CEQCAgEBAICAYGAQEAggEBAICAQEAgIBAQCAoHzcNSbNjR9n9civC5Pv8U8+kioPpAIIy8L7dLv6xc+x/Tpx103oK5AIoy8Bvo6/bz9zK9yNPlP4t/H3Ph4qO07yOaFOLZmZT9LQaknkDh7tOXssIscydrHQ01nkG7k/stkjTUVBfJmj9e4zKKaQGYCQSAgEBAICMQhAIGAQEAgIBAQCAgEBAICAYEAAgGBgEBAICAQEAgIBAQCAgGBAAIBgYBAQCAgEBAICAQEAgIBBAICAYGAQEAgIBAQCAgEBAICAQQCAgGBgEBAICAQEAgIBAQCCAQEAgIBgYBAQCAgEBAICAQEAggEBAICAYGAQEAgIBAQCAgEEAgIBAQCAgGBgEBAICAQEAgIBHiuGYbBUQBnEBAICAQEAgIBgYBAQCAgEEAgIBAQCAgEBAICAYGAQEAgIBBAICAQEAgIBAQCE/ZdgAEAd9BJPhq4zZMAAAAASUVORK5CYII="
                     alt="" style="width: 50px;position: absolute;margin-left: 13px; margin-top: 10px;">
                <p style="font-size: 13px; margin-top: 82px; margin-left: 18px;">排行榜</p>
            </div>
        </div>

        <div style="margin-top: 10px;margin-left: 10px;" class="tj">

            <div style="border-left-width: 4px;border-left-style: solid;border-left-color: teal;">
                <strong style="padding-left: 5px; font-size: 16px;">推荐歌曲</strong>
            </div>

            <div style="width: 100%;height: auto;margin-top: 0.2rem;">
                <ul v-for="(i,index) in hotArr" class="zzul">
                    <router-link :to="'/play/'+index">
                        <li style="float: left; margin-right: 0.2rem;margin-bottom: 0.2rem;">
                            <div class="musicImgDiv">
                                <img style="width: 100%;height: 100%;border: none;" class="musicImg"
                                     :src="i.albumpic_small"/>
                            </div>
                            <p class="musicMsg">{{i.singername}}</p>
                            <p class="musicMsg">{{i.songname}}</p>
                        </li>
                    </router-link>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
    import {Indicator} from 'mint-ui';
    export default{
        name: 'music',
        data: function () {
            return {
                title: 'Music',
                hotArr: []
            }
        },
        mounted(){
            this.$emit('to-content', this.title)
            var _this = this;
            axios.post("http://route.showapi.com/213-4?showapi_appid=38800&showapi_sign=2276e54dcd1a4518876f714e6e4d9294&topid=5&")
                .then(function (response) {
                    _this.hotArr = response.data.showapi_res_body.pagebean.songlist;
                    console.log(_this.hotArr)
//                    for (var i=0;i<10;i++){
//                    _this.hotArr.push(response.data.showapi_res_body.pagebean.songlist)
//                    }
                })
                .catch(function (err) {
                    console.log('----' + err);
                });
        },
        methods: {
//            loadMore() {
//                this.loading = true;
//                setTimeout( ()=> {
//                    var last = this.hotArr[this.hotArr.length - 1];
//                    for (let i = 1; i <= 2; i++) {
//                        this.hotArr.push(last++);
//                        console.log(last)
//                    }
//                    this.loading = false;
//                },2000)
//            }

        }
    }
</script>

<style>
    .music-nav {
        width: 100%;
        margin-top: 15px;
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }
    .music-nav a{
        color: #000;
    }

    .music-item {
        width: 24%;
        box-sizing: border-box;
        height: 75px;
        border: 1px solid teal;
        display: inline-block;
        border-radius: 50%;
    }

    .musicImgDiv {
        width: 1.86rem;
        height: 1.7rem;
        background: #000;
    }

    .musicMsg {
        width: 1.86rem;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-size: 0.23rem;
        margin-top: 0.05rem;
        -webkit-box-orient: vertical; /** 设置或检索伸缩盒对象的子元素的排列方式 **/
        line-clamp: 2;
    }
    .zzul a p{
        color: #000;
    }
</style>