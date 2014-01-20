<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>
			HTTP Code: 409: Conflict
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
						<h1>409: Conflict</h1>
						<p class="lead"></p>
						<pre>
   The request could not be completed due to a conflict with the current
   state of the resource. This code is only allowed in situations where
   it is expected that the user might be able to resolve the conflict
   and resubmit the request. The response body SHOULD include enough

   information for the user to recognize the source of the conflict.
   Ideally, the response entity would include enough information for the
   user or user agent to fix the problem; however, that might not be
   possible and is not required.

   Conflicts are most likely to occur in response to a PUT request. For
   example, if versioning were being used and the entity being PUT
   included changes to a resource which conflict with those made by an
   earlier (third-party) request, the server might use the 409 response
   to indicate that it can't complete the request. In this case, the
   response entity would likely contain a list of the differences
   between the two versions in a format defined by the response
   Content-Type.
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
							<pre>~$ curl http://httpcode.info/409</pre>
							</div>
						</div>
						
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title"><h4>Shell Command<h4>
							</div>
							<div class="panel-body">
							<pre>~$ http 409</pre>
							
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
