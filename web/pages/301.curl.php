301: Moved Permanently
The requested resource has been assigned a new permanent URI and any
future references to this resource SHOULD use one of the returned
URIs.  Clients with link editing capabilities ought to automatically
re-link references to the Request-URI to one or more of the new
references returned by the server, where possible. This response is
cacheable unless indicated otherwise.

The new permanent URI SHOULD be given by the Location field in the
response. Unless the request method was HEAD, the entity of the
response SHOULD contain a short hypertext note with a hyperlink to
the new URI(s).

If the 301 status code is received in response to a request other
than GET or HEAD, the user agent MUST NOT automatically redirect the
request unless it can be confirmed by the user, since this might
change the conditions under which the request was issued.
Note: When automatically redirecting a POST request after
receiving a 301 status code, some existing HTTP/1.0 user agents
will erroneously change it into a GET request.