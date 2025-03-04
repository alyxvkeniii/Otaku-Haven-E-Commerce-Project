function togglePassword() {
    var passwordInput = document.getElementById("password");
    var toggleIcon = document.getElementById("togglePassword").querySelector("i");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash"); // Change to closed eye
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye"); // Change to open eye
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const signUpButton = document.querySelector(".sign-up button");
    const signInButton = document.querySelector(".sign-in button");
    const userBtn = document.getElementById("user-btn");

    // 🟢 Handle Signup (Register New User)
    signUpButton.addEventListener("click", function (event) {
        event.preventDefault();

        const name = document.querySelector(".sign-up input[type='text']").value;
        const email = document.querySelector(".sign-up input[type='email']").value;
        const password = document.querySelector(".sign-up input[type='password']").value;

        if (name && email && password) {
            let users = JSON.parse(localStorage.getItem("users")) || [];

            // Check if email already exists
            const userExists = users.some(user => user.email === email);
            if (userExists) {
                alert("Email already registered. Please log in.");
                return;
            }

            // Save new user
            users.push({ name, email, password });
            localStorage.setItem("users", JSON.stringify(users));

            alert("Account created successfully! You can now sign in.");
        } else {
            alert("Please fill in all fields.");
        }
    });

    // 🟢 Handle Login
    signInButton.addEventListener("click", function (event) {
        event.preventDefault();

        const email = document.querySelector(".sign-in input[type='email']").value;
        const password = document.querySelector(".sign-in input[type='password']").value;
        const users = JSON.parse(localStorage.getItem("users")) || [];

        // Find the user in stored users
        const loggedInUser = users.find(user => user.email === email && user.password === password);

        if (loggedInUser) {
            localStorage.setItem("isLoggedIn", "true");
            localStorage.setItem("loggedInUser", JSON.stringify(loggedInUser));
            window.location.href = "homepage.html"; // Redirect to homepage
        } else {
            alert("Invalid email or password!");
        }
    });

    // 🟢 Handle User Display & Logout (On Homepage)
    if (localStorage.getItem("isLoggedIn") === "true") {
        const currentUser = JSON.parse(localStorage.getItem("loggedInUser"));

        if (userBtn) {
            userBtn.textContent = `Welcome, ${currentUser.name} (Logout)`;
            userBtn.addEventListener("click", function () {
                localStorage.removeItem("isLoggedIn");
                localStorage.removeItem("loggedInUser");
                window.location.href = "login&signup.html"; // Redirect to login page
            });
        }
    }
});