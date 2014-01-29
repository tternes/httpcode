303: See Other

   The response to the request can be found under a different URI and
   SHOULD be retrieved using a GET method on that resource. This method
   exists primarily to allow the output of a POST-activated script to
   redirect the user agent to a selected resource. The new URI is not a
   substitute reference for the originally requested resource. The 303
   response MUST NOT be cached, but the response to the second
   (redirected) request might be cacheable.

   The different URI SHOULD be given by the Location field in the
   response. Unless the request method was HEAD, the entity of the
   response SHOULD contain a short hypertext note with a hyperlink to
   the new URI(s).
      Note: Many pre-HTTP/1.1 user agents do not understand the 303
      status. When interoperability with such clients is a concern, the
      302 status code may be used instead, since most user agents react
      to a 302 response as described here for 303.
