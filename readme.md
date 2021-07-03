# IMImobile Developer Test

This test is designed to replicate a ticket that you may be asked to work on in the role. Please read the brief below carefully and tackle the issue in the way you feel is best.

## Set up

1. Download and unzip the folder into your local server environment.
2. `cd` into the repo and run `composer install`
3. Set up a database and configure it in the `.env` file
4. Generate a key using `php artisan key:generate`
5. Install the packages. We use Yarn, but feel free to use NPM if you're more used to that.
6. We use Laravel Mix as a build tool. To run it, just run `yarn watch` or `npm run watch`.
7. Don't worry about running `prod`; it's outside the scope of this test.

## Brief

We have been asked by sales to add a contact form for handling contact requests. Most of the site has been built, but the addition of the form is a late request.

Please follow instrucgions below to build out the back-end of the form. Don't worry about the front-end, just concerntrate on the back-end functionality.

Please use version control as you would in a normal project. You can use the branch name `feature/TEST-1` to simulate the naming convention we use. You will need to upload this application to a repo in GitHub first then do the work in a separate branch.

### Back End | Connect form

This form will send responses through an external service. This service does not have native rate limiting and we are expected to handle this on our side before sending the request to the service.

For the purpose of this test, we will be using mailtrap.io to simulate the service, and to allow debugging. No information should be stored on the server or in the database, beyond the IP and CSRF token for the purpose of rate limiting.

You will need to think about the following:

- Using Laravel to handle the form request and response.
- How to display success and error messages on the front end.
- What validation should be conducted on the request (hint, look at the design to ensure you match the validation defined on the front end)
- How to send a notification to an email address. (We'll test this during the second stage interview).
- The form should be rate limited.
    - By default, we usually limit requests to one request a minute.
    - You can use the cache or database for this.
- **To reiterate;** no information other than the IP address or CSRF token should be stored in the database.

#### Some notes

- Don't worry about adding a honeypot. It is not necessary for the purpose of this test.
- Please sign up for a mailtrap.io account if you don't have one already.
- For the rate limiting error, the message to return is: You are attempting to submit this form too many times. Please wait before trying again.
  - Consider the style and create an error style that fits in with the existing design.
- Any other validation messages are up to you and your discretion.
- When creating the mailable, use the markdown helper – i.e. `php artisan make:mail ContactFormMailable --markdown="emails/submission"`.
    - This will create a template for you to use in `resources/views/emails/submission.blade.php`.
- You should have included the `{{ old }}` helper when building out the form, so you only need to remember to include the `withInput` helper when you return anything.

### Once you're done

Once you are done, please send me an invite to view the repo. If using GitHub, please send the invite to max.solomon@imimobile.com.

## Questions?

If you have any questions, feel free to message me at max.solomon@imimobile.com. I'll be checking my email in the evenings and over the weekend, so I'll try and respond to you as quickly as I can.