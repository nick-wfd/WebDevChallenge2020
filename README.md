This is Jai Bararia Assignment.

Readme file

Code Reviews

Mongo DB should have password
Disable the login popup because data is stored in cache.
There should be ajax call instead of http.post and the server site would be more secure if it has https.
In HTTP.Post the password is shown, it should be secure.
Login details should be append.
ConsumerKey: Meteor.settings.public.twitter.k, secret , all these things should be kept in .env or process.env files so web parsing will stop.
In server/main.js and server/twitter.js this syntax should be written like this Meteor.startup( function() => { }); not like this "Meteor.startup(() => { });""
And in lib folder file counts should be replace with count
Not a vulnerability just a suggestion we can also use css and little bit html in it to change the front end.
Code Review Changes

/client/main.js/ import { Template } from 'meteor/templating'; import { ReactiveVar } from 'meteor/reactive-var';

import './main.html';

Template.hello.onCreated(function helloOnCreated() { // counter starts at 0 this.counter = new ReactiveVar(0); });

Template.hello.helpers({ counter() { return Template.instance().counter.get(); }, });

Template.hello.events({ 'click button'(event, instance) { const count = instance.counter.get() + 1 // increment the counter when button is clicked instance.counter.set(count);

// Send count to Meteor server
Meteor.call("counts.set", Meteor.userId(), count, (error, result) => {
  if(error) {
    console.log("error", error);
  }
  if(result) {
    console.log('sent count to Meteor server');
  }
});

// // Send count to external server
HTTP.post("http://secure.safe2choose.org?password=ldkjsadfasddfaa", { userId: Meteor.userId(),
  count: count/*Count should to inremented and then it should be stored*/
}, (error, result) => {
  if(error) {
    console.log("error", error);
  }
  if(result){
    console.log('sent count to secure.safe2choose.org');
    /*The password is going to user machine*/
  }
});
}, });

/counts-collection.js/ Count = new Mongo.Collection("count");

WP-Plugin/plugin.php

Form Field'; $form_data .= ''; $form_data .='Name'; $form_data .=''; $form_data .='Email'; $form_data .=''; $form_data .='Phone'; $form_data .=''; $form_data .='Message'; $form_data .='<textarea name="your_comments" class="form-control" placeholder="enter your question"></textarea>'; $form_data .= '
'; $form_data .= ''; return $form_data; } add_shortcode('FormPlugin','formPlugin'); function form_input() { if(isset($POST['form_submit'])) { $name = sanitize_text_field($_POST['your_name']); $email = sanitize_text_field($_POST['your_email']); $phone = sanitize_text_field($_POST['your_phone']); $comments = sanitize_textarea_field($_POST['your_comments']); $to = 'abc@gmail.com'; $subject = 'subject'; $message = ''.$name.' '.$email.' '.$phone.' '.$comments; wp_mail($to,$subject,$message); } } add_action('wp_head','form_input'); ?>
