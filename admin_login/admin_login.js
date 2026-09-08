document.addEventListener('DOMContentLoaded', function() {
    const adminBtn = document.getElementById('adminBtn');
    const userBtn = document.getElementById('userBtn');
    const adminLoginSection = document.getElementById('adminLoginSection');
    const userLoginSection = document.getElementById('userLoginSection');
    const adminLoginForm = document.getElementById('adminLoginForm');
    const userLoginForm = document.getElementById('userLoginForm');

    // Hardcoded admin credentials
    const ADMIN_USERNAME = 'admin';
    const ADMIN_PASSWORD = 'admin123'; // Change these to your desired credentials

    // Show admin login form by default
    adminBtn.addEventListener('click', () => {
        adminLoginSection.classList.remove('hidden');
        userLoginSection.classList.add('hidden');
        adminBtn.classList.add('active');
        userBtn.classList.remove('active');
    });

    // Show user login form when the button is clicked
    userBtn.addEventListener('click', () => {
        userLoginSection.classList.remove('hidden');
        adminLoginSection.classList.add('hidden');
        userBtn.classList.add('active');
        adminBtn.classList.remove('active');
    });

    // Handle admin login form submission
    adminLoginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const username = document.getElementById('adminUsername').value;
        const password = document.getElementById('adminPassword').value;

        // Verify credentials
        if (username === ADMIN_USERNAME && password === ADMIN_PASSWORD) {
            sessionStorage.setItem('adminLoggedIn', 'true');
            window.location.href = 'adminmain.html'; // Redirect to the admin dashboard
        } else {
            document.getElementById('adminLoginError').textContent = 'Invalid Username or Password';
        }
    });

    // Handle user login form submission
    userLoginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const username = document.getElementById('userUsername').value;
        const password = document.getElementById('userPassword').value;
        const loginTime = new Date().toLocaleString();
        const userData = {
            username: username,
            password: password, // Store password (Not recommended for real applications)
            loginTime: loginTime
        };

        // Get existing user data from local storage or initialize empty array
        let users = JSON.parse(localStorage.getItem('users')) || [];
        users.push(userData);
        localStorage.setItem('users', JSON.stringify(users));

        // Show login success message
        document.getElementById('userLoginError').textContent = 'Login Successful!';

        // Redirect to the user dashboard or main page after a short delay
        setTimeout(() => {
            window.location.href = 'index.html';
        }, 2000);
    });
});