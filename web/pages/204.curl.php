204: No Content

   The server has fulfilled the request but does not need to return an
   entity-body, and might want to return updated metainformation. The
   response MAY include new or updated metainformation in the form of
   entity-headers, which if present SHOULD be associated with the
   requested variant.

   If the client is a user agent, it SHOULD NOT change its document view
   from that which caused the request to be sent. This response is
   primarily intended to allow input for actions to take place without
   causing a change to the user agent's active document view, although
   any new or updated metainformation SHOULD be applied to the document
   currently in the user agent's active view.

   The 204 response MUST NOT include a message-body, and thus is always
   terminated by the first empty line after the header fields.
