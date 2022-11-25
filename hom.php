
<!DOCTYPE html>
<html>
<head>

	

	<title></title>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="file.css">


	
</head>
<body>
	<div class="b">
		<br>
		  SKILL PORTAL
<br>
<br>
	<div class ="c">
			<a href="#"><i class="fa fa-home"></i>HOME</a>
			<a href="#"><i class="fa fa-bars"></i>MENU</a>
			<a href="#"><i class="fa fa-trash"></i>TRASH</a>
			<a href="#"><i class="fa fa-close"></i>CLOSE</a>
			<a href="#"><i class="fa fa-folder"></i>FOLDER</a>
		
	</div>
</div>
<style>

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 10%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  color: black;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ccc;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: grey;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 88.1%;
  border-left:bold;
  height: 536px;
  border-color: black;
  border-style: ridge;
  border-width: thin;
}

</style>


<div class="tab" >
	<img src="https://thumbs.dreamstime.com/b/flat-male-avatar-image-beard-hairstyle-businessman-profile-icon-vector-179285629.jpg" style="width: 100%;height: 150px;">
	
  <button class="tablinks" onClick="openCity(event, 'profile')" id="defaultOpen">PROFILE</button>
  <button class="tablinks" onclick="openCity(event, 'project')">PROJECT</button>
  <button class="tablinks" onclick="openCity(event, 'rewards')">REWARDS</button>
  <button class="tablinks" onClick="openCity(event, 'certificate')" id="defaultOpen">CERTIFICATE</button>
  <button class="tablinks" onClick="openCity(event, 'reports')" id="defaultOpen">REPORTS</button>
  <button class="tablinks" onClick="openCity(event, 'progress')" id="defaultOpen">PROGRESS</button>
</div>


<div id="profile" class="tabcontent">
  <h3>PROFILE</h3>
  <div style="height: 250px;background-color: lightgray;">
    <div style="background-color: green;">
  <h1>DASHBOARD</h1>
</div>
<br>
<br
</div>


<div id="project" class="tabcontent">
  <h3>PROJECT</h3>
  <p></p> 
</div>

<div id="rewards" class="tabcontent">
  <h3>REWARDS</h3>
  <p></p>
</div><div id="reports" class="tabcontent">
  <h3>PREPORTS</h3>
  <p></p>
</div>
<div id="certificate" class="tabcontent">
  <h3>CERTIFICATES</h3>
  <p></p>
</div>
<div id="progress" class="tabcontent">
  <h3>PROGRESS</h3>
  <p></p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
  

</body>
</html>
