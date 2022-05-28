<?php if(!defined("__XE__"))exit;?><!-- header 영역 -->
  <? include "../header.html" ?> 
<!-- header 끝 -->
<!-- main nav 영역 -->
<nav id="main_nav">
	<div id="main_div">
		<ul id="main_nav_ul">
			<li><a href="outline.html" title="개요">개요</a></li>
			<li><a href="vision.html" title="비전">비전</a></li>
			<li><a href="history.html" title="연혁">연혁</a></li>
			<li><a href="ci.html" title="CI 소개">CI 소개</a></li>
			<li><a href="service.html" title="서비스 소개">서비스 소개</a></li>
			<li><a href="#" title="언론 기사">언론 기사</a></li>
		</ul>
	</div>
</nav>
<!-- 상단 바 영역 -->
<div id="outline_all">
	<div id="line">
		<h1><a href="main.html">  HOME  </a>>  언론 기사</h1>
	</div><!-- line 끝 -->
<!-- 본문 영역 -->
<div id="news_wrap">
			<?php echo $__Context->content ?>
</div><!-- news_wrap 끝 -->
<!-- footer 영역 -->
 <? include "../footer.html" ?>