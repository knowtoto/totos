<script>
</script>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Google Plus Theme</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
	<div class="contentwrap">
		<article class="container">
		<div class="page-header">
			<h1>회원가입 <small>일반회원가입</small></h1>
		</div>
		<form class="form-horizontal" method="post" accept-charset="utf-8"
action="/index.php/Resister/index"
/>
		<div class="form-group">
			<label for="inputEmail" class="col-sm-2 control-label">이메일</label>
			<div class="col-sm-6">
				<input type="email" class="form-control" id="join_id" placeholder="이메일">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword" class="col-sm-2 control-label">비밀번호</label>
			<div class="col-sm-6">
				<input type="password" class="form-control" id="join_password" placeholder="비밀번호">
				<p class="help-block">숫자, 특수문자 포함 8자 이상</p>
			</div>
		</div>
		<div class="form-group">
		<label for="inputPasswordCheck" class="col-sm-2 control-label">비밀번호 확인</label>
			<div class="col-sm-6">
				<input type="password" class="form-control" id="join_password_confirm" placeholder="비밀번호 확인">
				<p class="help-block">비밀번호를 한번 더 입력해주세요.</p>
			</div>
		</div>
    <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label"></label>
    <div class="col-sm-6">
      <button type="submit" class="btn btn-primary">회원가입</button>
    </div>
    </div>
    </form>
  </article>
</div>
<footer class="footer" id="page_footer">
<!--
      <div class="container">
        <center>
        <p class="footer_text">이용약관 | 개인정보 취급방침 | 자주 묻는 질문 | 수수료</p>
        </center>
      </div>
-->
</footer>
