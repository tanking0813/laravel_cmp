<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>柚皮网欢迎您！</h2>

        <p>请点击以下链接激活您的柚皮账号</p>
		<div>
			{{ link_to_route('auth.active', '点击激活柚皮账号', ['uid'=>$uid, 'code'=>$activationCode]) }}
		</div>
	</body>
</html>
