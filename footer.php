    </div>
  </div>

<!-- Footer -->
<footer class="w3-container w3-padding-16 w3-light-grey">
  <h4>FOOTER</h4>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<!-- End page content -->
</div>

<script>
  // Get the Sidebar
  var mySidebar = document.getElementById("mySidebar");

  // Get the DIV with overlay effect
  var overlayBg = document.getElementById("myOverlay");

  // Toggle between showing and hiding the sidebar, and add overlay effect
  function w3_open() {
    if (mySidebar.style.display === 'block') {
      mySidebar.style.display = 'none';
      overlayBg.style.display = "none";
    } else {
      mySidebar.style.display = 'block';
      overlayBg.style.display = "block";
    }
  }

  // Close the sidebar with the close button
  function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
  }
</script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>