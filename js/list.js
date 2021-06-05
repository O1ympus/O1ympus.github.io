function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
} // Close the dropdown menu if the user clicks outside of it
document.getElementById('myDropdown').onclick = function() {
    document.getElementById('button_remove').classList.remove('dropbtn_active');
}
window.onclick = function (event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;

    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];

      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
};
