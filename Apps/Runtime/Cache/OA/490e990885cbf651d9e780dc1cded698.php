<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>PHP/OA管理系统</title>

		<meta name="description" content="PHP/OA管理系统" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="/Public/static/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/static/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->
		
		

		<!-- text fonts -->
		<link rel="stylesheet" href="/Public/static/css/ace-fonts.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/static/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="/Public/static/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="/Public/static/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/Public/static/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="/Public/static/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->
		
		

		<!-- ace settings handler -->
		<script src="/Public/static/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="/Public/static/js/html5shiv.js"></script>
		<script src="/Public/static/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="#" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							PHP/OA管理系统
						</small>
					</a>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>

				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary fa fa-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<img src="/Public/static/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/Public/static/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/Public/static/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/Public/static/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/Public/static/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/Public/static/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎您,</small>
									<?php echo getCurrentUserFullName();?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="<?php echo U('User/profile');?>">
										<i class="ace-icon fa fa-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Index/logout');?>">
										<i class="ace-icon fa fa-power-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			
				<div id="sidebar" class="sidebar responsive">
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
	</script>
	<ul class="nav nav-list">
		<li class="active open" id="calendar_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-calendar"></i>
				<span class="menu-text"> 日程管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<?php if(authCheck('CAN_VIEW_LEADER_CALENDAR', getCurrentUserId())): ?><li class="" id="leader_calendar">
					<a href="<?php echo U('Schedule/leaderCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						领导日程
					</a>

					<b class="arrow"></b>
				</li><?php endif; ?>

				<li class="" id="personal_calendar">
					<a href="<?php echo U('Schedule/personalCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						个人日程
					</a>

					<b class="arrow"></b>
				</li>
				
				<?php if(authCheck('CAN_ADD_DEPART_LEADER_CALENDAR,CAN_ADD_ALL_LEADER_CALENDAR', getCurrentUserId())): ?><li class="" id="add_leader_calendar">
					<a href="<?php echo U('Schedule/addLeaderCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						添加领导日程
					</a>

					<b class="arrow"></b>
				</li><?php endif; ?>

			</ul>
		</li>

		<!-- 发文管理 -->
		<li class="" id="article_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil"></i>
				<span class="menu-text"> 发文管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="" id="leader_calendar">
					<a href="<?php echo U('Schedule/leaderCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						申请文号
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="personal_calendar">
					<a href="<?php echo U('Schedule/personalCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						文号审批
					</a>

					<b class="arrow"></b>
				</li>
				
				<li class="" id="add_leader_calendar">
					<a href="<?php echo U('Schedule/addLeaderCalendar');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						发文查询
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
		
		<!-- 接待管理 -->
		<li class="" id="reception_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text"> 接待管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="" id="reception_add">
					<a href="<?php echo U('Reception/addReception');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						接待登记
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="reception_meeting_add">
					<a href="<?php echo U('Reception/addMeeting');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						会议登记
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="reception_bookroom">
					<a href="<?php echo U('Reception/bookRoom');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						预定房间
					</a>

					<b class="arrow"></b>
				</li>


				<li class="" id="reception_statics">
					<a href="<?php echo U('Reception/receptionStatics');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						数据统计
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>
		
		<!-- 共享空间 -->
		<li class="" id="share_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-cloud"></i>
				<span class="menu-text"> 共享空间 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="" id="share_add">
					<a href="<?php echo U('Share/uploadDocs');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						上传资料
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="share_cloud">
					<a href="<?php echo U('Share/cloud');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						资料手册
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="share_company">
					<a href="<?php echo U('Share/company');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						企业名录
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="share_statics">
					<a href="<?php echo U('Share/shareStatics');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						数据统计
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>
		
		<!-- 请休假管理 -->
		<li class="" id="vacation_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-coffee"></i>
				<span class="menu-text"> 请休假管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="" id="vacation_add">
					<a href="<?php echo U('Vacation/addVacation');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						请休假申请
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="vacation_cloud">
					<a href="<?php echo U('Vacation/search');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						请休假查询
					</a>

					<b class="arrow"></b>
				</li>


				<li class="" id="vacation_statics">
					<a href="<?php echo U('Vacation/statics');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						数据统计
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>



		<!-- 权限管理 -->
		<li class="" id="permissions_root">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil"></i>
				<span class="menu-text"> 权限管理 </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">

				<li class="" id="user_list">
					<a href="<?php echo U('Permissions/user');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						用户列表
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="role_list">
					<a href="<?php echo U('Permissions/role');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						角色列表
					</a>

					<b class="arrow"></b>
				</li>

				<li class="" id="permissions_list">
					<a href="<?php echo U('Permissions/permissions');?>">
						<i class="menu-icon fa fa-caret-right"></i>
						权限列表
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
		</li>

	</ul><!-- /.nav-list -->

	<!-- #section:basics/sidebar.layout.minimize -->
	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>

	<!-- /section:basics/sidebar.layout.minimize -->
	<script type="text/javascript">
		try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
	</script>
