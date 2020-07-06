# WebDevChallenge2020
Technical Challenge for Web Developer Recruitment Process

## Welcome
I'm very excited to see you've come until here, this challenge is a shorter version of what should be. The deadline for this is Monday, June 8th at midnight (India Time).

If you have any question, comment, whatever, please let me know.

## Pre-Challenge Security Setup
* Create a PGP key.
* Using PGP, send an encrypted email, confirming the availability for Telephonic Technical Interview during the week, to nikhil@womenfirstdigital.org with your public PGP key attached.
* You will find the public key for nikhil@womenfirstdigital.org attached in the email I sent you for this challenge.

## Challenge 1 - Code Review
* Review the code into the "Code-Review" folder for security vulnerabilities. This Meteor project is meant to keep track of the number of times each user clicks on the button on the client. The count per user is recorded in two places: On the Meteor server that the app is connected to. On a server located at secure.safe2choose.org (this server does not actually exist).
Only the counts of users who have signed in with Twitter need to be securely stored. The count of users who are not logged in is irrelevant.
* Although this code will compile, it should be treated as pseudo-code. Do not worry about inefficient or ugly code. You are only looking for vulnerabilities that would allow users to abuse the system or issues that would give hackers with access to the code the ability to compromise different parts of the system (assuming those components actually existed).
***
**Deliverable:** `Create a README file with explanations of the vulnerabilities you are able to find. For extra points, correct the source code to fix those issues. When finished, commit your changes and push to your own repo and create a pull request to merge your changes with the original repo (mine).`
***

## Challenge 2 - Wordpress Plugin Development
#### Create a Wordpress plugin with the below features: 
* Form to capture Basic user information such as Username, email, password, etc.
* This information collected will be posted to an API (set from the plugin admin) for user registration.
* Based on the response (success == true or success == false), appropriate message will be shown in the plugin or redirection to a specific URL set in the Admin Panel.
* Allow to set the value of the hidden field which is to be posted along with the User Data to the API. 
* Allow to set custom redirection URLs for specific pages on which the plugin is being used.
***
**Deliverable:** `Update the plugin code in "WP-Plugin" folder. Create a pull request to merge your changes.` 
***

## Challenge 3 - Wordpress Theme Development
* The "WP-Theme" Folder has 2 PSD files. (select any one to create a wordpress theme based on the psd) 
* You need to create a responsive wordpress theme based on the PSD.
* You must use SASS or LESS, choose!
* Bootstrap is mandatory
* You can use pure JS or Jquery or any other you prefer
***
**Deliverable:**  `Upload the theme in "WP-Theme" folder. Create a pull request to merge your changes.`
***
