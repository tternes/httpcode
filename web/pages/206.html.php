<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title>
			HTTP Code: 206: Partial Content
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
						<h1>206: Partial Content</h1>
						<p class="lead"></p>
						<pre><small>The server has fulfilled the partial GET request for the resource.
The request MUST have included a Range header field (section 14.35)
indicating the desired range, and MAY have included an If-Range
header field (section 14.27) to make the request conditional.

The response MUST include the following header fields:
- Either a Content-Range header field (section 14.16) indicating
  the range included with this response, or a multipart/byteranges
  Content-Type including Content-Range fields for each part. If a
  Content-Length header field is present in the response, its
  value MUST match the actual number of OCTETs transmitted in the
  message-body.
- Date
- ETag and/or Content-Location, if the header would have been sent
  in a 200 response to the same request
- Expires, Cache-Control, and/or Vary, if the field-value might
  differ from that sent in any previous response for the same
  variant

If the 206 response is the result of an If-Range request that used a
strong cache validator (see section 13.3.3), the response SHOULD NOT
include other entity-headers. If the response is the result of an
If-Range request that used a weak validator, the response MUST NOT
include other entity-headers; this prevents inconsistencies between
cached entity-bodies and updated headers. Otherwise, the response
MUST include all of the entity-headers that would have been returned
with a 200 (OK) response to the same request.

A cache MUST NOT combine a 206 response with other previously cached
content if the ETag or Last-Modified headers do not match exactly,
see 13.5.4.

A cache that does not support the Range and Content-Range headers
MUST NOT cache 206 (Partial) responses.</small></pre>
					</div>
					
					<!-- sidebar helpers -->
					<div class="col-sm-5">
						<h3>Quick Reference</h3>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title">With cURL:<h4>
							</div>
							<div class="panel-body">
							<pre>~$ curl http://httpcode.info/206</pre>
							</div>
						</div>
						
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="panel-title"><h4>Shell Command<h4>
							</div>
							<div class="panel-body">
							<pre>~$ http 206</pre>
							
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
				<p class="text-muted">Copyright (c) 2014 Thaddeus Ternes. Powered by the <a href="http://bootswatch.com/yeti/">Yeti</a> theme.</p>
			</div>
		</div>
	</body>
</html>
