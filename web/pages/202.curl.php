202: Accepted

   The request has been accepted for processing, but the processing has
   not been completed.  The request might or might not eventually be
   acted upon, as it might be disallowed when processing actually takes
   place. There is no facility for re-sending a status code from an
   asynchronous operation such as this.

   The 202 response is intentionally non-committal. Its purpose is to
   allow a server to accept a request for some other process (perhaps a
   batch-oriented process that is only run once per day) without
   requiring that the user agent's connection to the server persist
   until the process is completed. The entity returned with this
   response SHOULD include an indication of the request's current status
   and either a pointer to a status monitor or some estimate of when the
   user can expect the request to be fulfilled.
