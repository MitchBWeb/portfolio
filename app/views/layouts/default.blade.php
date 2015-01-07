<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		{{ HTML::style('css/main.css') }}
		{{ HTML::style('css/blog.css') }}
		@yield('title')
	</head>
	<body>
		<div id="main-header">
			<h1 id="site-name">{{ HTML::link('/',"Mitch Balogh's ePortfolio") }}</h1>
			<h3 id="site-slogan">Web Developer/Designer</h3>
			
			<div id="main-nav">
				<ul>
					<li style="width:100px;">&nbsp;</li>
					<li>{{ HTML::link('/','Home') }}</li>
					<li>{{ HTML::link('about','About') }}</li>
					<li>{{ HTML::link('portfolio','My Work') }}</li>
					<li>{{ HTML::link('blog','Blog') }}</li>
				</ul>
			</div>
		</div>
		<div id="main-container">
			<div id="main-wrapper">
				<div id="main-content">
					@yield('content')
				</div>
			</div>
		</div>
		<div id="main-footer">
			<p>footer stuff here</p>
		</div>
		
	</body>
</html>