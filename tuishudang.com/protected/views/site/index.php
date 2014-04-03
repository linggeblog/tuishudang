<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
  <title>webdev</title>
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" href="/css/channel.css" type="text/css" media="screen">
  <link rel="stylesheet" type="text/css" href="/css/jquery.css" media="screen">
  <link rel="stylesheet" href="/css/oschina2013.css" type="text/css" media="screen">
  <style type="text/css">
    body,table,input,textarea,select {font-family:Verdana,sans-serif,宋体;}
  </style>
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
          
          <li class="item">
            <a href="/code/list" class="code">代码</a>
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
      <a href="/" class="Logo" title="开源中国">开源中国</a>
      <dl>
        <dt> <strong><a href="/project">项目</a></strong> 
          <a href="/project/zh">国产</a>
          <a href="/project/tags">分类</a>
          <a href="/project/list?sort=time">最新</a> <strong class="se">专题</strong> 
        </dt>
        <dt style="margin-top:5px;">
          <strong><a href="http://dragon.oschina.net/" target="_blank">中国源</a></strong> 
          <a href="http://git.oschina.net/" target="_blank" style="color:#c00">代码托管</a>
        </dt>
      </dl>
      <form action="/search" class="search">
        <input name="scope" value="project" type="hidden">
        <input id="channel_q" name="q" placeholder="在 28429 个开源项目中搜索" class="TXT" type="text">
        <button type="submit" class="BTN">搜 索</button>
      </form>
      <div class="clear"></div>
    </div>
  </div>
  <div id="OSC_Screen">
    <div id="OSC_Content" class="CenterDiv">
      <table style="table-layout:fixed;" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
          <tr>
            <td valign="top">
              <table cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                  <tr>
                    <td width="360">
                      <div class="TodayNews" id="IndustryNews">
                        <strong>
                          <span>
                            <a href="/news/list?show=industry">综合资讯</a>
                          </span>
                          <span class="more">
                            <span class="pages">
                              <a page="1" class="on">1</a>
                              <a page="2">2</a>
                              <a page="3">3</a>
                            </span>
                            <a href="/news/list?show=industry" title="更多综合资讯">更多»</a>
                          </span>
                        </strong>

                        <div class="TodayNewsTop1">
                          <h2>
                            <a href="/news/47468/2013-top-20-newest-opensource-projects" title="2013 年度最新的 20 大热门开源软件 (2014/01/03)" target="_blank" style="color:#A00;">2013 年度最新的 20 大热门开源软件</a>
                          </h2>
                          <p>2013 年结束了，我们根据过去一年的用户访问、交流分享和项目本身的更新频度等诸多角度对收录于开源中国...</p>
                        </div>
                        <div class="clear"></div>
                        <ul class="p1">
                          <li class="today">
                            <span class="date">01/04</span>
                            <a href="http://my.oschina.net/iboxdb/blog/189832" title="【每日一博】火车售票算法和数据库性能测试" target="_blank">【每日一博】火车售票算法和数据库性能测试</a>
                          </li>
                        </ul>
                        <ul class="p2" style="display:none;">

                          <li>
                            <span class="date">01/03</span>
                            <a href="/news/47468/2013-top-20-newest-opensource-projects" title="2013 年度最新的 20 大热门开源软件" target="_blank">2013 年度最新的 20 大热门开源软件</a>
                          </li>
                          
                        </ul>
                        <ul class="p3" style="display:none;">

                          <li>
                            <span class="date">01/02</span>
                            <a href="/news/47439/truth-of-redflag-linux" title="关于中科红旗的一些事实真相" target="_blank">关于中科红旗的一些事实真相</a>
                          </li>

                        </ul>
                      </div>
                    </td>
                    <td>
                      <div class="TodayNews" id="ProjectNews">
                        <strong>
                          <span>
                            <a href="/news/list?show=project">软件更新资讯 10</a>
                          </span>
                          <span class="more">
                            <span class="pages">
                              <a page="1" class="on">1</a>
                              <a page="2">2</a>
                              <a page="3">3</a>
                            </span>
                            <a href="/news/list?show=project" title="更多软件更新资讯">更多»</a>
                          </span>
                        </strong>
                        <div class="TodayNewsTop1">
                          <h2>
                            <a href="/news/47461/apache-cordova-3-3-0" title="Apache Cordova 3.3.0 发布，Android 远程调试 (2014/01/03)" target="_blank">Apache Cordova 3.3.0 发布，Android 远程调试</a>
                          </h2>
                          <p>
                            Apache Cordova 3.3.0 发布，此版本让人眼前一亮的特性是： CB-5487 当你的 Android 应用启用调试时，允...
                          </p>
                        </div>
                        <div class="clear"></div>
                        <ul class="p1">

                          <li class="today">
                            <span class="date">01/04</span>
                            <a href="/news/47491/datanucleus-accessplatform-3-3-6" title="持久层框架 DataNucleus AccessPlatform 3.3.6 发布" target="_blank">持久层框架 DataNucleus AccessPlatform 3.3.6 发布</a>
                          </li>

                        </ul>
                        <ul class="p2" style="display:none;">

                          <li class="today">
                            <span class="date">01/04</span>
                            <a href="/news/47476/sveditor-1-5-0" title="SVEditor 1.5.0 发布，SystemVerilog 编辑插件" target="_blank">SVEditor 1.5.0 发布，SystemVerilog 编辑插件</a>
                          </li>

                        </ul>
                        <ul class="p3" style="display:none;">

                          <li>
                            <span class="date">01/03</span>
                            <a href="/news/47461/apache-cordova-3-3-0" title="Apache Cordova 3.3.0 发布，Android 远程调试" target="_blank">Apache Cordova 3.3.0 发布，Android 远程调试</a>
                          </li>

                        </ul>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>

              <div style="margin-top: 10px;">
              <!-- ad -->
              </div>

              <div id="HomeCodePanel" class="mod">
                <h2>
                  <span class="right">
                    <a href="/code/step1">分享我的代码»</a>
                  </span>
                  <a href="/code/list" class="title">代码分享</a>
                  <span class="lnks">
                    编程语言：
                    <a href="/code/list/1/java?sort=time">Java</a>
                    <a href="/code/list/4/php?sort=time">PHP</a>
                    <a href="/code/list/9/javascript?sort=time">JavaScript</a>
                    <a href="/code/list/2/cpp?sort=time">C/C++</a>
                    <a href="/code/list/3/csharp?sort=time">C#</a>
                    <a href="/code/list/6/ruby?sort=time">Ruby</a>
                    <a href="/code/list/7/python?sort=time">Python</a>
                    <a href="/code/list/5/perl?sort=time">Perl</a>
                    <a href="/code/list/12/scala?sort=time">Scala</a>
                  </span>
                </h2>
                <div class="body">
                  <form action="/search">
                    <input name="scope" value="code" type="hidden">
                    <input name="q" size="25" class="TEXT" style="width:200px;" type="text">
                    <input value="搜索代码" class="BUTTON" type="submit">
                    <span id="HotCodeTags">
                      <a href="/code/tag/%E7%B2%BE%E5%8D%8E" style="color:#A00;">精华代码</a>
                      <a href="/code/tag/oschina">oschina</a>
                      <a href="/code/list/43/android">Android</a>
                      <a href="/code/search?q=QT">Qt</a>
                      <a href="/code/tag/hibernate">Hibernate</a>
                      <a href="/code/list/128/ajax">Ajax</a>
                      <a href="/code/search?q=%E6%B8%B8%E6%88%8F">游戏</a>
                    </span>
                  </form>
                  <div id="CodeList">
                    <div id="NewCodeList">
                      <strong>最新分享代码 10</strong>
                      <ul>

                        <li>
                          <a href="/code/snippet_1376788_27738" target="_blank" title="雪山野人庆祝新年快乐的CSS+JS动画">雪山野人庆祝新年快乐的CSS+JS动画</a> <em class="lang">[js]</em>
                        </li>

                      </ul>
                    </div>
                    <div id="HotCodeList">
                      <strong>本周热门代码</strong>
                      <ul>

                        <li>
                          <a href="/code/snippet_164404_27633" target="_blank" title="帅爆了，融合式jquery幻灯片，有美图收集哦">帅爆了，融合式jquery幻灯片，有美图收集...</a>
                          <em class="lang">[js]</em>
                        </li>

                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>

              <div style="margin-top: 10px;">
              <!-- ad2 -->
              </div>

              <div id="HomeTopicPanel" class="mod TopicList">
                <h2>
                  <span class="right">
                    <a href="/question/ask">我要提问»</a>
                  </span>
                  <a href="/question" class="title">讨论区</a>
                  <span class="lnks">
                    <a href="/question?catalog=1">技术问答</a>
                    <a href="/question?catalog=2">技术分享</a>
                    <a href="/question?catalog=3">IT大杂烩</a>
                    <a href="/question?catalog=100">职业生涯</a>
                    <a href="/question?catalog=4">站务/建议</a>
                    <a href="/search?scope=bbs&amp;q=%E5%BE%AE%E7%94%B5%E5%BD%B1" style="color:#A00;">微电影</a>
                  </span>
                </h2>
                <style>
    .hottags a {
          background-color: #E0EAF1;
            border-bottom: 1px solid #3E6D8E;
            border-right: 1px solid #7F9FB6;
            color: #3E6D8E;
            font-size: 10pt;
            line-height: 2.4;
            margin: 2px 2px 2px 0;
            padding: 2px 5px;
            text-decoration: none;
            white-space: nowrap;
        }
    .hottags a:hover {background-color:#3E6D8E;color:#fff;}
    </style>
                <div class="body">
                  <div class="hottags">
                    <strong>热门标签：</strong>
                    <a href="/question/tag/OSCHINA%E5%8E%9F%E5%88%9B%E7%BF%BB%E8%AF%91">原创翻译</a>
                    <a href="/question/tag/oschina">OSCHINA</a>
                    <a href="/question/tag/java">Java</a>
                    <a href="/question/tag/cpp">C/C++</a>
                    <a href="/question/tag/php">PHP</a>
                    <a href="/question/tag/python">Python</a>
                    <a href="/question/tag/linux">Linux</a>
                    <a href="/android">Android</a>
                    <a href="/ios">iOS</a>
                    <a href="/question/tag/mysql">MySQL</a>
                  </div>
                  <div class="clear"></div>
                  <table id="q_list_1" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>

                      <tr>
                        <td class="thread">
                          <a href="/question/947559_140040" target="_blank" title="开源中国马年献礼，Git@OSC 抽奖赢 iPad !" class="thread_type_1 top">[顶]开源中国马年献礼，Git@OSC 抽奖赢 iPad !...</a>
                          <span class="stat">28分钟前 By 丫头潘潘</span>
                        </td>
                        <td class="last_post">0回/15阅</td>
                      </tr>

                    </tbody>
                  </table>
                  <table id="q_list_2" style="display:none;" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td class="thread">
                          <a href="/question/204520_140032" target="_blank" title="有关GPL代码的使用问题" class="thread_type_2">有关GPL代码的使用问题</a>
                          <span class="stat">1小时前 By 朝闻道</span>
                        </td>
                        <td class="last_post">0回/12阅</td>
                      </tr>
                    </tbody>
                  </table>
                  <table id="q_list_3" style="display:none;" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td class="thread">
                          <a href="/question/1378439_139705" target="_blank" title="Android将图片保存到数据库的问题" class="thread_type_2">Android将图片保存到数据库的问题</a>
                          <span class="stat">昨天(21:37) By 蔡从稳</span>
                        </td>
                        <td class="last_post">2回/106阅</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="area_more" id="questions_area">
                    <a href="/question" class="more">进入讨论区&nbsp;»</a>
                    <div class="pages">
                      <a page="1" class="on">1</a>
                      <a page="2">2</a>
                      <a page="3">3</a>
                    </div>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>

              <div style="margin-top: 10px;">
              <!-- ad3 -->
              </div>

              <div id="HomeJobPanel" class="mod TopicList" style="margin:10px 10px 0 0;">
                <h2>
                  <span class="right">
                    <a href="/job">发布招聘信息»</a>
                  </span>
                  <a href="/job" class="title">IT 招聘</a>
                </h2>
                <div class="body">
                  <div class="hottags">
                    <strong>热门招聘城市：</strong>
                    <a href="/job/?addr_prv=%E5%8C%97%E4%BA%AC">北京</a>
                  </div>

                  <table id="j_list" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td class="thread">
                          <a href="http://www.lagou.com/" target="_blank" class="thread_type_20" style="color:#A00;font-weight:bold;">[年终奖大曝光]顶级互联网公司土豪职位放送</a>
                        </td>
                        <td class="last_post">拉勾网</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="area_more" id="positions_area">
                    <a href="/job" class="more">进入招聘版块&nbsp;»</a>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
              <div style="margin-top: 10px;">
              <!-- ad4 -->
              </div>
              <div id="HomeJobTopicPanel" class="mod TopicList">
                <h2>
                  <span class="right">
                    <a href="/question/ask?catalog=100">发布求职信息»</a>
                  </span>
                  <a href="/question?catalog=100" class="title">职业生涯</a>
                </h2>
                <div class="body">
                  <table id="job_list_$ipage" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                      <tr>
                        <td class="thread">
                          <a href="/question/1053110_137076" target="_blank" title="抢人才、跳槽、赚推荐奖金 就上「内推网 neitui.Me」" class="thread_type_1 top">[顶]抢人才、跳槽、赚推荐奖金 就上「内推网 neitui.M...</a>
                          <span class="stat">2天前 By dingpu</span>
                        </td>
                        <td class="last_post">20评/3945阅</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="area_more" id="jobs_area">
                    <a href="/question?catalog=100" class="more">进入职业生涯版块&nbsp;»</a>
                    <div class="clear"></div>
                  </div>
                </div>
              </div>
            </td>
            <td valign="top" width="280">

              <!-- <div style="margin:0 0 10px 0;">
              ad5 
              </div> -->

              <div class="clear"></div>

              <div id="WeeklyProject" class="lbox">

                <strong class="RightTitle">本周推荐 ColorArt</strong>
                <div id="ProjectText">
                  <p>
                    <a target="_blank" href="/p/colorart">ColorArt</a>
                    是一个Android开源库，可方便地从图像中自动获取主题样式的代码库。这个项目最初的版本出自流行的
                    <a target="_blank" href="http://www.panic.com/blog/itunes-11-and-colors/">Panic</a>
                    的 OS X library。
                  </p>
                  <p style="margin:10px 0;">
                    <a target="_blank" href="/p/colorart">
                      <img src="/images/034634_GHye_12.jpg"></a>
                  </p>
                </div>
                <div id="HistoryRecommend">
                  <ul>
                    <li>
                      <a href="/p/chronos">2. 作业调度器 Chronos</a>
                      »
                    </li>
                    <li>
                      <a href="/p/docker">3. Linux 容器引擎 Docker</a>
                      »
                    </li>
                    <li>
                      <a href="/p/screentogif">4. 动画录制软件 ScreenToGif</a>
                      »
                    </li>
                    <li>
                      <a href="/p/litecoin">5. P2P网络货币 Litecoin</a>
                      »
                    </li>
                  </ul>
                  <p style="margin:0 10px 5px 0;font-size:9pt;">
                    <a href="/project/weekly_projects" style="color:#A00;">更多以往推荐&nbsp;»</a>
                  </p>
                </div>
              </div>

              <div class="RecommBlogs lbox">
                <strong class="RightTitle">
                  <a href="/blog">更多»</a>
                  最新推荐博客文章
                </strong>
                <ul>
                  <li>
                    <a href="http://my.oschina.net/chai2010/blog/190030" title="Go语言的函数调用信息">Go语言的函数调用信息 15</a>
                  </li>
                </ul>
              </div>
              <style>
    #toolbox ul li {height:60px;margin:0 0 5px 0;padding:0 0 8px 0;border-bottom:1px dashed #ddd;}
        #toolbox ul li .img {float:left;width:50px;padding-top:3px;}
        #toolbox ul li .img img {width:48px;height:48px;}
        #toolbox ul li .detail {width:230px;overflow:hidden;font-size:9pt;}
        #toolbox ul li .name a {text-decoration:none;font-weight:bold;}
        #toolbox ul li .intro {display:block;color:#9A9A9A;margin:5px 0 0 0;}
    #toolbox a.hover{color:#AAA;}
    </style>
              <div id="toolbox" class="lbox">

                <strong class="RightTitle">在线工具</strong>
                <ul>
                  <li>
                    <span class="img">
                      <a href="http://git.oschina.net/" target="_blank">
                        <img src="/images/115331_YWNR_179699.jpg" alt="APIDOCS"></a>
                    </span>
                    <span class="detail">
                      <span class="name">
                        <a href="http://git.oschina.net/" target="_blank">Git@OSC 代码托管</a>
                      </span>
                      <span class="intro">开源中国社区团队基于开源项目 GitLab 开发的在线代码托管平台。</span>
                    </span>
                    <div class="clear"></div>
                  </li>
                </ul>
              </div>

            </td>
          </tr>
        </tbody>
      </table>
      <div id="OSC_Links">
        <div id="links" class="bmodule">
          <h3 class="caption">+ 友情链接</h3>
          <p>
            <a href="http://git.oschina.net/" target="_blank" style="color:#A00;">Git@OSC</a>
          </p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div id="OSC_Footer" class="CenterDiv">
      <table width="100%">
        <tbody>
          <tr>
            <td align="left">
              © 开源中国(OsChina.NET) |
              <a href="/home/about">关于我们</a>
              |
              <a href="mailto:oschina.net@gmail.com">广告联系</a>
              |
              <a href="http://weibo.com/oschina2010" target="_blank">@新浪微博</a>
              |
              <a href="http://m.oschina.net/">开源中国手机版</a>
              |
              <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color:#737573;text-decoration:none;">粤ICP备12009483号-3</a>
            </td>
          </tr>
        </tbody>
      </table>
      
    </div>
  </div>

  <div id="fancybox-tmp"></div>
  <div id="fancybox-loading">
    <div></div>
  </div>
  <div id="fancybox-overlay"></div>
  <div id="fancybox-wrap">
    <div id="fancybox-outer">
      <div class="fancybox-bg" id="fancybox-bg-n"></div>
      <div class="fancybox-bg" id="fancybox-bg-ne"></div>
      <div class="fancybox-bg" id="fancybox-bg-e"></div>
      <div class="fancybox-bg" id="fancybox-bg-se"></div>
      <div class="fancybox-bg" id="fancybox-bg-s"></div>
      <div class="fancybox-bg" id="fancybox-bg-sw"></div>
      <div class="fancybox-bg" id="fancybox-bg-w"></div>
      <div class="fancybox-bg" id="fancybox-bg-nw"></div>
      <div id="fancybox-content"></div>
      <a id="fancybox-close"></a>
      <div id="fancybox-title"></div>
      <a href="javascript:;" id="fancybox-left">
        <span class="fancy-ico" id="fancybox-left-ico"></span>
      </a>
      <a href="javascript:;" id="fancybox-right">
        <span class="fancy-ico" id="fancybox-right-ico"></span>
      </a>
    </div>
  </div>
  <!-- <div style="visibility: inherit; left: 596.667px; top: 28.75px;" class="tip-yellowsimple">
    <div class="tip-inner tip-bg-image">
      推荐加入
      <a href="http://city.oschina.net/changsha">长沙城市圈</a>
      &nbsp;&nbsp;&nbsp;
      <a style="color:#A00;text-decoration:none;" href="javascript:osc.close_recommend();" title="不再提醒">x</a>
    </div>
    <div style="visibility: inherit;" class="tip-arrow tip-arrow-top"></div>
  </div> -->
  <div title="回到顶部" style="position: fixed; bottom: 165px; right: 100px; cursor: pointer; display: none;" id="topcontrol">
    <img src="/images/gotop.gif" style="width:31px; height:31px;"></div>
</body>
</html>