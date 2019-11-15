
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>浙江省大企业税收服务和管理信息平台</title>
		<link rel="stylesheet" href="css/common.css">
		<link rel="stylesheet" href="css/common2.css">
		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/common.js"></script>
		<script src="js/index.js"></script>
	</head>
	<body>
	
		<div id="container">
			<div id="top">
				<div id="date">
					<div id="date1"><span></span><span id="im"><img src="img/yh.png"></span><span><span style="color: #ee0000;"><?php echo $_SESSION['username']; ?></span><a href="login.html">注销</a></span></div>
				</div>
				<div id="middle">
					<div id="logo"><img src="img/清晰 2.png"></div>
					<h3>浙江省大企业税收服务和管理信息平台</h3>
					<div id="stext"><input type="text"  id="text1" placeholder="请输入需要搜索的内容"><input type="button" value="搜索" id="bt1"></div>
				</div>
				<div id="navigation">
					<ul>
						<li><a href="index.php">首页</a></li>
						<li><a href="#">业务平台</a></li>
						<li><a href="indexzn.php" class="tru">职能概况</a></li>
						<li><a href="indexgz.php">工作动态</a></li>
						<li><a href="indexzd.php">制度规范</a></li>
						<li><a href="indexzs.php">知识库</a></li>
						<li><a href="indexxz.php">下载专区</a></li>
					</ul>
				</div>
			</div>
			<div id="textbox">
				<div id="left">
					<ul>
						<li><span><img src="img/1A.png"></span><a href="#" class="def zn1">主要职责</a></li>
						<li><span><img src="img/2A.png"></span><a href="#" class="zn2">内设机构</a></li>
						<li><span>
								<img src="img/3A.png">
							</span>
							<a href="#" class="zn3">人员岗责<div></div></a>
						<ul id="kz">
							<li><a href="#">省局大企业管理局</a></li>
							<li><a href="#">省局税费征收管理局</a>
							</li>
							<li><a href="#" class="fenju">省市局第一税局分局</a></li>
							<li><a href="#" class="renyuan">人员信息维护</a></li>
						</ul>
						</li>
						<li><span>
							<img src="img/4A.png">
							</span>
							<a class="zn4">大事记<div></div></a>
							<ul id="kz">
								<li><a href="#">2019</a></li>
							</ul>
						</li>
						<li><span>
						<img src="img/5A.png">
						</span>
						<a href="#" class="zn5">领导批示<div></div></a>
						<ul id="kz">
							<li><a href="#">2019</a></li>
						</ul>
						</li>
						<li><span><img src="img/6A.png"></span><a href="#" class="zn6">通讯录</a></li>
					</ul>
				</div>
				<div id="mains">
					<div class="zhize ma1">
					<h3>主要职责</h3>
					<ul>
						<li><a href="">财政部、税务总局联合发文进一步明确永续债的企业所得税税收发文进一步明确永续债的企业所得税税收债的企业所得税税债的企业…</a><span>2019-03-04</span></li>
						<li><a href="">西城区税务、市场监管部门联合推出“e窗通企业一日准营套餐</a><span>2019-02-28</span></li>
						<li><a href="">税法入童心 税收伴成长</a><span>2019-02-06</span></li>
						<li><a href="">下沙区税务局个体工商户个税管理成效显著</a><span>2019-01-28</span></li>
						<li><a href="">萧山区税务局开展“减税降费 纳税人有话说”税收宣传</a><span>2019-01-17</span></li>
						<li><a href="">财政部、税务总局联合发文进一步明确永续债的企业所得税税收</a><span>2018-03-04</span></li>
						<li><a href="">西城区税务、市场监管部门联合推出“e窗通企业一日准营套餐</a><span>2018-02-28</span></li>
						<li><a href=""> 税法入童心 税收伴成长</a><span>2018-02-06</span></li>
						<li><a href="">下沙区税务局个体工商户个税管理成效显著</a><span>2018-01-28</span></li>
						<li><a href="">西城区税务、市场监管部门联合推出“e窗通企业一日准营套餐</a><span>2017-02-28</span></li>
						<li><a href="">税法入童心 税收伴成长</a><span>2017-02-06</span></li>
						<li><a href="">下沙区税务局个体工商户个税管理成效显著</a><span>2017-01-28</span></li>
					</ul>
					</div>
					<div class="gangze_3 ma1">
						<div id="paging1">
							<input type="text" placeholder="请输入搜索关键词 姓名 电话"/>
							<div id="paging2">
								<div id="pss">
								<p>姓名</p><p>地址</p><p>职务</p><p>固定电话</p><p>手机</p>
							</div>
							<ul>
								<li>张三</li>
								<li>大企业和国际税务管理处</li>
								<li>总会计师</li>
								<li>0124-123456</li>
								<li>13931575849</li>
							</ul>
							<ul>
								<li>李四</li>
								<li>政策法规处</li>
								<li>纪检组长</li>
								<li>0124-578456</li>
								<li>12325485587</li>
							</ul>
							<ul>
								<li>李松</li>
								<li>进出口税收管理处</li>
								<li>总会计师</li>
								<li>0124-158456</li>
								<li>12548465587</li>
							</ul>
							<ul>
								<li>艾德</li>
								<li>进出口税收管理处</li>
								<li>局长</li>
								<li>0124-123456</li>
								<li>12658665587</li>
							</ul>
							<ul>
								<li>张继</li>
								<li>人事处</li>
								<li>副局长</li>
								<li>0124-123456</li>
								<li>12325465587</li>
							</ul>
							<ul>
								<li>赵华</li>
								<li>监察室</li>
								<li>总会计师</li>
								<li>0124-136856</li>
								<li>12325465587</li>
							</ul>
							<ul>
								<li>孙耀</li>
								<li>征收管理处</li>
								<li>纪检组长</li>
								<li>0124-126845</li>
								<li>12325465587</li>
							</ul>
							<ul>
								<li>汉克</li>
								<li>大企业和国际税务管理处</li>
								<li>局长</li>
								<li>0124-129586</li>
								<li>12325465587</li>
							</ul>
							<ul>
								<li>纲纪得</li>
								<li>进出口税收管理处</li>
								<li>总会计师</li>
								<li>0124-126656</li>
								<li>12325465587</li>
							</ul>
							<ul>
								<li>赫然</li>
								<li>人事处</li>
								<li>纪检组长</li>
								<li>0124-123958</li>
								<li>12325465587</li>
							</ul>
							<ul>
								<li>哈维第</li>
								<li>征收管理处</li>
								<li>局长</li>
								<li>0124-125786</li>
								<li>12325465587</li>
							</ul>
							<ul>
								<li>伊苏</li>
								<li>进出口税收管理处</li>
								<li>总会计师</li>
								<li>0124-987556</li>
								<li>12325465587</li>
							</ul>
							<ul>
								<li>启发</li>
								<li>进出口税收管理处</li>
								<li>纪检组长</li>
								<li>0124-1236476</li>
								<li>12325465587</li>
							</ul>
							</div>
						</div>
						<div id="paging">
							<input type="text" placeholder="请输入税务机关"/>
							<div id="region">
								<ul>
									<li>杭州</li>
									<li>温州</li>
									<li>绍兴</li>
									<li>湖州</li>
									<li>嘉兴</li>
									<li>金华</li>
									<li>衢州</li>
									<li>台州</li>
									<li>丽水</li>
									<li>舟山</li>
								</ul>
							</div>
							<div id="region_ju">
								<ul>
									<li>杭州市地税局</li>
									<li>杭州市地税局开发区分局</li>
									<li>杭州市高新地税局</li>
									<li>杭州市地税局开发区税务分局</li>
									<li>杭州市地方税务局拱墅税务分局</li>
									<li>杭州市萧山区地税局</li>
									<li>杭州市余杭地税局</li>
									<li>杭州市地税局</li>
									<li>杭州市地税局开发区分局</li>
									<li>杭州市高新地税局</li>
									<li>杭州市地税局开发区税务分局</li>
									<li>杭州市地方税务局拱墅税务分局</li>
									<li>杭州市萧山区地税局</li>
									<li>杭州市余杭地税局</li>
									<li>杭州市地税局开发区税务分局</li>
									<li>杭州市地方税务局拱墅税务分局</li>
									<li>杭州市萧山区地税局</li>
									<li>杭州市萧山区地税局</li>
									<li>杭州市萧山区地税局</li>
									<li>杭州市地方税务局拱墅税务分局</li>
								</ul>
							</div>
						</div>
						<!-- 99999 -->
						<div id="context2"">
					<h4><input type="button" value="新增" id="add"><input type="button" value="发布" id="fabu"><input type="button" value="删除" id="delete"></h4>
					<div id="list1">
						<table width="921" height="410" border="1">
							<tr>
								<th><input type="checkbox" id="check1"></th>
								<th>序号</th>
								<th>姓名</th>
								<th>机关</th>
								<th>处室</th>
								<th>状态</th>
								<th>发布人</th>
								<th>发布时间</th>
								<th>操作</th>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>1</td>
								<td>张三</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>2</td>
								<td>王五</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>3</td>
								<td>李四</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>4</td>
								<td>张三</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>5</td>
								<td>王五</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>6</td>
								<td>李四</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>7</td>
								<td>张三</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>8</td>
								<td>王五</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>9</td>
								<td>李四</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>10</td>
								<td>张三</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>11</td>
								<td>王五</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>12</td>
								<td>李四</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
							</tr>
							<tr>
								<td><input type="checkbox" id="check1"></td>
								<td>13</td>
								<td>李四</td>
								<td>主税务机关</td>
								<td>大企业和国际税务管理处</td>
								<td>发布</td>
								<td>张三</td>
								<td>2019-05-28</td>
								<td><a href="#">修改</a></td>
								
							</tr>
						</table>
					</div>
				</div>
				<!-- 人员岗责 人员信息维护部分div -->
						<!-- 99999 -->
					</div>
					<div id="pagination">
						<input type="button" value="<" class="go"/><input type="button" value="1" class="go2"/><input type="button" value="2"/><input type="button" value="3"/><input type="button" value="..." class="zj"/><input type="button" value="10" class="ten"/><input type="button" value=">"/><span>共10页</span><span>到第<input type="text" class="tz"> 页</span><input type="button" value="确定" class="qd"/>
					</div>
				</div>
				<div id="bottom">
				<span id="span1">友情链接：</span><div><span><a href="#">国家税务总局</a></span><span><a href="#">总局大企业税收服务和管理工作平台</a></span><span><a href="#">浙江省税务局内网</a></span><span><a href="#">金税三期决策支持系统</a></span></div>
			</div>
			<div id="tali">
				<ul>
					<li><a href="#">法律声明</a>｜</li>
					<li><a href="#">网站管理</a>｜</li>
					<li><a href="#">网站帮助</a>｜</li>
					<li><a href="#">关于我们</a>｜</li>
					<li><a href="#">网站纠错</a></li>
				</ul>
				<div id="dz"><img src="img/党政机关 2.png"></div>
				<div id="dz1">国家税务总局浙江省税务局版权所有 京ICP备1234568号-2 联系电话：0142-123456</div>
				<div id="dz2">浙公网安备 33010250025645号 网站标识码：bm236554412 地址：杭州市滨江区</div>
				<div id="dz3">国家税务总局浙江省税务局办公室主办</div>
			</div>
			</div>
			</div>
			
			  <div id="zhezhao"></div><!-- 这是遮罩层 -->
			<!-- 人员信息维护 新增div -->
			<div id="newadd">
			<div id="newtop1"><span id="mess">基本信息</span><span id="dele">☒</span></div>
			<div id="newtop2">
				<div id="newtop2-1">
				<span class="small">姓名：</span><input type="text"/><br/>
				<span>工作单位：</span><select><option></option></select><br>
				<span>所属部门：</span><input type="text"/><br/>
				<span class="small">职务：</span><input type="text"/><br/>
				<span>固定电话：</span><input type="text"/><br/>
				<span>手机号码：</span><input type="text"/><br/>
				<span>发布时间：</span><input type="text"/><br/>
				</div>
				<p id="p0"><input type="button" value="保存" id="bbt1"/><input type="button" value="发布" id="bbt2"/></p>
			</div>
			</div>
		
	</body>
</html>
