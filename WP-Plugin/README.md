# Wordpress Plugin
I have created a simple plugin that uses a form to create a new contact on my HubSpot CRM, using the HubSpot REST API.
* The form will display a message on successful submission and will redirect to a page if there is an error.
* The page redirected to on error is controled in the admin via the plugin settings and a page ID.
* A hidden field submits a value to the contact of the Company Number, controled by the current page ID.

## Installation
`composer install`

## Useage
* The plugin can be added to a page using <?php contact_form_function(); ?>.
* The plugin can be added to a page using the shortcode [hubspot_contact_form].
* The error page redirection is set in Settings > HubSpot Plugin Options.