<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>
			HTTP Code: 201: Created
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
						<h1>201: Created</h1>
						<p class="lead"></p>
						<pre>
   The request has been fulfilled and resulted in a new resource being
   created. The newly created resource can be referenced by the URI(s)
   returned in the entity of the response, with the most specific URI
   for the resource given by a Location header field. The response
   SHOULD include an entity containing a list of resource
   characteristics and location(s) from which the user or user agent can
   choose the one most appropriate. The entity format is specified by
   the media type given in the Content-Type header field. The origin
   server MUST create the resource before returning the 201 status code.
   If the action cannot be carried out immediately, the server SHOULD
   respond with 202 (Accepted) response instead.

   A 201 response MAY contain an ETag response header field indicating
   the current value of the entity tag for the requested variant just
   created, see section 14.19.
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
							<pre>~$ curl http://httpcode.info/201</pre>
							</div>
						</div>
						
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title"><h4>Shell Command<h4>
							</div>
							<div class="panel-body">
							<pre>~$ http 201</pre>
							
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
