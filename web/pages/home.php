<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<style>
			.noborder { border: 0px;}
			.nobackground { background-color: #ffffff;}
			.deepindent { margin-left: 15px;}
		</style>
		<title>HTTP Code</title>
		<link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="/" class="navbar-brand">HTTP Code</a>
				</div>
				<div class="navbar-collapse collapse" id="navbar-main">
					<ul class="nav navbar-nav">
						<li><a href="/about">About</a></li>
					</ul>
					<form class="navbar-form navbar-left" action="/go">
						<input type="text" name="code" class="form-control col-lg-8" placeholder="search codes (e.g. 203)">
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="https://github.com/tternes/httpcode">Fork on GitHub</a></li>
						<li><a href="http://www.bluetoo.co" target="_blank">Sponsored by Bluetoo</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="page-header" id="banner">

				<div class="row">
					<div class="col-lg-7">
						<h1>Welcome</h1>

						<p>HTTP Code is a site for software developers who regularly interact with web services and need to quickly look up HTTP response codes. <a href="http://th.adde.us/2013/08/http-status-codes/">Learn more</a> about how the site got started.</p>
						
						<h2>Integrations</h2>
						<p>What makes the site great is how easy it is to quickly look up a status code. Check out these cool integrations.</p>
						<hr>
						<h4>Command Line</h4>
						<p>Add this snippet to your shell&apos;s .rc file:<pre>function http(){
    curl http://httpcode.info/$1;
}</pre>Then run: <pre>~$ http 303</pre></p>
						<p><img src="docs/httpcode_terminal.png" width="617" height="405"></p>
						<hr>

						<h4>Alfred</h4>
						<p><a href="http://alpha.app.net/ffried">Florian Friedrich</a> built a nice 
							<a href="https://alpha.app.net/ffried/post/10635789">Alfred workflow</a> for Mac users.</p>
						<p><img src="docs/httpcode_alfred.png" width="672" height="190"></p>
						<hr>
						
						<h2>Open Source</h2>
						<p>The HTTP Code site is open source. Check out the project on <a href="http://github.com/tternes/httpcode">GitHub</a>.
							To contribute changes, please fork and submit pull requests.</p>
					</div>

				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-10">
					<p class="text-muted">Copyright (c) 2014 <a href="http://www.bluetoo.co">Thaddeus Ternes</a>. Powered by the <a href="http://bootswatch.com/yeti/">Yeti</a> theme.</p>
				</div>
			</div>
		</div>
	</body>
</html>
