<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>
			HTTP Code: 505: HTTP Version Not Supported
		</title>
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
					<div class="col-sm-7">
						<h1>505: HTTP Version Not Supported</h1>
						<p class="lead"></p>
						<pre><small>
   The server does not support, or refuses to support, the HTTP protocol
   version that was used in the request message. The server is
   indicating that it is unable or unwilling to complete the request
   using the same major version as the client, as described in section
   3.1, other than with this error message. The response SHOULD contain
   an entity describing why that version is not supported and what other
   protocols are supported by that server.
</small></pre>
					</div>
					
					<!-- sidebar helpers -->
					<div class="col-sm-5">
						<h3>Quick Reference</h3>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">With cURL:<h4>
							</div>
							<div class="panel-body">
							<pre>~$ curl http://httpcode.info/505</pre>
							</div>
						</div>
						
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title"><h4>Shell Command<h4>
							</div>
							<div class="panel-body">
							<pre>~$ http 505</pre>
							
							<h6 class="text-muted">Add this to your shell&apos;s .rc file:</h6>
							<pre>function http(){
    curl http://httpcode.info/$1;
}</pre>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<p class="text-muted">Copyright (c) 2014 <a href="http://www.bluetoo.co">Thaddeus Ternes</a>. Powered by the <a href="http://bootswatch.com/yeti/">Yeti</a> theme.</p>
			</div>
		</div>
	</body>
</html>