</div>
<!-- /section:basics/sidebar -->
			

			<div class="main-content">
				
					<!-- #section:basics/content.breadcrumbs -->
<div class="breadcrumbs" id="breadcrumbs">
	<script type="text/javascript">
		try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
	</script>

	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="<?php echo U('Index/main');?>">OA系统</a>
		</li>
		
		<?php if([leaf] != ''): ?><li>
			<a href=[url]>[leaf]</a>
		</li><?php endif; ?>

		<li class="active">空白</li>
	</ul><!-- /.breadcrumb -->
</div>
<!-- /section:basics/content.breadcrumbs -->
				

				<div class="page-content">
					
						<!-- #section:settings.box -->
<div class="ace-settings-container" id="ace-settings-container">
	<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
		<i class="ace-icon fa fa-cog bigger-150"></i>
	</div>

	<div class="ace-settings-box clearfix" id="ace-settings-box">
		<div class="pull-left width-50">
			<!-- #section:settings.skins -->
			<div class="ace-settings-item">
				<div class="pull-left">
					<select id="skin-colorpicker" class="hide">
						<option data-skin="no-skin" value="#438EB9">#438EB9</option>
						<option data-skin="skin-1" value="#222A2D">#222A2D</option>
						<option data-skin="skin-2" value="#C6487E">#C6487E</option>
						<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
					</select>
				</div>
				<span>&nbsp; 选择皮肤</span>
			</div>

			<!-- /section:settings.skins -->

			<!-- #section:settings.navbar -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
				<label class="lbl" for="ace-settings-navbar"> 固定导航栏</label>
			</div>

			<!-- /section:settings.navbar -->

			<!-- #section:settings.sidebar -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
				<label class="lbl" for="ace-settings-sidebar"> 固定侧边栏</label>
			</div>

			<!-- /section:settings.sidebar -->

			<!-- #section:settings.breadcrumbs -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
				<label class="lbl" for="ace-settings-breadcrumbs"> 固定面包屑</label>
			</div>

			<!-- /section:settings.breadcrumbs -->

			<!-- #section:settings.rtl -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
				<label class="lbl" for="ace-settings-rtl"> 从右至左浏览</label>
			</div>

			<!-- /section:settings.rtl -->

			<!-- #section:settings.container -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
				<label class="lbl" for="ace-settings-add-container">
					窄屏
					<b>.模式</b>
				</label>
			</div>

			<!-- /section:settings.container -->
		</div><!-- /.pull-left -->

		<div class="pull-left width-50">
			<!-- #section:basics/sidebar.options -->
			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" />
				<label class="lbl" for="ace-settings-hover"> 子菜单悬停</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" />
				<label class="lbl" for="ace-settings-compact"> 精简侧边栏</label>
			</div>

			<div class="ace-settings-item">
				<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" />
				<label class="lbl" for="ace-settings-highlight"> 当前项目ALT</label>
			</div>

			<!-- /section:basics/sidebar.options -->
		</div><!-- /.pull-left -->
	</div><!-- /.ace-settings-box -->
</div><!-- /.ace-settings-container -->

<!-- /section:settings.box -->
					

					
	<div class="page-header">
	<h1>
		CBD每日一言
		<small>
			<i class="ace-icon fa fa-angle-double-right"></i>
			<?php echo ($saying); ?> 
		</small>
	</h1>
</div>


					<div class="row">
						<div class="col-xs-12">
							<!-- PAGE CONTENT BEGINS -->
							
	<div class="row">
		<?php if(!empty($schedules)): ?><div class="col-sm-6">
	<div class="widget-box transparent" id="recent-box">
		<div class="widget-header">
			<h4 class="widget-title lighter smaller">
				<i class="ace-icon fa fa-calendar orange"></i>领导日程
			</h4>
			
			<div class="widget-toolbar no-border">
				<ul class="nav nav-tabs" id="recent-tab">
					<?php if(is_array($schedules)): foreach($schedules as $k=>$schedule): ?><li 
					<?php if(($schedule["no"]) == "1"): ?>class="首页"<?php endif; ?>
					>
						<a data-toggle="tab" href="#<?php echo ($k); ?>"><?php echo ($schedule['fullname']); ?></a>
					</li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>

		<div class="widget-body">
			<div class="widget-main padding-4">
				<div class="tab-content padding-8">

					<?php if(is_array($schedules)): foreach($schedules as $k=>$schedule): ?><div id="<?php echo ($k); ?>" class="tab-pane
						<?php if(($schedule["no"]) == "1"): ?>active<?php endif; ?>
					">
						<h4 class="smaller lighter green">
							<i class="ace-icon fa fa-list"></i>
							<?php echo date('Y年n月j日');?>
							<a href="<?php echo U('Schedule/leaderCalendar');?>" class="btn btn-info btn-xs pull-right">更多日程</a>
						</h4>

						<!-- #section:pages/dashboard.tasks -->
						<ul id="tasks" class="item-list">
							<!-- <?php if(!empty($schedule["data"])): ?>-->
								<?php if(is_array($schedule["data"])): foreach($schedule["data"] as $key=>$rec): ?><li class="clearfix 
										<?php if(($rec["state"]) == "p"): ?>item-default selected<?php endif; ?>
										<?php if(($rec["state"]) == "n"): ?>item-orange<?php endif; ?>
										<?php if(($rec["state"]) == "f"): ?>item-blue<?php endif; ?>
									">
									<label class="inline">
										<span class="lbl">
											<span class="text-warning">
											<?php if(($rec["allDay"]) == "1"): ?>全天<?php endif; ?>
											<?php if(($rec["allDay"]) != "1"): echo date('H:i',strtotime($rec['start']));?>
												<?php if(!empty($rec["end"])): ?>- <?php echo date('H:i',strtotime($rec['end'])); endif; ?> 
											 	&nbsp;<?php endif; ?>
											</span>
											<?php echo ($rec["title"]); ?>
										</span>
									</label>
									</li><?php endforeach; endif; ?>
							<!--<?php endif; ?> -->
							<!-- <?php if(empty($schedule["data"])): ?><li class="item-orange clearfix">
								<label class="inline">
									<span class="lbl"> 
										今天没有日程
									</span>
								</label>
								</li><?php endif; ?> -->
						</ul>
						<!-- /section:pages/dashboard.tasks -->
					</div><?php endforeach; endif; ?>

				</div>
			</div><!-- /.widget-main -->
		</div><!-- /.widget-body -->
	</div><!-- /.widget-box -->
