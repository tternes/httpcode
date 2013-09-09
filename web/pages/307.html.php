<html><head><title>HTTP Code: 307</title><link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></head><body><h1>307: Temporary Redirect</h1><p><pre>
   The requested resource resides temporarily under a different URI.
   Since the redirection MAY be altered on occasion, the client SHOULD
   continue to use the Request-URI for future requests.  This response
   is only cacheable if indicated by a Cache-Control or Expires header
   field.

   The temporary URI SHOULD be given by the Location field in the
   response. Unless the request method was HEAD, the entity of the
   response SHOULD contain a short hypertext note with a hyperlink to
   the new URI(s) , since many pre-HTTP/1.1 user agents do not
   understand the 307 status. Therefore, the note SHOULD contain the
   information necessary for a user to repeat the original request on
   the new URI.

   If the 307 status code is received in response to a request other
   than GET or HEAD, the user agent MUST NOT automatically redirect the
   request unless it can be confirmed by the user, since this might
   change the conditions under which the request was issued.
</pre></p></body></html>