<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>
			HTTP Code: 304: Not Modified
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
						<h1>304: Not Modified</h1>
						<p class="lead"></p>
						<pre><small>If the client has performed a conditional GET request and access is
allowed, but the document has not been modified, the server SHOULD
respond with this status code. The 304 response MUST NOT contain a
message-body, and thus is always terminated by the first empty line
after the header fields.

The response MUST include the following header fields:
- Date, unless its omission is required by section 14.18.1

If a clockless origin server obeys these rules, and proxies and
clients add their own Date to any response received without one (as
already specified by [RFC 2068], section 14.19), caches will operate
correctly.
- ETag and/or Content-Location, if the header would have been sent
  in a 200 response to the same request
- Expires, Cache-Control, and/or Vary, if the field-value might
  differ from that sent in any previous response for the same
  variant

If the conditional GET used a strong cache validator (see section
13.3.3), the response SHOULD NOT include other entity-headers.
Otherwise (i.e., the conditional GET used a weak validator), the
response MUST NOT include other entity-headers; this prevents
inconsistencies between cached entity-bodies and updated headers.

If a 304 response indicates an entity not currently cached, then the
cache MUST disregard the response and repeat the request without the
conditional.

If a cache uses a received 304 response to update a cache entry, the
cache MUST update the entry to reflect any new field values given in
the response.</small></pre>
					</div>
					
					<!-- sidebar helpers -->
					<div class="col-sm-5">
						<h3>Quick Reference</h3>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">With cURL:<h4>
							</div>
							<div class="panel-body">
							<pre>~$ curl http://httpcode.info/304</pre>
							</div>
						</div>
						
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title"><h4>Shell Command<h4>
							</div>
							<div class="panel-body">
							<pre>~$ http 304</pre>
							
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
