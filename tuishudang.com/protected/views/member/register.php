<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
	<title>网站开发 - 注册</title>
	<link rel="stylesheet" href="/css/channel.css" type="text/css" media="screen">
	<link rel="stylesheet" type="text/css" href="/css/jquery.css" media="screen">
	<script type="text/javascript" src="/js/jquery.js"></script>
</head>
<body>
	<div id="OSC_NavTop">
		<div class="wp998">
			<div id="OSC_Channels">
				<ul>
					<li class="item">
						<a href="http://www.oschina.net/" class="home">首页</a>
					</li>
					<li class="item control_select">
						<a href="http://www.oschina.net/project" class="project">开源项目</a>
						<ul class="cs_content">
							<li>
								<a href="http://www.oschina.net/project/lang/19/java">Java 开源软件</a>
							</li>
						</ul>
					</li>
					<li class="item control_select">
						<a href="http://www.oschina.net/question" class="question">讨论区</a>
						<ul class="cs_content">
							<li>
								<a href="http://www.oschina.net/question?catalog=1">技术问答 »</a>
							</li>
						</ul>
					</li>
					<li class="item">
						<a href="http://www.oschina.net/code/list" class="code">代码</a>
					</li>
					<li class="item control_select">
						<a href="http://www.oschina.net/android" class="mobile">移动开发</a>
						<ul class="cs_content cs_mobile">
							<li class="android_">
								<a href="http://www.oschina.net/android">Android开发专区</a>
							</li>
						</ul>
					</li>
					<li class="item t_job">
						<a href="http://www.oschina.net/job" class="job">招聘</a>
					</li>
				</ul>
			</div>
			<div id="OSC_Userbar">
<?php if(!$this->userinfo):?>
				当前访客身份：游客 [
				<a href="/login.html">登录</a> |
				<a href="/register.html">加入网站开发</a> ]
<?php else:?>
	<em><?php echo $this->userinfo->username?></em>,您好
        <span class="control_select">
          <a title="我的空间" id="MySpace" href="">我的空间</a>
          <ul class="cs_content cs_myspace">
            <li class="msg_">
              <a href="/">站内留言</a>
            </li>
          </ul>
        </span>
        &nbsp;|&nbsp;
        <a href="/">添加软件</a>
<?php endif;?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="OSC_Banner">
		<div class="wp998">
			<a href="http://www.oschina.net/" class="Logo" title="OSChina 网站开发">网站开发</a>
			<h1>会员系统</h1>
			<form action="/search" class="search">
				<input name="scope" value="project" type="hidden">
				<input id="channel_q" name="q" placeholder="资讯、软件、分享、代码、博客" class="TXT" type="text">
				<button type="submit" class="BTN">搜 索</button>
			</form>
			<div class="clear"></div>
		</div>
	</div>
	<div id="OSC_Screen">
		<div id="OSC_Content" class="CenterDiv">
			<div id="user_page">
				<form id="form_register"  onsubmit="return false;" style="float:left; width:620px;">
					<h2>加入网站开发</h2>
					<table cellpadding="0" cellspacing="0">
						<tbody>
						<tr>
							<th nowrap="nowrap">用户名：</th>
							<td>
								<input name="username" id="username" class="TEXT" style="width:200px;" type="text">
								<span id="username_msg"></span>
							</td>
						</tr>
						<tr id="tr_email">
							<th nowrap="nowrap">电子邮箱：</th>
							<td>
								<input name="email" id="email" class="TEXT" style="width:200px;" type="text">
								<span id="email_tip"></span>
							</td>
						</tr>
						<tr>
							<th>昵称：</th>
							<td>
								<input name="name" id="name" maxlength="20" class="TEXT" style="width:150px;" type="text">
								<span id="name_msg">不能超过10个字</span>
							</td>
						</tr>
						<tr>
							<th>登录密码：</th>
							<td>
								<input name="password" id="password" class="TEXT" style="width:150px;" type="password">
								<span id="password_msg">至少6位</span>
							</td>
						</tr>
						<tr>
							<th>密码确认：</th>
							<td>
								<input name="password2" id="password2" class="TEXT" style="width:150px;" type="password">
							</td>
						</tr>
						<tr id="tr_gender">
							<th>性别：</th>
							<td>
								<input name="sex" value="1" id="sex" type="radio">
								<label for="gender_1">男</label>
								&nbsp;&nbsp;&nbsp;
								<input name="sex" value="2" id="sex2" type="radio">
								<label for="gender_2">女</label>
								<span class="nodisp">请选择性别</span>
							</td>
						</tr>
						<tr id="tr_area">
							<th>居住地区：</th>
							<td>
								<select onchange="showcity(this.value, document.getElementById('userCity'));" name="province" id="userProvince">
									<option selected="selected" value="">--请选择省份--</option>
									<option value="北京">北京</option>
								</select>
								<select name="city" id="userCity"></select>
								<span class="nodisp">请选择您所在的地区</span>
							</td>
						</tr>
						<tr>
							<th>验证码：</th>
							<td>
								<input id="validate" name="v_code" size="6" class="TEXT" type="text">
								<span>
									<a href="javascript:change_vcode();">换另外一个图</a>
								</span>
							</td>
						</tr>
						<tr>
							<th>&nbsp;</th>
							<td>
								<img id="img_vcode" alt="..." src="/member/seccode" style="border:2px solid #ccc;" align="absmiddle"></td>
						</tr>
						<tr class="buttons">
							<th>&nbsp;</th>
							<td style="padding:20px 0;">
								<input value=" 注册新用户 " class="BUTTON SUBMIT" type="submit" id="register">
								<span id="error_msg" class="error_msg"></span>
							</td>
						</tr>
						</tbody>
					</table>
				</form>
				<div id="login_tip">
					已有帐号？
					<a href="/home/login">直接登录</a>
					<h3>为什么要注册？</h3>
					<ol>
						<li>发布开源软件、新闻和博客</li>
						<li>参与开源软件/新闻的讨论和评论</li>
						<li>和别人分享软件使用心得</li>
						<li>随时得到软件最新更新消息</li>
						<li>认识更多开源爱好者</li>
					</ol>
					<h3>为什么总提示验证码错误？</h3>
					<ol>
						<li>首先请确定浏览器已经启用Cookie</li>
						<li>实在不行，邮件给我 303429874@qq.com</li>
					</ol>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div id="OSC_Footer" class="CenterDiv">
			<table width="100%">
				<tbody>
					<tr>
						<td align="left">
							© 网站开发(webdev.com) |
							<a href="/site/about">关于我们</a>
							|
							<a href="/">广告联系</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
<script type="text/javascript">
// 点击改变验证码
function change_vcode()
{
	$("#img_vcode").attr({
		src: '/member/seccode?'+Math.random(),
	});
}
</script>
<script type="text/javascript" src="/js/register.js"></script>
<script type="text/javascript" src="/js/getcity.js"></script>
</body>
</html>