
=======================

Bootstrap 3 Contact Form with Google's reCaptcha

**Demo:** http://jonmbake.github.io/bootstrap3-contact-form/

A simple bootstrap 3 contact form using [Google's reCAPTCHA](https://developers.google.com/recaptcha/).  Submitted messages are sent to a specified email address using SMTP with support for SSL or TLS transport.

**A Note On Security:** [PHPMailer](https://github.com/PHPMailer/PHPMailer), which this contact form is dependent on, had a major security vulnerability fixed in 5.2.20. **It is recommended to update to 1.4.**

## Version History

| Versions | Major Enhancement |
| -------- | ----------------- |
| 1.4.1    | Bumped [PHPMailer](https://github.com/PHPMailer/PHPMailer) version to 5.2.21. |
| 1.4      | Add support for [cURL](http://php.net/manual/en/book.curl.php) when POSTing to verify reCAPTCHA. |
| 1.3      | Add support for [Bootstrap Validator](https://github.com/1000hz/bootstrap-validator).  If provided, will use it to validate contact form. |
| 1.2      | Replaced PHP SecureImage Captcha  with Google's reCAPTCHA. |
| 1.1      | Used PHPMailer. Support for SSL/TLS transport.  Extracted configuration values to environment variables. |
| 1.0      | First Version - Used PHP SecureImage and PHP mail function |

## Dependencies

### PHP
* version > 5.2.0
* [PHPMailer](https://github.com/PHPMailer/PHPMailer) (included in [library/vender/php_mailer/**](https://github.com/jonmbake/bootstrap3-contact-form/tree/master/library/vender/php_mailer))

### HTML/JS
* [Bootstrap 3](https://github.com/twbs/bootstrap) version >3.1
* jQuery
* **Optional** [International Telephone Input](https://github.com/Bluefieldscom/intl-tel-input) (included in [assets/vender/intl-tel-input/**](https://github.com/jonmbake/bootstrap3-contact-form/tree/master/assets/vender/intl-tel-input))- This is used to validate and format the phone input field. Only need this if the phone field is present.

## Setting up reCAPTCHA

You must obtain a [Site Key and Secret Key from Google](http://www.google.com/recaptcha/admin).  The *Site Key* must be entered into the [Contact Form HTML](https://github.com/jonmbake/bootstrap3-contact-form/blob/master/index.html) in the place of the text *your_site_key*.  The *Secret Key* should be entered as a configuration value (see next section).

**Note:** Many web servers now force `allow_url_fopen=0` and `allow_url_include=0` due to security concerns (see: [Issue 26](https://github.com/jonmbake/bootstrap3-contact-form/issues/26)). reCAPTCHA verifying will use [cURL](http://php.net/manual/en/book.curl.php) is if it is installed. If you are having issues verifying reCAPTCHA, most likely you need to install [cURL](http://php.net/manual/en/book.curl.php). 

## Configuration

Configuration values to the contact form are passed in via *Environment Variables*.  The following variables need to be defined:

| Name                | Description                                                          |
|-------------------- | -------------------------------------------------------------------- |
| FEEDBACK_HOSTNAME   | Host name for SMTP server                                            |
| FEEDBACK_EMAIL      | Email address to authenticate to SMTP server with                    |
| FEEDBACK_PASSWORD   | Password to authenticate to SMTP server with                         |
| FEEDBACK_ENCRYPTION | If specified will use encryption.  Valid values: TLS or SSL          |
| RECAPTCHA_SECRET_KEY | reCAPTCHA secret key. |
| FEEDBACK_SKIP_AUTH  | **Optional** If specified, will not authenticate with email/password |

Environment variables can be specified in a variety of ways.  For example, if using *Apache* (and *mod_env* is enabled), they can be specified in *.htaccess*:

```
SetEnv FEEDBACK_HOSTNAME smtp.gmail.com
SetEnv FEEDBACK_EMAIL me@gmail.com
SetEnv FEEDBACK_PASSWORD my!password!
SetEnv FEEDBACK_ENCRYPTION TLS
SetEnv RECAPTCHA_SECRET_KEY 7823skdgjksd828sjdgkn
```

**Tip:** *Environment Variables* are used in [Sendmail.php](https://github.com/jonmbake/bootstrap3-contact-form/blob/master/library/sendmail.php).  **If you don't want to use Environment Variables**, you can edit *sendmail.php*, replacing calls to #getenv with the corresponding configuration value like in this [Example Gist](https://gist.github.com/jonmbake/0e5b175a72ad9ba64167).

## What If I Don't Want CAPTCHA?

There's a branch for that! Check out the branch: [Contact Form without CAPTCHA](https://github.com/jonmbake/bootstrap3-contact-form/tree/no-captcha).
