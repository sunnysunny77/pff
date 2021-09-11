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
  msgClass = toggleClass ? "error" : "correct";
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
  const text = checkId("text");
 

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

  // Validate the message text:
  if (/^.*[a-zA-Z0-9].*$/.test(text.value)) {
    message(text, false, correct);
  } else {
    message(text, true, incorrect);
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
  addEvent(checkId("form2"), "submit", validate);

  // Enable tooltips:
  enableTooltips(checkId("name"));
  enableTooltips(checkId("email"));
  enableTooltips(checkId("phone"));
  enableTooltips(checkId("text"));
}; // End of initiation.
