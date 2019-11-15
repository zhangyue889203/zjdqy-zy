$(function(){
	$("#form1").submit(function(e){
		if($("input:eq(0)").val()!="" && $("input:eq(1)").val()!=""){
			$.ajax({
			type:"POST",
			url:"php/login.php",
			data:{username:$("input:eq(0)").val(),pwd:$("input:eq(1)").val()},
			dataType:"json",
			cache:false,
			success:function(data){
				if(data.status=="10001"){
					$("input:eq(0)").val(data.msg).css("color","#e00").next().next().val("");
				}else{
					location.href="index.php";
				}
			},
			});
		}
			if($("input:eq(0)").val()=="" || $("input:eq(1)").val()==""){
				$("input:eq(0)").val("请输入用户名和密码").css("color","#e00").next().next().val("");
			}
			e.preventDefault();
		})
		$("input:eq(0)").on("focus",function(){
			$(this).val("").css("color","#333");
		})
	})