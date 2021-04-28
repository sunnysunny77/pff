// Feedback meassage:
function message(obj, toggleClass, message) {
  // Be strict:
  "use strict";

  // Insert node:
  if (!checkId("msg" + obj.id)) {
    let span = document.createElement("span");
    span.id = "msg" + obj.id;
    obj.parentNode.insertBefore(
      span,
      obj.previousElementSibling.previousSibling
    );
  }

  // From referance:
  const msg = checkId("msg" + obj.id);

  // Toggle error, correct className:
  let msgClass;
  toggleClass ? (msgClass = "error") : (msgClass = "correct");
  msg.className = msgClass;
  msg.innerHTML = message;
} // End of message() function.

// From validation:
function validate(e) {
  // Be strict:
  "use strict";

  // Get the event object:
  if (typeof e == "undefined") e = window.event;

  // Form referances:
  const name = checkId("name");
  const email = checkId("email");
  const phone = checkId("phone");
  const age = checkId("age");
  const male = checkId("male");
  const female = checkId("female");
  const league = checkId("league");

  // Flag letiable:
  let error = false;

  // Message HTML:
  const correct = "&#10004;";
  const incorrect = "&#10008;";

  // Validate the name:
  if (/^[A-Z \.\-']{2,40}$/i.test(name.value)) {
    message(name, false, correct);
  } else {
    message(name, true, incorrect);
    error = true;
  }

  // Validate the email address:
  if (/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/.test(email.value)) {
    message(email, false, correct);
  } else {
    message(email, true, incorrect);
    error = true;
  }

  // Validate the phone number:
  if (/^[+]?[0-9]{3,15}$/.test(phone.value)) {
    message(phone, false, correct);
  } else {
    message(phone, true, incorrect);
    error = true;
  }

  // Validate the age:
  if (age.value > 0 && age.value < 110) {
    message(age, false, correct);
  } else {
    message(age, true, incorrect);
    error = true;
  }

  // Validate the gender:
  if (male.value === "male" || female.value === "female") {
    message(male, false, correct);
  } else {
    message(male, true, incorrect);
    error = true;
  }

  // Validate the league:
  if (league.selectedIndex != 0) {
    message(league, false, correct);
  } else {
    message(league, true, incorrect);
    error = true;
  }

  // Prevent the form's submission:
  if (error) {
    if (e.preventDefault) {
      e.preventDefault();
    } else {
      e.returnValue = false;
    }
    return false;
  }
} // End of validate() function.

// Initiation fuction onload event:
window.onload = function () {
  // Be strict:
  "use strict";

  // Add an event listener to the form:
  addEvent(checkId("form"), "submit", validate);

  // Enable tooltips:
  enableTooltips(checkId("email"));
  enableTooltips(checkId("name"));
  enableTooltips(checkId("phone"));
  enableTooltips(checkId("age"));
}; // End of initiation.
