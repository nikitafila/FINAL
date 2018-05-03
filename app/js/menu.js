'use strict';

(function() {
  var body = document.body;
  var burgerMenu = document.getElementsByClassName('b-menu')[0];
  var burgerContain = document.getElementsByClassName('b-container')[0];
  var burgerNav = document.getElementsByClassName('b-nav')[0];

  burgerMenu.addEventListener('click', function toggleClasses() {
    [body, burgerContain, burgerNav].forEach(function (el) {
      el.classList.toggle('open');
    });
  }, false);
})();

		/* When the user clicks on the button, 
		toggle between hiding and showing the dropdown content */
		function myFunction() {
		    document.getElementById("mbDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
		  if (!event.target.matches('.Droop')) {

		    var dropdowns = document.getElementsByClassName("mb-drop");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		}