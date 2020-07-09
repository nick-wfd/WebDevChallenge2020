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

    const svrPw = Meteor.settings.svr_password;
    const count = instance.counter.get() + 1;
    const hpInput = document.getElementById('hp');
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
    // check if honeypot is empty
    if(hpInput.value.length == 0) {
      HTTP.post("http://secure.safe2choose.org", {
        password: svrPw,
        userId: Meteor.userId(),
        count: count
      }, (error, result) => {
        if(error) {
          console.log("error", error);
        }
        if(result){
          console.log('sent count to secure.safe2choose.org');
        }
      });
    }
  },
});
