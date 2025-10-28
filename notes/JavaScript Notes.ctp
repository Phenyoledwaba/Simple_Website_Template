<!-- Basic example -->
document.getElementById("myBtn") → selects the HTML element with id="myBtn".

.addEventListener("click", function(){ ... }) → sets up an event listener that runs when the button is clicked.

alert() → shows a popup message.

<!-- This is the core of JS interactivity: selecting elements and responding to events. -->

<!-- Adding dynamic content -->
prompt() → asks the user for input.

document.getElementById("welcome").innerText → changes the text inside the <h1> dynamically.

Result: When someone opens the page, they’re greeted by their own name.

<!-- Manipulating CSS with JavaScript -->
.style.color → changes text color

.style.fontSize → changes text size

You can also modify backgroundColor, fontWeight, visibility, etc.

Result: The <h1> not only says “Welcome, Name!” but now it appears blue and bigger.
    
<!-- More Advanced Example(Interactive Cards) -->
id="card1" → so JS can target it

Inline styles (width, padding, border) → quick styling for now (we’ll improve with CSS later)

mouseenter → triggers when mouse moves over the card

mouseleave → triggers when mouse moves away from the card

this → refers to the card itself (card1)

Result: When you hover over the card, it changes color dynamically.

JavaScript — js/script.js
console.log("JS is working!");

// Personalized welcome message
const name = prompt("What's your name?");
const welcomeEl = document.getElementById("welcome");
welcomeEl.innerText = "Welcome, " + name + "!";
welcomeEl.style.color = "#fff"; // White for hero section
welcomeEl.style.fontSize = "3rem";

// Button click alert
document.getElementById("myBtn").addEventListener("click", function() {
    alert("Hello " + name + "! Let’s explore our services.");
});

Variables

const name

Value: result of prompt(...) — a string containing what the user types (or null if they cancel).

const means the variable reference won’t be reassigned. We use it because we don’t need to change name later.

const welcomeEl

Value: a reference to the DOM element with id="welcome". This is an object (HTMLElement) you can read/write properties on.

Why store the element? So you don’t have to call getElementById several times — slightly faster and clearer.

Methods / Functions / Built-ins

console.log("JS is working!")

Prints text to the browser console (DevTools → Console). Great for debugging: confirms your JS file loaded.

prompt("What's your name?")

Opens a modal dialog asking user input. Returns a string or null. Used for a simple interactive demo. Not ideal for production UI (forms are better), but fine for learning.

document.getElementById("welcome")

DOM method that finds the first element with that id. Returns an HTMLElement or null if not found.

welcomeEl.innerText = "Welcome, " + name + "!"

innerText updates the text content of the element (no HTML parsing). Use it to change visible text.

welcomeEl.style.color = "#fff" and .style.fontSize = "3rem"

element.style accesses inline styles for that element — a quick way to change visual style from JS. Good for dynamic styling; for complex styles prefer adding/removing CSS classes.

document.getElementById("myBtn").addEventListener("click", function() { ... })

addEventListener attaches a listener for a given event ("click"). The second argument is a function (callback) executed when the event fires.

Using addEventListener is preferred over inline onclick attributes because you can attach multiple listeners and keep JS separate from HTML.

alert("Hello " + name + "! ...")

Shows a simple modal alert dialog to the user. Like prompt, it pauses interaction until dismissed. Useful for quick feedback but avoid for final UX.
