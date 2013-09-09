<html><head><title>HTTP Code: 101</title><link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></head><body><h1>101: Switching Protocols</h1><p><pre>
   The server understands and is willing to comply with the client's
   request, via the Upgrade message header field (section 14.42), for a
   change in the application protocol being used on this connection. The
   server will switch protocols to those defined by the response's
   Upgrade header field immediately after the empty line which
   terminates the 101 response.

   The protocol SHOULD be switched only when it is advantageous to do
   so. For example, switching to a newer version of HTTP is advantageous
   over older versions, and switching to a real-time, synchronous
   protocol might be advantageous when delivering resources that use
   such features.
</pre></p></body></html>