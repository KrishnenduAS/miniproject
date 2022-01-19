<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
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
  background-color: #401e2d;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #401e2d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
  a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}
}
</style>
</head>
<body>
<a href="\event_management_system\event\home.php" class="previous">&laquo; Previous</a>
<div class="about-section">
  <h1>About Us Page</h1>
  <p>This event management system software is designed to help event planners more easily navigate every aspect of the event process and finding out the best place/venue for events in there locality. The event planners can register in this portal and use the services they are offered like Wedding, Corporate / Commercial events, Birthday party, live music and orchestra, Entertainment shows and stalls, launch celebration, promotional activities, celebrity event/stage shows, conference, seminar Etc. They can also specify the types of service help they are offering like Anchoring, Venue Decoration, Sound and Lighting, DJ. Stage Set Up etc.</p>
  <p>Resize the browser window to see that this page is responsive by the way.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        
        <p>jane@example.com</p>
       
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Director</p>
       
        <p>mike@example.com</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
       
        <p>john@example.com</p>
      
      </div>
    </div>
  </div>
</div>

</body>
</html>
