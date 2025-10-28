1. CSS Rule	Meaning

* { margin: 0; padding: 0; }	Resets all browser default margins/paddings

body { ... }	Styles the entire page

h1 { ... }	Styles only the main heading

p { ... }	Styles all paragraphs

a:hover { ... }	Changes link style when hovered

button:hover { ... }	Changes button color when hovered

2. Concept	Description	Example

Selector	What you are styling	p, .className, #id

Property	What aspect to change	color, font-size, background-color

Value	The setting applied	red, 18px, #fff

External CSS	Styles in a separate file	<link rel="stylesheet" href="style.css">

Cascading	Last rule wins	Later styles override earlier ones

CSS — assets/css/style.css

You mainly used simple custom styles and allowed Bootstrap to handle layout. Key items:

body {
  font-family: 'Poppins', Arial, sans-serif;
  background-color: #f4f4f9;
  color: #333;
  padding: 20px;
}

.hero-section {
  background-image: url('../images/hero-bg.jpg');
  background-size: cover;
  background-position: center;
  min-height: 70vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

CSS properties explained

font-family — sets typeface; fallback order (Poppins -> Arial -> sans-serif).

background-color — page background.

padding: 20px — page padding; note Bootstrap's container also adds spacing — you may reduce duplication later.

.hero-section properties:

background-image — visual hero banner (replace with real image path).

background-size: cover — image fills section while preserving aspect ratio and cropping as needed.

background-position: center — centers the image.

min-height: 70vh — at least 70% of viewport height.

display: flex; justify-content: center; — vertically centers inner container; we used flex-direction: column to stack heading, text, button.
