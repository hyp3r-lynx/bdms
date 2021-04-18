function underDevelopment(){
    alert("This function is currently under development.");
}

function notAvailable(){
    alert("This feature is currently not available.");
}

function openDash(pageName,elmnt) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundImage = "";
  }

  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundImage = "radial-gradient( circle 597px at 93% 9.8%,  rgba(255,61,89,1) 1.7%, rgba(252,251,44,1) 97% )";
}

