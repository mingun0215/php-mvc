<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hotel Jeju</title>
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/jquery-3.2.1.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default" style="margin-bottom:10px;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">Hotel Jeju</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/reserve/creserve">예약하기</a></li>
                <li><a href="/board/index">문의하기</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!$id) { ?>
                    <li><a href="/member/join"><i class="glyphicon glyphicon-user"></i>&nbsp;회원가입</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/member/login"><i class="glyphicon glyphicon-lock"></i>&nbsp;로그인<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <form class="form-horizontal login-form" method="post" action="/member/loginAction">
                                    <label><input type="checkbox" name="autologin">&nbsp;자동로그인</label>
                                    <input type="text" class="form-control input-sm" placeholder="Enter ID" name="email">
                                    <input type="password" class="form-control input-sm" placeholder="Enter PASSWORD" name="pw">
                                    <input type="submit" class="btn btn-success btn-sm btn-block" value="로그인">
                                </form>
                            </li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <li><a href="#"><i class="glyphicon glyphicon-comment"></i> <span class="label label-danger">new</span></a></li>
                    <?php if($id['email'] == "admin") { ?>
                        <li><a href="/admin/index"><i class="glyphicon glyphicon-cog"></i>&nbsp;관리자 페이지</a></li>
                    <?php } ?>
                    <li><a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;<?php echo $id['name'] ?>님
                    <?php if($id['email'] != "admin") { ?>
                        (<?php echo number_format($id['point']) ?>포인트 보유중)
                    <?php } ?>
                    </a></li>
                    <li><a href="/member/logout"><i class="glyphicon glyphicon-log-out"></i>&nbsp;로그아웃</a></li>
                <?php } ?>
            </ul>
        </div>
    </nav>
	<?php echo $data ?>