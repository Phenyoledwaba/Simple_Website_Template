console.log("JS is working!");

// Adding Dynamic Content
// Personalized welcome message
const name = prompt("What's your name?");
document.getElementById("welcome").innerText = "Welcome, " + name + "!";

// Basic JavaScript Example
// Select the button by its ID and add a click event
document.getElementById("myBtn").addEventListener("click", function() {
    alert("Hello " + name + " You clicked the button.");
});

// Manipulating CSS with JavaScript
// We can make the welcome message look nicer by changing color and size dynamically.
// Change style of the welcome message
document.getElementById("welcome").style.color = "blue";
document.getElementById("welcome").style.fontSize = "30px";

// More Advanced Example(Interactive Cards)
// Let’s make a service card that highlights when hovered.
// Add hover effect to card
//document.getElementById("card1").addEventListener("mouseenter", function() {
//    this.style.backgroundColor = "#f0f0f0"; // light gray on hover
//});
//document.getElementById("card1").addEventListener("mouseleave", function() {
//   this.style.backgroundColor = "white"; // revert when mouse leaves
//});





