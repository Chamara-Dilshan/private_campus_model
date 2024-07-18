
<div class="d-flex flex-column align-items-center justify-content-center h-100">
    <div class="container col-md-8 d-flex flex-row login-container">
        <div class="col-md-8 login-left-container">
            <img src="src/assets/images/login-bg1.jpg" alt="pc" class="img-fluid">
        </div>
        <div class="col-md-4 login-right-container">
            <div class="d-flex flex-column align-items-center justify-content-center">
                <h1 class="text-center">Sign In</h1>

                <form action="src/php/login.php" method="POST"
                    class="mt-4 p-3 d-flex flex-column align-items-center justify-content-center gap-3 w-100">
                    <input class="form-control" type="email" required placeholder="Email Address" name="email" aria-label="email address">
                    <input class="form-control" type="password" required placeholder="Password" name="password" aria-label="password">
                    <input type="submit" name="submit" value="Login" class="btn btn-primary w-100 mt-4">

                </form>
            </div>
        </div>
    </div>

</div>

<div id="toastBox"></div>

<script>

    let toastContainer = document.getElementById("toastBox");
    

    function showToast(msg){
        let toast =document.createElement("div");
        toast.classList.add("toast-body");
        toast.innerHTML = `<div class="toast-msg"> <i class="bi bi-exclamation-circle-fill text-danger"></i> <span>${msg}</span></div>`;
        toastContainer.appendChild(toast);

        setTimeout(() => {
            toast.remove();
        }, 6000);
    }

</script>
<?php 

if (isset($_GET["status"])) {
    $loginStatus = $_GET["status"];
    if ($loginStatus == "invalid") {
        echo '<script>';
       echo 'showToast("Invalid Email or Password")';
        echo '</script>';
    } else if ($loginStatus == "error") {
        echo '<script>';
        echo 'showToast("Error Occured")';
        echo '</script>';
    }
}
?>

<style>
    #toastBox{
    position: absolute;
    bottom: 20px;
    right: 30px;
    display: flex;
    align-items: flex-end;
    flex-direction: column;
    overflow: hidden;
    padding: 20px;
}

.toast-body{
    display: block;
    width: 350px;
    height: 60px;
    background-color: #fff;
    margin: 15px 0;
    box-shadow: 0 0 20px rgba(0,0,0,0.3);
    display: flex;
    align-items: center;
    font-size: 1rem;
    font-weight: 500;
    position: relative;
    transform: translateX(100%);
    animation:  moveLeft 0.5s linear forwards;

}

@keyframes moveLeft{

    100%{
        transform: translateX(0);
    }
    
}

.toast-body::after{
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 5px;
    background-color: #dd1b2c;
    animation: toastFill 5s linear forwards;

}

@keyframes toastFill{

    100%{
        width: 0;
    }
}

.toast-msg{
    display: flex;
    align-items: center;
    width: 100%;
    height: 100%;

}

.toast-body i{
    margin: 0 20px;
    font-size: 30px;

}

.text-center {
  text-align: center;
  margin-top: 50px; /* Adjust the value as needed */
}
</style>