<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: rgb(41, 39, 39);
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: rgb(255,181,102);
  color: rgb(41, 39, 39);
}

.container-2 {
  padding: 0 16px;
}
.container-2 h2{
  color:rgb(255,181,102);
}
.container-2::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.title2 {
  color: white;
}

.title3 {
  color: white;
}

.button6 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: rgb(41, 39, 39);
  background-color: rgb(255,181,102);
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button6:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>Some text about who we are and what we do.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center;color:rgb(255,181,102);">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="gambar/image2.jpg" alt="Jane" style="width:100%">
      <div class="container-2">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p class="title2">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="title3">jane@example.com</p>
        <p><button6 class="button6">Contact</button6></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="gambar/image.png" alt="Mike" style="width:100%">
      <div class="container-2">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p class="title2">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="title3 ">mike@example.com</p>
        <p><button6 class="button6">Contact</button6></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="gambar/image.png" alt="John" style="width:100%">
      <div class="container-2">
        <h2>Dhimas Eko</h2>
        <p class="title">Designer</p>
        <p class="title2">Some text that describes me lorem ipsum ipsum lorem.</p>
        <p class="title3">dhimaseko00@gmail.com</p>
        <p><button6 class="button6">Contact</button6></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>