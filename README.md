bootstrap3-contact-form
=======================

Bootstrap 3 Contact Form with Captcha

A simple bootstrap 3 contact form using [SecureImage Captcha](https://github.com/dapphp/securimage).  Submitted messages are sent to a specified email address using SMTP with support for SSL or TLS transport.

## Dependencies

### PHP
* version > 5.2.0 (with gd library enabled)
* [SecureImage Captcha](https://github.com/dapphp/securimage) Captcha (included in [library/vender/securimage/**](https://github.com/jonmbake/bootstrap3-contact-form/tree/master/library/vender/securimage))
* [PHPMailer](https://github.com/PHPMailer/PHPMailer) (included in [library/vender/php_mailer/**](https://github.com/jonmbake/bootstrap3-contact-form/tree/master/library/vender/php_mailer))

### HTML/JS
* [Bootstrap 3](https://github.com/twbs/bootstrap) version >3.1
* jQuery
* **Optional** [International Telephone Input](https://github.com/Bluefieldscom/intl-tel-input) (included in [assets/vender/intl-tel-input/**](https://github.com/jonmbake/bootstrap3-contact-form/tree/master/assets/vender/intl-tel-input))- This is used to validate and format the phone input field. Only need this if the phone field is present.

## Configuration

Configuration values to the contact form are passed in via *Environment Variables*.  The following variables need to be defined:

| Name                | Description                                                          |
|-------------------- | -------------------------------------------------------------------- |
| FEEDBACK_HOSTNAME   | Host name for SMTP server                                            |
| FEEDBACK_EMAIL      | Email address to authenticate to SMTP server with                    |
| FEEDBACK_PASSWORD   | Password to authenticate to SMTP server with                         |
| FEEDBACK_ENCRYPTION | If specified will use encryption.  Valid values: TLS or SSL          |
| FEEDBACK_SKIP_AUTH  | **Optional** If specified, will not authenticate with email/password |

Environment variables can be specified in a variety of ways.  For example, if using *Apache* (and *mod_env* is enabled), they can be specified in *.htaccess*:

```
SetEnv FEEDBACK_HOSTNAME smtp.gmail.com
SetEnv FEEDBACK_EMAIL me@gmail.com
SetEnv FEEDBACK_PASSWORD my!password!
SetEnv FEEDBACK_ENCRYPTION TLS
```

## Check It Out
Demo: http://jonbake.com/demos/contact-form/

Blog Posts: [Bootstrap 3 Contact Form with Captch](https://jonbake.com/blog/bootstrap-3-contact-form-with-captcha/) [A Better Contact Form](https://jonbake.com/blog/a-better-contact-form/)
