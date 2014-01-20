206: Partial Content
The server has fulfilled the partial GET request for the resource.
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
MUST NOT cache 206 (Partial) responses.