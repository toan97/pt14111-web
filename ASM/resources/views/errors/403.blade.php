<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="col-md-8 offset-2 text-center align-middle" style="padding-top: 200px">
			<h1>Bạn không có quyền truy cập tài nguyên này</h1>
			<p>Vui lòng đăng xuất tại đây:</p>
			<form action="{{ route('auth.logout') }}" method="POST">
			    @csrf
			    <button type="submit" class="btn btn-danger btn-flat">Sign out</button>
			</form>
			<p>Hoặc có thể quay lại trang bài viết</p>
			<a href="{{ route('client.index') }}">Tại đây</a>
	</div>
</body>
</html>