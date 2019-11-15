$(function(){
	//日期设置
	function show(){
		var mydate=new Date();
		 var str=mydate.getFullYear()+"年";
		 str+=(mydate.getMonth()+1)+"月";
		 str+=mydate.getDate()+"日";
		 var weekday=["日","一","二","三","四","五","六"];
		 var wd=new Date().getDay();
		 str+="星期"+weekday[wd];
		return str;
	}
	$("#date1 span:eq(0)").text(show());
	var i=1;
	//焦点轮播图
	setInterval(function(){
		if(i==5){
			i=0;
		}
		$("#banner li").eq(i).css("background","url(img/t2.png)").siblings().css("background","url(img/t1.png)");
		$("#banner #size").eq(i).css("display","block").siblings("#size").css("display","none");
		$("#bann img").attr("src","img/"+i+".png");
		$("#b1").html((i+1)+"/5");
		i++;
		},3000)
		$("#banner li").click(function(){
			$(this).css("background","url(img/t2.png)").siblings().css("background","url(img/t1.png)");
			$("#banner #size").eq($(this).index()).css("display","block").siblings("#size").css("display","none");
			$("#bann img").attr("src","img/"+$(this).index()+".png");
			$("#b1").html(($(this).index()+1)+"/5");
			i=$(this).index()+1;
		})
		//左边栏点击箭头及点击样式
		$("#left .zn1,#left .zn2,#left .zn6").click(function(){
			$(this).parent().siblings().children("ul").hide().end().children("a").children("div").css("background","url(img/ibot.png)")
			$(this).addClass("def").parent().siblings().children("a").removeClass("def").css("color","#333333");
			x=1;//解决点击下拉点别的再点下拉不好使
		})
		var x=1;//箭头的判断
		var y;//解决依次点击下拉菜单返回值出错问题
		$("#left div").parent().click(function(){
			if(this!=y){
				$(y).css("color","#333333").next().hide().end().children().css("background","url(img/ibot.png)");
				x=1;
			}
			if(x==1){
				$(this).removeClass("def").css("color","#2566c2").parent().siblings().children("a").removeClass("def").end().end().end().next().show().end().children().css("background","url(img/itop.png)");
				return x=2,y=this;
			}else{
				$(this).css("color","#333333").next().hide().end().children().css("background","url(img/ibot.png)");
				return x=1,y=this;
			}
		})
		//人员职责页
		$(".zn1").click(function(){
			$(".ma1").hide();
			$(".zhize").show();
		})
		$(".zn3").click(function(){
			$(".zhize").hide();
			 $("#context2").hide();
			$("#paging1").show();
		})
		$("#kz a").click(function(){
			$("#kz a").removeClass("eps");
			$(this).addClass("eps");
		})
		//省市局第一税局分局
		var p=1;
		var t;
		$(".fenju").click(function(){
			if(p==1){
				$("#mains #paging").show();
				return p=2,t=this;
			}
			if(p==2){
				$("#mains #paging").hide();
				return p=1,t=this;
			}
		})
		//地区点击获得背景样式
		$("#region li").click(function(){
			$("#region li").css("background","");
			$(this).css("background","#EDF4FF");
		})
		$("#region_ju li").click(function(){
			$("#region_ju li").css("background","");
			$(this).css("background","#EDF4FF");
		})
		$(".renyuan").click(function(){
			$("#paging,#paging1").hide();
			$("#context2").show();
		})
		//人员信息维护弹出遮罩层
		$("#add").click(function(){
			$("#newadd,#zhezhao").show();
		})
		$("#dele").click(function(){
			$("#newadd,#zhezhao").hide();
		})
	})