function logout() {
    localStorage.clear()
    window.location.href = "http://localhost/WEB/TCC/pages/login.php";
}

document.getElementById("logout").addEventListener("click", logout);