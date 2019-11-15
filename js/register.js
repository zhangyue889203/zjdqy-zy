$(function(){
	var succ;
	$(".zc input:eq(0)").on("blur",function(){
		if($(this).get(0).value.length>10 || $(this).get(0).value.length<2){
		$(this).next().text("*请输入正确用户名2~10个字符").css("color","#e00")
		}else{
			$.ajax({
				type:"POST",
				url:"php/data.php",
				data:{username:$(".zc input:eq(0)").val()},
				dataType:"json",
				success:function(data){
					if (data.status=="20001") {
						$(".zc span:eq(0)").text(data.msg).css("color","#e00");
						succ="100";
					}else{
						$(".zc span:eq(0)").text(data.msg).css("color","#06b806");
						succ="200";
					}
				}
			})
		};
		if($(this).get(0).value.length==""){
			$(".zc span:eq(0)").text("*请填写2~10字符").css("color","#999")
		};
	});
	$(".zc input:eq(1)").on("blur",function(){
		if($(this).get(0).value.length>16 || $(this).get(0).value.length<6){
			$(this).next().text("*密码格式不正确").css("color","#e00")
		}else{
			$(this).next().text("*密码格式正确").css("color","#06b806")
		};
	});
	$(".zc input:eq(1)").on("focus",function(){
		$(this).next().text("*请填写6~16字符，可以是字母、数字或下划线").css("color","#999")
	});
	$(".zc input:eq(2)").on("blur",function(){
		if ($(".zc input:eq(2)").val()==$(".zc input:eq(1)").val() && $(".zc input:eq(2)").val()!="") {
		$(".zc span:eq(2)").text("*密码输入正确").css("color","#06b806")
	}else{
		$(".zc span:eq(2)").text("*两次密码不一致").css("color","#e00")
	}
	})
	$(".zc input:eq(2)").on("focus",function(){
		$(this).next().text("*请再次填写密码").css("color","#999")
	});
	$(".zc input:eq(3)").on("blur",function(){
		if($(this).val()!=""){
			$(this).next().text("*邮箱格式正确").css("color","#06b806")
		}else{
			$(this).next().text("*请正确输入邮箱格式").css("color","#e00")
		}
	})
	$(".zc input:eq(3)").on("focus",function(){
		$(this).next().text("*请填写正确邮箱格式").css("color","#999")
	});
	$(".zc input:eq(4)").on("blur",function(){
		if($(this).val()!=""){
			$(this).next().text("*手机号码可用").css("color","#06b806")
		}else{
			$(this).next().text("*请填写正确手机号码").css("color","#e00")
		}
	})
	$(".zc input:eq(4)").on("focus",function(){
		$(this).next().text("*请填写正确手机号码").css("color","#999")
	});
	$(".zc").submit(function(e){
		if($(".zc input:eq(4)").val()=="" || $(".zc input:eq(3)").val()=="" || $(".zc input:eq(2)").val()!=$(".zc input:eq(1)").val() || $(".zc input:eq(1)").val()=="" || succ=="100"){
			e.preventDefault()
		}
		else{
			$.ajax({
				type:"POST",
				url:"php/insert.php",
				data:{username:$(".zc input:eq(0)").val(),pwd:$(".zc input:eq(1)").val(),emall:$(".zc input:eq(3)").val(),tele:$(".zc input:eq(4)").val()},
				dataType:"json",
				success:function(){
				}
			});
		}
	})
})