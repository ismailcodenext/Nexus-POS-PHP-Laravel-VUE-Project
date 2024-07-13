document.addEventListener('DOMContentLoaded', function() {
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("openModalBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // Check if all elements are found
    if (modal && btn && span) {
      // When the user clicks the button, open the modal
      btn.onclick = function() {
        modal.style.display = "block";
        document.documentElement.style.overflowY = "hidden"; // Disable scrolling
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
        document.documentElement.style.overflowY = "scroll"; // Enable scrolling
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
          document.documentElement.style.overflowY = "scroll"; // Enable scrolling
        }
      }
    } else {
      console.error('Modal, button, or span not found');
    }
  });
