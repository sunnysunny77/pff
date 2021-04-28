// Function for checking id:
function checkId(id) {
  // Be strict:
  "use strict";
  // Check if valid:
  if (typeof id == "string" && document && document.getElementById) {
    return document.getElementById(id);
  }
} // End of checkId() function.

// Function for creating event listeners:
function addEvent(obj, type, fn) {
  // Be strict:
  "use strict";
  if (obj && obj.addEventListener) {
    // W3C:
    obj.addEventListener(type, fn, false);
  } else if (obj && obj.attachEvent) {
    // Older IE:
    obj.attachEvent("on" + type, fn);
  }
} // End of addEvent() function.

// Function for adding  event handlers to the element:
function enableTooltips(obj) {
  // Be strict:
  "use strict";
  addEvent(obj, "focus", showTooltip);
  addEvent(obj, "mouseover", showTooltip);
  addEvent(obj, "blur", hideTooltip);
  addEvent(obj, "mouseout", hideTooltip);
} // End of enableTooltips() function.

// Function to target tooltop and show.
function showTooltip(e) {
  // Be strict:
  "use strict";

  // Get the event object:
  if (typeof e == "undefined") var e = window.event;

  // Get the event target:
  var target = e.target || e.srcElement;
  target.previousElementSibling.lastElementChild.style.visibility = "visible";
} // End of showTooltip() function.

// Function to target tooltop and hide.
function hideTooltip(e) {
  // Be strict:
  "use strict";

  // Get the event object:
  if (typeof e == "undefined") var e = window.event;

  // Get the event target:
  var target = e.target || e.srcElement;
  target.previousElementSibling.lastElementChild.style.visibility = "hidden";
} // End of hideTooltip() function.
