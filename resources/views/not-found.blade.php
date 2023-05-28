<!DOCTYPE html>
<html lang="fa">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="{{ url('public/images/favicon.png') }}" type="image/x-icon">
	<title>این صفحه وجود ندارد</title>
	<link rel="stylesheet" href="public/css/style.css" />
	<style>
		body,
		.not {
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		div.main {
			padding: 100px;
			background-color: #f0f0f0;
			text-align: center;
		}

		ul li {
			display: block;
			line-height: 50px;
			text-align: center;
		}

		ul a {
			text-decoration: none;
			color: #a02c03;
			font-family: "Cairo", sans-serif;
		}
	</style>
</head>

<body>
	<div class="not">
		<div class="main">
			<span class="half-title">این صفحه وجود ندارد</span>
			<hr>
			<br>
			<ul id="menu-list">
				<li class="active"><a href="{{ url('/') }}">آموزشگاه آرایشگری مردانه شبرنگ</a></li>
				<li><a href="{{ url('/hair-loss') }}">ریزش مو، جلوگیری و علل آن</a></li>
				<li><a href="{{ url('/hairdressing-job') }}">آیا آرایشگری شغل خوبی است؟</a></li>
				<li><a href="{{ url('/hairdressing-course') }}">دوره پیرایش درجه یک و دو</a></li>
				<li><a href="{{ url('/suitable-hairstyle') }}">چه مدلی مویی بهم میاد؟</a></li>
				<li><a href="{{ url('/hair-care') }}">مراقبت از مو، نکات شستن مو</a></li>
				<li><a href="{{ url('/style-curly-hair') }}">چگونه موهای فر را حالت دهیم؟</a></li>
				<li><a href="{{ url('/how-to-become-hairdresser') }}">چگونه یک آرایشگر حرفه ای شویم؟</a></li>
			</ul>
		</div>
	</div>
</body>

</html>