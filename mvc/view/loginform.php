<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>로그인</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="app.js"></script>
</head>
<body>
    <nav class="navbar navbar-default" style="margin-bottom:10px;">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Hotel Jeju</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="#">예약하기</a></li>
                <li><a href="#">문의하기</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;회원가입</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-lock"></i>&nbsp;로그인<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <form class="form-horizontal login-form">
                                <label><input type="checkbox">&nbsp;자동로그인</label>
                                <input type="text" class="form-control input-sm" placeholder="Enter ID">
                                <input type="password" class="form-control input-sm" placeholder="Enter PASSWORD">
                                <input type="submit" class="btn btn-success btn-sm btn-block" value="로그인">
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="col-lg-6 col-lg-offset-3">
            <h2>Hotel Jeju</h2>
            <div class="panel"></div>
            <form class="form-horizontal join-form">
                <input type="text" class="form-control" placeholder="Enter Email">
                <input type="text" class="form-control" placeholder="Enter Password">
                <input type="submit" value="로그인" class="btn btn-success btn-block">
                <label><input type="checkbox"> 자동 로그인</label>
            </form>
        </div>
    </div>
</body>
</html>