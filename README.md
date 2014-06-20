## bootstrap3-contact-form
Bootstrap 3 Contact Form with Captcha

A simple bootstrap 3 contact form using [SecureImage](https://github.com/dapphp/securimage) Captcha.

### Version 1.1 (Current Version)
Version 1.1 bumps bootstrap version to 3.1.1 and adds optional fields of Title, Company, and Website, along with Phone field.
It also refactors sendmail.php to extract field name/if required to array.

### Version 1.0
A simpler version of the contact form without the optional fields outlined above: [V 1.0](https://github.com/jonmbake/bootstrap3-contact-form/tree/v1.0).

## To Use This Within Your Bootstrap 3 Project
To use this within your project, the assets and library directory must be web accessible within the same directory as the HTML for the contact form.  You must include (src) 'assets/js/contact-form.js' within the page.  The HTML for the contact form can be extracted from index.html (a demo of the contact form).  The extraction points are labeled with the HTML comments 'EXTRACT HERE'.

### Adding or Removing Fields
To add or remove a field from the contact form:

1. Add or remove the HTML element from the form (the *form-group*)
2. If the field is optional then add the class 'optional' to the input in the element
3. Add or remove an entry from the `$fields_req` array (map) in *sendmail.php* (if the field is required the map entry's value must be true, otherwise false)

### Further Configuration
The only configuration required is to change the MY_EMAIL constant in library/sendmail.php.  You can also change the email subject by editing EMAIL_SUBJECT.

## Check It Out
Demo: http://jonbake.com/demos/contact-form/

Blog Post: http://jonbake.com/blog/?p=115
