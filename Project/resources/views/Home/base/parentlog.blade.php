<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>Sign Up Login</title>
<link rel="stylesheet" href="Home/css/logstyle.css">
</head>

<body>
<form  action='/stu' method='post' name='myform'>
  {{ csrf_field() }}
  @if(session('msg'))
<h2 >{{ session('msg') }}</h2>
@endif
</form>
<section >
  @yield('content')
</section>
<script src="Home/js/index.js"></script>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
</html>
