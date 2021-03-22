<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>문의 답변</title>
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
                <li><a href="#"><i class="glyphicon glyphicon-comment"></i> <span class="label label-danger">3</span></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-user"></i>&nbsp;관리자님</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i>&nbsp;관리자 페이지</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-log-out"></i>&nbsp;로그아웃</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="page-header">
            <h3>문의 확인하기</h3>
        </div>
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <th width="20%">이름</th><th width="70%">내용</th><th>메뉴</th>
                </tr>
                <tr>
                    <td>홍길동</td><td>이 싸이트는 문의하기에 &lt;a&gt;&lt;/a&gt;를 ...</td><td><a class='btn btn-primary'  href="#">답변하기</a></td>
                </tr>
                <tr>
                    <td>김선달</td><td>숙박비를 싸게  할 수 있는 방법이 있 ...</td><td><a class='btn btn-primary'  href="#">답변하기</a></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>