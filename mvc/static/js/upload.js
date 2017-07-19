class upload{

    //1. 做用户的接口  2.  数据的接口   3.验证
    constructor(){
        this.type="image/jpeg,image/png,image/gif";
        this.size=1024*1024*100;
        this.containerStyle={maxWidth:1200};
        this.selectBtnStyle={width:150,height:40,background:"orange",text:"选择图片",border:"1px solid #ccc",borderRadius:5};
        this.uploadBtnStyle={width:150,height:40,background:"blue",text:"上传图片",border:"1px solid #ccc",borderRadius:5};
        this.PStyle={width:"auto",border:"1px solid #ccc",borderRadius:5};
        this.listStyle={width:100,height:100,background:"#ccc",marginLeft:15,marginRight:15,marginTop:5,marginBottom:5,border:"1px solid #ccc"};
        //放具有数据的列表视图
        this.lists=[];
    }
    createView(params={}) {

        //1. 创建上传的大容器
        this.createContainer(params.container,params.parent,()=>{
            //2. 创建选择按钮
        this.createSelectBtn(params.selectBtn);
        //3. 创建上传按钮
        this.createUploadBtn(params.uploadBtn);
        //4. 创建预览的区间
        this.createP(params.P);
        //5. 创建列表  var obj=this.createList(params.list);
        this.change();
        //6. 注册change事件
        });
    }

    change(){
        var that=this;
        this.selectBtn.onchange=function () {
            that.data=Array.prototype.slice.call(this.files);
            that.check();
        }
    }

    up(url,callback) {
        var that=this;
        this.uploadBtn.onclick = function () {
            if (!url) {
                console.error("必须要传入地址");
                return;
            }

            for (var i = 0; i < that.data.length; i++) {
                var form =new FormData();
                form.append("file", that.data[i]);

                var ajax = new XMLHttpRequest();
                ajax.onload = function () {
                    callback(ajax.response);
                }

                !function (i) {
                    ajax.upload.onprogress=function (e) {
                        var total=e.total;
                        var loaded=e.loaded;
                        var bili=loaded/total*100+"%";
                        var back=that.lists[i].back;
                        back.style.width=bili;
                    }
                }(i)

                ajax.open("post", url);
                ajax.send(form);
            }

        }
    }

    //检查
    check(){
        var that=this;
        var temp=[]; //传址
        for(var i=0;i<this.data.length;i++){
            temp[i]=this.data[i];
        }
        for(var i=0;i<temp.length;i++){
            var obj=this.createList();
            var read=new FileReader();
            read.readAsDataURL(temp[i]);
            (function (obj,read) {
                read.onload=function (e) {
                    obj.img.src=e.target.result;
                }
            })(obj,read);

            if(!(temp[i].size<this.size&&this.type.indexOf(temp[i].type)>-1)){
                obj.message.style.display="block";
                obj.message.innerHTML="不符合条件";

                for(var j=0;j<temp.length;j++){
                    if(this.data[i]===temp[j]){
                        this.data.splice(i,1);
                    }
                }
                obj.delBtn.onclick=function () {
                    this.parentNode.parentNode.removeChild(this.parentNode);
                }
            }else{
                this.lists.push(obj);
            }
        }
        for(var i=0;i<this.lists.length;i++){
            this.lists[i].delBtn.index=i;
            this.lists[i].delBtn.onclick=function () {
                this.parentNode.parentNode.removeChild(this.parentNode);
                that.data.splice(this.index,1);
            }
        }
    }

    createContainer(container,parent,callback){
        if(container){
            this.container=container;
            return;
        }
        if(!parent){
            console.error("父容器未设置");
            return;
        }
        this.parent=parent;
        this.container=document.createElement("div");
        this.container.style.cssText="max-width:"+this.containerStyle.maxWidth+"px";
        this.parent.appendChild(this.container);
        callback();
    }
    createSelectBtn(btnEle){
        if(btnEle){
            this.selectBtn=btnEle;
            return;
        }
        var div=document.createElement("div");
        div.style.cssText="width:"+this.selectBtnStyle.width+"px;height:"+this.selectBtnStyle.height+"px;background:"+this.selectBtnStyle.background+";text-align:center;line-height:"+this.selectBtnStyle.height+"px;position:relative";
        var span=document.createElement("span");
        span.innerHTML=this.selectBtnStyle.text;
        var input=this.selectBtn=document.createElement("input");
        input.style.cssText="width:100%;height:100%;position:absolute;left:0;top:0;opacity:0;";
        input.type="file";
        input.accept=this.type;
        input.multiple="multiple";
        div.appendChild(span);
        div.appendChild(input);
        this.container.appendChild(div);
    }

    createUploadBtn(btnEle){
        if(btnEle){
            this.uploadBtn=btnEle;
            return;
        }
        var div=document.createElement("div");
        div.style.cssText="width:"+this.uploadBtnStyle.width+"px;height:"+this.uploadBtnStyle.height+"px;background:"+this.uploadBtnStyle.background+";text-align:center;line-height:"+this.uploadBtnStyle.height+"px;border-radius:"+this.uploadBtnStyle.borderRadius+"px;border:"+this.uploadBtnStyle.border+";cursor:pointer";

        var span=document.createElement("span");
        span.innerHTML=this.uploadBtnStyle.text;
        this.uploadBtn=div;
        div.appendChild(span);
        this.container.appendChild(div);
    }

    createP(ele){
        if(ele){
            return;
        }
        var div=document.createElement("div");
        div.style.cssText="width:auto;height:auto;overflow:hidden;border-radius:"+this.PStyle.borderRadius+"px";
        this.P=div;
        this.container.insertBefore(div,this.uploadBtn);
    }

    //paramsObj 包含paramsObj.src图片的地址  paramsObj.message错误的信息  paramsObj.progress当前的进度百分比
    /*

    * createList 返回值
    * */
    createList(ele){
        if(ele){
            this.list=ele;
            return;
        }
        //1.创建列表容器
        var div=document.createElement("div");
        div.style.cssText="width:"+this.listStyle.width+"px;height:"+this.listStyle.height+"px;float:left;margin-left:"+this.listStyle.marginLeft+"px;margin-right:"+this.listStyle.marginRight+"px;margin-top:"+this.listStyle.marginTop+"px;margin-bottom:"+this.listStyle.marginBottom+"px;position:relative;border:"+this.listStyle.border+"";
        //2.放入图片
        var img=document.createElement("img");
       img.style.cssText="width:100%;height:100%";
        //3.创建进度条
        var progress=document.createElement("div");
        progress.style.cssText="width:100px;height:15px;position:absolute;left:0;bottom:0;border-top:1px solid #ccc";
        //4.创建进度条背景
        var back=document.createElement("div");
        back.style.cssText="width:0%;height:15px;opacity:0.7;background:red";
        progress.appendChild(back);
        //5.创建提示消息
        var message=document.createElement("div");
        message.style.cssText="width:70%;height:20%;position:absolute;left:0;top:0;right:0;bottom:0;margin:auto;display:none;color:red";

        //6.创建删除按钮
        var delBtn=document.createElement("div");
        delBtn.style.cssText = "width:20px;height:20px;position:absolute;right:0;top:0;display:none;font-size:14px;cursor:pointer;color:red";
        delBtn.innerHTML="删除";
        div.appendChild(img);
        div.appendChild(progress);
        div.appendChild(message);
        div.appendChild(delBtn);
        this.P.appendChild(div);

        div.onmouseover=function () {
            delBtn.style.display="block";
        }
        div.onmouseout=function () {
            delBtn.style.display="none";
        }
        return {
            list:div,
            img:img,
            back:back,
            message:message,
            delBtn:delBtn
        }
    }
}