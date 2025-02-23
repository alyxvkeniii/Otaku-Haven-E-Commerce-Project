document.addEventListener("DOMContentLoaded", function () {
    // Sidebar Toggle
    document.querySelector('.nav-toggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.add('active');
    });

    document.getElementById('close-sidebar').addEventListener('click', function() {
       document.getElementById('sidebar').classList.remove('active');
    });
});

document.getElementById("user-btn").addEventListener("click", function () {
    window.location.href = "login&signup.html";
});

