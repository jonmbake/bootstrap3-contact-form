bootstrap3-contact-form
=======================

Bootstrap 3 Contact Form with Captcha

A simple bootstrap 3 contact form using [SecureImage](https://github.com/dapphp/securimage) Captcha.

The HTML demo code is at: [Demo Code](https://github.com/jonmbake/bootstrap3-contact-form/blob/master/index.html).

The HTML fragment of just the contact form itself: [Contact Form HTML](https://github.com/jonmbake/bootstrap3-contact-form/blob/master/contact-form.html.frag)

Version 1.1
===========
Version 1.1 bumps bootstrap version to 3.1.1 and adds optional fields of Title, Company, and Website, along with Phone field.
It also refactors sendmail.php to extract field name/if required to array.

## Configuration
The only configuration required is to change the MY_EMAIL constant in library/sendmail.php.  You can also change the email subject by editing EMAIL_SUBJECT.

## Check It Out
V1 Demo: http://jonbake.com/demos/contact-form/

V1.1 Demo: http://jonbake.com/demos/contact-form/index2.html

Blog Post: http://jonbake.com/blog/?p=115
