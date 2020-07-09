import { Template } from 'meteor/templating';
import { ReactiveVar } from 'meteor/reactive-var';

import './main.html';

Template.hello.onCreated(function helloOnCreated() {
  // counter starts at 0
  this.counter = new ReactiveVar(0);
});

Template.hello.helpers({
  counter() {
    return Template.instance().counter.get();
  },
});

Template.hello.events({
  'click button'(event, instance) {
    const count = instance.counter.get() + 1
    // increment the counter when button is clicked
    instance.counter.set(count);

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

  },
});
                                /************code review**************/
/*1. mongo DB should have password
  2. disable the login popup because data is stored in cache.
  3. login details should be append.
  4. consumerKey: Meteor.settings.public.twitter.k,
    secret , all these things should be kept in .env or process.env files so they won't be available in web parsing .
  5. There should be ajax call instead of http.post and the server site would be more secure if it has https .
  6. in HTTP.Post the password is shown, it should be secure
  */
