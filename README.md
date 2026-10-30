# Nails CSP

Build a Content-Security-Policy in code and send it as a header from Nails applications.

Load a policy into the `Csp` service during the request; the module compiles it and sets the `Content-Security-Policy` header just before output. Policies can carry a per-request nonce for scripts and styles.

See [the documentation](https://docs.nailsapp.co.uk/modules/other/csp) for the policy API and nonce handling.
