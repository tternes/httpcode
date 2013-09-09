<html><head><title>HTTP Code: 304</title><link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></head><body><h1>304: Not Modified</h1><p><pre>
   If the client has performed a conditional GET request and access is
   allowed, but the document has not been modified, the server SHOULD
   respond with this status code. The 304 response MUST NOT contain a
   message-body, and thus is always terminated by the first empty line
   after the header fields.

   The response MUST include the following header fields:
      - Date, unless its omission is required by section 14.18.1

   If a clockless origin server obeys these rules, and proxies and
   clients add their own Date to any response received without one (as
   already specified by [RFC 2068], section 14.19), caches will operate
   correctly.
      - ETag and/or Content-Location, if the header would have been sent
        in a 200 response to the same request
      - Expires, Cache-Control, and/or Vary, if the field-value might
        differ from that sent in any previous response for the same
        variant

   If the conditional GET used a strong cache validator (see section
   13.3.3), the response SHOULD NOT include other entity-headers.
   Otherwise (i.e., the conditional GET used a weak validator), the
   response MUST NOT include other entity-headers; this prevents
   inconsistencies between cached entity-bodies and updated headers.

   If a 304 response indicates an entity not currently cached, then the
   cache MUST disregard the response and repeat the request without the
   conditional.

   If a cache uses a received 304 response to update a cache entry, the
   cache MUST update the entry to reflect any new field values given in
   the response.
</pre></p></body></html>