# Code Review
Challenge 1 - Review of the code to find security vulnerabilities.

## Findings
* HTTP POST is not encrypted making the confidential data vulnerable to interception. Using SSL will encrypt the HTTP data being transmitted between the client and the server.
* I have removed the server password form the main.js client file and set up a settings.json to store confidential data. The password is now pulled in from a variable assigned to the relevant data in the settings.json.
* I have created a honeypot input to help prevent the button from being abused by bots. The button has been added to the main.html file and a conditional statement is used to determine if it has a value before the HTTP POST is submitted. CSS has also been added to hide the input.
