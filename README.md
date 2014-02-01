# HTTP Code #

[httpcode.info](http://httpcode.info) is a project born out of necessity - I [wanted a quick and easy way](http://th.adde.us/2013/08/http-status-codes/) to look up HTTP response codes.

## Usage ##
	   
	$ http 404
	404: Not Found
	
	   The server has not found anything matching the Request-URI. No
	   indication is given of whether the condition is temporary or
	   permanent. The 410 (Gone) status code SHOULD be used if the server
	   knows, through some internally configurable mechanism, that an old
	   resource is permanently unavailable and has no forwarding address.
	   This status code is commonly used when the server does not wish to
	   reveal exactly why the request has been refused, or when no other
	   response is applicable.

Please check out my [blog post](http://th.adde.us/2013/08/http-status-codes/) for more details.

## Content ##

The web application (contained within the `web` directory), is a simple [Limonade](https://github.com/sofadesign/limonade) app. The contents are served from static files, which are built one-time by running the scraper, which is described below.

## Building ##

The contents of the site are built by scraping the [HTTP RFC 2616](http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html#sec10). Update the `rfc2616-sec10.html` document to a new version, and then run

	php parse.php
	
to generate new content in `web/pages`.

[Extra statuses](http://httpcode.info/418) are included in the `rfc-additions.html` file. For simplicity, they conform to the same formatting style as the `rfc2616-sec10.html` file.


## Sponsor ##

Thanks to [Runscope](http://www.runscope.com) for sponsoring the site. Be sure to check out their [200: OK](https://www.runscope.com/ts) promo.

## Hosting ##

I currently host the site at [httpcode.info](httpcode.info). If you appreciate the site, please consider checking out my [other software](http://www.bluetoo.co).

## Licence ##
 

	The MIT License (MIT)
	
	Copyright (c) 2014 Thaddeus Ternes
	
	Permission is hereby granted, free of charge, to any person obtaining a copy of
	this software and associated documentation files (the "Software"), to deal in
	the Software without restriction, including without limitation the rights to
	use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
	the Software, and to permit persons to whom the Software is furnished to do so,
	subject to the following conditions:
	
	The above copyright notice and this permission notice shall be included in all
	copies or substantial portions of the Software.
	
	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
	IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
	FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
	COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
	IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
	CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
