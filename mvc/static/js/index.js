/**
 * Created by 轻喃 on 2017/6/23.
 */
$(window).load(function () {
    $("#wrapper").css("top", function () {
        return $(".mui-slider").outerHeight() + 82;
    })
    var myScroll;
    myScroll = new IScroll('#wrapper');
    var num=0;
    myScroll.on("scrollEnd", function () {
        if (myScroll.y == 0) {
            $(".load").css("display", "block");
            $.ajax({
                url: "relative.php",
                dataType: "json",
                data: {
                    keywords: $(".mui-table-view-cell>a").attr("relative"),
                    id:$("ul.mui-table-view>li>a").attr("relid"),
                    num:num
                },
                success: function (e) {

                    for (var i = 0; i< e.length;i++){

                        $("<li class='mui-table-view-cell mui-media'>").html(`
                              <a href="show.php?id=${e[i].id}" relid=${e[i].id} relative="${e[i].keywords}">
                            <img class="mui-media-object mui-pull-left" src="../admin/${e[i].imgurl}">
                            <div class="mui-media-body">
                                ${e[i].title}
                                <p class='mui-ellipsis'>${e[i].short}</p>
                             </div>
                         </a>`).prependTo($("ul.mui-table-view"))
                        $(".load").css("display", "none");
                        myScroll = new IScroll('#wrapper');
                    }
                    num=num+3;
                    if(!e.length){
                        $(".load").css("display", "none");
                        $("<div class='kong' style='width: 100%;text-align: center;color: #007aff;'></div>").html("没有更多内容！").prependTo($("#wrapper>.container"));
                        setInterval(function () {
                            $(".kong").css("display", "none")
                        }, 2000);
                    }




                }
            })
        }
        if (myScroll.y == myScroll.maxScrollY) {
            console.log("底部");
        }
    })


    var navbox=$(".navbox");
    var widths=0;
    $(".navbox a").each(function(index,attr){
        widths+=$(attr).outerWidth();
    });
    // 导航的宽为动态生成的宽
    navbox.css("width",widths);

    var left=0;
    //开始拖动时触发函数进行给marginleft赋初值
    mui(".navbox").on("dragstart",".navbox > a",function(e){
        // 触发这个函数的时候 如果导航的marginleft有值的时候：0
        left=navbox.css("marginLeft")?navbox.css("marginLeft"):0;
    })

    mui(".navbox").on("drag" ,".navbox > a",function(e){
        var add=parseInt(left)+e.detail.deltaX;	//将鼠标拖动的距离赋值给
        if(add>0){
            add=0;
        }
        if(add<$(window).width()-navbox.width()){
            add=$(window).width()-navbox.width();
        }
        navbox.css("marginLeft",add+"px");
    });


    $(".setting").click(function () {
        location.href="setting.php";
    })
})