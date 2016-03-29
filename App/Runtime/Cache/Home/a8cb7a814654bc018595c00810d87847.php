<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>导航入口</title>
	<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<style>
		/*设置宽度 否则在affix 和affix-top切换时会出现变动*/
		ul.temp{
			width:200px;
		}
	</style>
</head>
<body>
	<header class="navbar navbar-static-top">
		<div class="container">
			<ul class="nav navbar-nav">
				<li>
					<a href="#">首页</a>
				</li>
				<li>
					<a href="#">社交</a>
				</li>
				<li>
					<a href="#">音乐</a>
				</li>
				<li>
					<a href="#">直播</a>
				</li>
				<li>
					<a href="#">电视剧</a>
				</li>
				<li>
					<a href="#">新闻</a>
				</li>
			</ul>
			<form class="navbar-form navbar-right" role="search">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="想看点什么呐...">
					<span class="input-group-btn">
						<button type="button" class="btn btn-default">
							<!--图标一定要用span包起来 不能直接用在btn里 否则会出现偏差-->
							<span class="glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>
			</form>
		</div>
	</header>
	<div id="player_bar">
		<div class="container">
			<div class="player_control">
				<div class="player_control_pre btn btn-default"><span class=" glyphicon glyphicon-fast-backward"></span></div>
				<div class="player_control_play btn btn-default"><span class="glyphicon glyphicon-pause"></span></div>
				<div class="player_control_next btn btn-default"><span class="glyphicon glyphicon-fast-forward"></span></div>
			</div>
			<div class="player_info label">There is nothing can stop me.</div>

			<div class="dropdown navbar-right">
				<button class="btn btn-default dropdown-toggle" type="button" id="player_list" aria-haspopup="true" aria-expanded="true" data-toggle="dropdown">
					<span class="glyphicon glyphicon-list"></span>
				</button>
				<ul class="dropdown-menu" aria-labelledby="player_list">
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
				</ul>
			</div>

		</div>
	</div>
	<!--<div class="doc-head"></div>-->

	<div class="container">
		<div class="row">
			<div class="col-xs-9">
				<!--<?php if(is_array($subjects)): foreach($subjects as $key=>$subject): ?>-->
					<!--&lt;!&ndash; Subject Item &ndash;&gt;-->
					<!--<div class="row subject-item">-->
						<!--<div class="col-md-3 text-left">-->
							<!--<h2><?php echo ($subject['title']); ?></h2>-->
						<!--</div>-->
						<!--<div class="col-md-9">-->
							<!--<div class="row">-->
								<!--<?php if(is_array($subject['items'])): foreach($subject['items'] as $key=>$item): ?>-->
									<!--<div class="col-md-3">-->
										<!--<a href="#" class="thumbnail bg-success">-->
											<!--<?php if(($item['img'])): ?>-->
												<!--<span ><img src="<?php echo ($item['img']); ?>"></span>&nbsp;<?php echo ($item['content']); ?>-->
											<!--<?php else: ?>-->
												<!--<span class="glyphicon glyphicon-star"></span>&nbsp;<?php echo ($item['content']); ?>-->
											<!--<?php endif; ?>-->
										<!--</a>-->
									<!--</div>-->
								<!--<?php endforeach; endif; ?>-->
							<!--</div>-->
						<!--</div>-->
					<!--</div>-->
				<!--<?php endforeach; endif; ?>-->
			</div>
			<div class="col-xs-3">
				<ul class="temp" data-spy="affix" data-offset-top="160">
					<li><a href="#"></a>aaaaaaaaaa</li>
					<li><a href="#"></a>aaaaaaaaaa</li>
					<li><a href="#"></a>aaaaaaaaaa</li>
					<li><a href="#"></a>aaaaaaaaaa</li>
					<li><a href="#"></a>aaaaaaaaaa</li>
					<li><a href="#"></a>aaaaaaaaaa</li>
					<li><a href="#"></a>aaaaaaaaaa</li>
				</ul>
			</div>

		</div>
	</div>
	<!--<footer></footer>-->


	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="/js/entry.js"></script>

	<script type="text/javascript">

		$("#player_bar").player_bar("test");
		$("#player_bar").player_bar("add",{"href":"qqqqqqq","name":"wwwwwwwwww"});
	</script>

</body>
</html>