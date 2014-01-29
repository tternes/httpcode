416: Requested Range Not Satisfiable

   A server SHOULD return a response with this status code if a request
   included a Range request-header field (section 14.35), and none of
   the range-specifier values in this field overlap the current extent
   of the selected resource, and the request did not include an If-Range
   request-header field. (For byte-ranges, this means that the first-
   byte-pos of all of the byte-range-spec values were greater than the
   current length of the selected resource.)

   When this status code is returned for a byte-range request, the
   response SHOULD include a Content-Range entity-header field
   specifying the current length of the selected resource (see section
   14.16). This response MUST NOT use the multipart/byteranges content-
   type.
