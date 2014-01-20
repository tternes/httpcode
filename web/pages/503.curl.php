503: Service Unavailable
The server is currently unable to handle the request due to a
temporary overloading or maintenance of the server. The implication
is that this is a temporary condition which will be alleviated after
some delay. If known, the length of the delay MAY be indicated in a
Retry-After header. If no Retry-After is given, the client SHOULD
handle the response as it would for a 500 response.
Note: The existence of the 503 status code does not imply that a
server must use it when becoming overloaded. Some servers may wish
to simply refuse the connection.