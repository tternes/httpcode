<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>
			HTTP Code: 100: Continue
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
					<div class="col-lg-7">
						<h1>100: Continue</h1>
						<p class="lead"></p>
						<pre>
   The client SHOULD continue with its request. This interim response is
   used to inform the client that the initial part of the request has
   been received and has not yet been rejected by the server. The client
   SHOULD continue by sending the remainder of the request or, if the
   request has already been completed, ignore this response. The server
   MUST send a final response after the request has been completed. See
   section 8.2.3 for detailed discussion of the use and handling of this
   status code.
</pre>
					</div>
					
					<!-- sidebar helpers -->
					<div class="col-lg-5">
						<h3>Quick Reference</h3>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">With cURL:<h4>
							</div>
							<div class="panel-body">
							<pre>~$ curl http://httpcode.info/100</pre>
							</div>
						</div>
						
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title"><h4>Shell Command<h4>
							</div>
							<div class="panel-body">
							<pre>~$ http 100</pre>
							
							<h6 class="text-muted">Add this to your shell&apos;s .rc file:</h6>
							<pre>function http(){
    curl http://httpcode.info/$1;
}</pre>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-10">
					<p class="text-muted">Copyright (c) 2014 Thaddeus Ternes. Powered by the <a href="http://bootswatch.com/yeti/">Yeti</a> theme.</p>
				</div>
			</div>
		</div>
	</body>
</html>
