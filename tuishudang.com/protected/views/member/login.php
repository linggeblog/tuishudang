<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
  <title>登录 ddd</title>
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
            <a href="/" class="home">首页</a>
          </li>
          <li class="item control_select">
            <a href="/project" class="project">开源项目</a>
            <ul class="cs_content">
              <li>
                <a href="/project/lang/19/java">Java 开源软件</a>
              </li>
            </ul>
          </li>
          <li class="item control_select">
            <a href="/question" class="question">讨论区</a>
            <ul class="cs_content">
              <li>
                <a href="/question?catalog=1">技术问答 »</a>
              </li>
            </ul>
          </li>
          <li class="item">
            <a href="/code/list" class="code">代码</a>
          </li>
          <li class="item control_select">
            <a href="/android" class="mobile">移动开发</a>
            <ul class="cs_content cs_mobile">
              <li class="android_">
                <a href="/android">Android开发专区</a>
              </li>
            </ul>
          </li>
          <li class="item t_job">
            <a href="/job" class="job">招聘</a>
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
        &nbsp;|&nbsp;
        <a href="#" class="login_out">退出</a>
<?php endif;?>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div id="OSC_Banner">
    <div class="wp998">
      <a href="/" class="Logo" title="OSChina 网站开发">网站开发</a>
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
        <form id="form_login" onsubmit="return false;">
          <h2>登录网站开发</h2>
          <table>
            <tbody>
              <tr>
                <th></th>
                <td>
                  <div id="error_msg" class="error_msg"></div>
                </td>
              </tr>
              <tr>
                <th nowrap="nowrap">账号：</th>
                <td>
                  <input name="username" class="TEXT" placeholder="帐号/邮箱" style="width:200px;" type="text"></td>
              </tr>
              <tr>
                <th>登录密码：</th>
                <td>
                  <input name="password" class="TEXT" style="width:200px;" type="password"></td>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <td>
                  <input name="save_login" value="1" checked="checked" type="checkbox">
                  记住我的登录信息
                  <span style="color:#A00;">（请勿在公用电脑或者网吧内使用此项）</span>
                </td>
              </tr>
              <tr class="buttons">
                <th>&nbsp;</th>
                <td>
                  <input value="现在登录" class="BUTTON SUBMIT" type="submit" id="login">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="/get_pwd.html">忘记登录密码？</a>
                </td>
              </tr>
            </tbody>
          </table>
        </form>
        <div id="login_tip">
          没有帐号？
          <a href="/register.html">注册新会员</a>
          <h3>登录后可以？</h3>
          <ol>
            <li>分享的开源软件和IT技术心得</li>
            <li>参与开源软件/新闻的讨论和评论</li>
            <li>与技术人士进行讨论和交流</li>
            <li>发布招聘信息、找工作</li>
          </ol>
        </div>
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
// 退出登录
$(".login_out").click(function() {
  $.getJSON('/member/login_out?callback=?', null, function(json) {
    window.location.reload();
  });
});
</script>
<script type="text/javascript" src="/js/login.js"></script>
</body>
</html>