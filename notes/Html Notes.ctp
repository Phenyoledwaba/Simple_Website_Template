HTML starter pack:

<!DOCTYPE html> → tells browsers this is an HTML5 page.

<html> → wraps everything.

<head> → meta info (not shown).

<body> → what users actually see.

<h1> → heading.

<p> → paragraph.

<a href="..."> → hyperlink.

    HTML — index.html

I’ll explain the key elements and attributes we used.

Structural elements

<!DOCTYPE html> — declares HTML5.

<html lang="en"> — lang helps accessibility & search engines.

<meta name="viewport" content="width=device-width, initial-scale=1.0"> — essential for responsive behavior on mobile.

<link rel="stylesheet" href="..."> — loads CSS (Bootstrap then your style.css).

Important sections & their roles

Navbar — <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">

navbar — base Bootstrap navbar styles.

navbar-expand-lg — expand (show full menu) on large screens; collapse on small screens.

navbar-light bg-light — light colored navbar; pairs text color appropriately.

sticky-top — keeps navbar pinned to the top when scrolling.

shadow-sm — subtle box shadow for elevation.

Hero — <section class="hero-section bg-dark text-white text-center py-5">

hero-section — our custom class (we add background image + vertical centering in CSS).

bg-dark text-white — Bootstrap utilities: dark background + white text.

text-center — centers text horizontally.

py-5 — vertical padding (y-axis) utility; 5 equals a larger spacing.

Welcome target — <h1 id="welcome" class="display-4"></h1>

id="welcome" — targeted by JS.

display-4 — Bootstrap large heading style.

Button — <button id="myBtn" class="btn btn-primary btn-lg mt-3">Get Started</button>

btn btn-primary — Bootstrap button and primary color.

btn-lg — large sizing.

mt-3 — margin-top spacing.

Services (Cards grid) — uses:

container — central wrapper with horizontal padding.

row — Bootstrap grid row.

col-md-4 — column that is 4/12 (one-third) wide on medium and above; stacks on small screens.

card + card-body — Bootstrap card component structure.

h-100 — forces the card to be same height as siblings (good for equal columns).

shadow-sm — small shadow.

Portfolio images — <img class="img-fluid rounded shadow-sm">

img-fluid — responsive image scaling (max-width: 100%; height: auto).

rounded — rounded corners.

shadow-sm — small shadow.

Contact form — uses form-control on inputs and mb-3 spacing classes:

form-control — Bootstrap input styling that gives consistent padding, border, and focus style.

w-100 on button — makes it full width.

Footer — simple container with bg-light text-center py-4.

Script order (important)

We used:

<script src="js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@.../bootstrap.bundle.min.js"></script>

We include script.js before the Bootstrap JS bundle in the examples above. That works fine because our JS interacts only with DOM elements (not Bootstrap JS components). However:

If your script needed to initialize Bootstrap components (like a JS modal or carousel API) you should include the Bootstrap bundle before running that init code OR run your code after the DOMContentLoaded event to ensure all libraries are available.

A safe pattern: place libraries (Bootstrap) before your custom scripts, or wrap your JS in a document.addEventListener('DOMContentLoaded', ...) handler.
