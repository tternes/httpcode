<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>
			HTTP Code: 302: Found
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
						<h1>302: Found</h1>
						<p class="lead"></p>
						<pre>
   The requested resource resides temporarily under a different URI.
   Since the redirection might be altered on occasion, the client SHOULD
   continue to use the Request-URI for future requests.  This response
   is only cacheable if indicated by a Cache-Control or Expires header
   field.

   The temporary URI SHOULD be given by the Location field in the
   response. Unless the request method was HEAD, the entity of the
   response SHOULD contain a short hypertext note with a hyperlink to
   the new URI(s).

   If the 302 status code is received in response to a request other
   than GET or HEAD, the user agent MUST NOT automatically redirect the
   request unless it can be confirmed by the user, since this might
   change the conditions under which the request was issued.
      Note: RFC 1945 and RFC 2068 specify that the client is not allowed
      to change the method on the redirected request.  However, most
      existing user agent implementations treat 302 as if it were a 303
      response, performing a GET on the Location field-value regardless
      of the original request method. The status codes 303 and 307 have
      been added for servers that wish to make unambiguously clear which
      kind of reaction is expected of the client.
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
							<pre>~$ curl http://httpcode.info/302</pre>
							</div>
						</div>
						
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title"><h4>Shell Command<h4>
							</div>
							<div class="panel-body">
							<pre>~$ http 302</pre>
							
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
