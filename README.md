# dd
`dd` with file name & line & method.

# Install
Run `composer require mphpmaster/dd`

# For Laravel
[Laravel](http://laravel.com) already have the `dd` function in its helpers.
The `dd` function from this package is equal to the one in Laravel 5.

If you wish to override the Laravel 4 function with this one, please follow those few steps:
- Open `public/index.php`
- Add `require "../vendor/larapack/dd/src/helper.php";` after the opening `<?php`-tag