</div><!-- /.col --><?php endif; ?>
		<div class="col-sm-6">
	<div class="widget-box transparent" id="recent-box">
		<div class="widget-header">
			<h4 class="widget-title lighter smaller">
				<i class="ace-icon fa fa-calendar blue"></i>今日安排
			</h4>

			<div class="widget-toolbar no-border">
				<ul class="nav nav-tabs" id="recent-tab">
					<li class="active">
						<a data-toggle="tab" href="#meetSchedule">接待</a>
					</li>

					<li>
						<a data-toggle="tab" href="#hall">展厅</a>
					</li>

					<li>
						<a data-toggle="tab" href="#meetingRoom">会议室</a>
					</li>

				</ul>
			</div>
		</div>

		<div class="widget-body">
			<div class="widget-main padding-4">
				<div class="tab-content padding-8">
					<div id="meetSchedule" class="tab-pane active">
						<h4 class="smaller lighter green">
							<i class="ace-icon fa fa-list"></i>
							12月22日
							<button class="ace btn-success pull-right">预定</button>
						</h4>

						<!-- #section:pages/dashboard.tasks -->
						<ul id="tasks" class="item-list">
							<li class="item-orange clearfix selected">
								<label class="inline">
									<span class="lbl"> 9:00 - 11:00 &nbsp; 回答客户提问</span>
								</label>
							</li>

							<li class="item-default clearfix">
								<label class="inline">
									<span class="lbl"> Adding new features</span>
								</label>
							</li>

							<li class="item-blue clearfix">
								<label class="inline">
									<span class="lbl"> Upgrading scripts used in template</span>
								</label>
							</li>

							<li class="item-grey clearfix">
								<label class="inline">
									<span class="lbl"> Adding new skins</span>
								</label>
							</li>

							<li class="item-green clearfix">
								<label class="inline">
									<span class="lbl"> Updating server software up</span>
								</label>
							</li>

							<li class="item-pink clearfix">
								<label class="inline">
									<span class="lbl"> Cleaning up</span>
								</label>
							</li>
						</ul>

						<!-- /section:pages/dashboard.tasks -->
					</div>

					<div id="hall" class="tab-pane">
						<h4 class="smaller lighter green">
							<i class="ace-icon fa fa-list"></i>
							12月22日
						</h4>

						<!-- #section:pages/dashboard.tasks -->
						<ul id="tasks" class="item-list">
							<li class="item-orange clearfix selected">
								<label class="inline">
									<span class="lbl"> 9:00 - 11:00 &nbsp; 回答客户提问</span>
								</label>
							</li>

							

							<li class="item-pink clearfix">
								<label class="inline">
									<span class="lbl"> Cleaning up</span>
								</label>
							</li>
						</ul>

						<!-- /section:pages/dashboard.tasks -->
					</div>
				</div>
			</div><!-- /.widget-main -->
		</div><!-- /.widget-body -->
	</div><!-- /.widget-box -->
</div><!-- /.col -->
	</div>


							<!-- PAGE CONTENT ENDS -->
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

			
			
			

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/static/js/jquery.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/static/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/Public/static/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/static/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->
		
		

		<!-- ace scripts -->
		<script src="/Public/static/js/ace-elements.min.js"></script>
		<script src="/Public/static/js/ace.min.js"></script>
		<script src="/Public/static/js/myJs/sidebar.js"></script>

		<!-- inline scripts related to this page -->
		
	<script type="text/javascript">
		jQuery(function($){
			clearSidebarActive();
		});
	</script>

		
		<link rel="stylesheet" href="/Public/static/css/ace.onpage-help.css" />


		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="/Public/static/js/ace/ace.onpage-help.js"></script>
		
	</body>
</html>