201: Created
The request has been fulfilled and resulted in a new resource being
created. The newly created resource can be referenced by the URI(s)
returned in the entity of the response, with the most specific URI
for the resource given by a Location header field. The response
SHOULD include an entity containing a list of resource
characteristics and location(s) from which the user or user agent can
choose the one most appropriate. The entity format is specified by
the media type given in the Content-Type header field. The origin
server MUST create the resource before returning the 201 status code.
If the action cannot be carried out immediately, the server SHOULD
respond with 202 (Accepted) response instead.

A 201 response MAY contain an ETag response header field indicating
the current value of the entity tag for the requested variant just
created, see section 14.19.