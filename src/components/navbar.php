    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="index.php?page=home"><img src="src/assets/icons/logo.png" width="40"></a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

      <li class="nav-item">
        <a class="nav-link  <?php echo ($_GET['page'] == 'home' ? 'active' : ''); ?> " aria-current="page" href="index.php?page=home">Home</a>
        </li>

        <li class="nav-item">
        <a class="nav-link  <?php echo ($_GET['page'] == 'student' ? 'active' : ''); ?> " aria-current="page" href="index.php?page=student">Students</a>
        </li>

        <li class="nav-item">
        <a class="nav-link " aria-current="page" href="#">Courses</a>
        </li>

        <li class="nav-item">
        <a class="nav-link " aria-current="page" href="#">Faculties</a>
        </li>

        <li class="nav-item">
        <a class="nav-link " aria-current="page" href="#">Contact Us</a>
        </li>
       
      </ul>

      <div class="username" id="username">
      </div>
    </div>
  </div>
</nav>

<script>
  function getUsername() {
    const username = localStorage.getItem("username");
    if (username) {
      document.getElementById("username").textContent = username; 
    }else{
      window.location.href = "index.php?page=login";
    }
  }

  getUsername();

  window.onload = function() {
    getUsername();
  };

</script>



