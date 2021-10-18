# LaraPkg Artisan

We wanted a way to use artisan in all its glory during package development, artisan is a real handy tool which comes in
real handy for package development, we have combined this with `flipbox/lumen-generator` and our own 
`larapkg/lumen-discover` and produced what we think could be a real handy tool for some.

We took the Lumen kernal and extended the Lumen application to override the Lumen Applications path method allowing us
to change the base path from `app` to `src` for package development - simple as that.

With the auto discovery it means, you can `composer require` any lumen or laravel package with the `extra` entry in the
composer json and artisan will automatically boot and register it at run time, so no need to add manually to the 
bootstrap file.

Please note though, that this is a shell around lumen so certain packages may not work correctly, you should be sure of 
the packages you want this to work with.
