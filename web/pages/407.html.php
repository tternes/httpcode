<html><head><title>HTTP Code: 407</title><link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></head><body><h1>407: Proxy Authentication Required</h1><p><pre>
   This code is similar to 401 (Unauthorized), but indicates that the
   client must first authenticate itself with the proxy. The proxy MUST
   return a Proxy-Authenticate header field (section 14.33) containing a
   challenge applicable to the proxy for the requested resource. The
   client MAY repeat the request with a suitable Proxy-Authorization
   header field (section 14.34). HTTP access authentication is explained
   in "HTTP Authentication: Basic and Digest Access Authentication"
   [43].
</pre></p></body></html>