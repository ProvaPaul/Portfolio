document.addEventListener('DOMContentLoaded', function () {
    const navCheck = document.getElementById('nav_check');
    const hamburger = document.querySelector('.hamburger');

    // Toggle the navigation when the checkbox state changes
    navCheck.addEventListener('change', function () {
        if (navCheck.checked) {
            document.body.style.overflow = 'hidden'; // Optional: Disable scrolling when the navigation is open
        } else {
            document.body.style.overflow = ''; // Optional: Enable scrolling when the navigation is closed
        }
    });

    // Close the navigation when a menu item is clicked (optional)
    const navItems = document.querySelectorAll('header nav ul li a');
    navItems.forEach(function (item) {
        item.addEventListener('click', function () {
            navCheck.checked = false;
            document.body.style.overflow = ''; // Optional: Enable scrolling when the navigation is closed
        });
    });

    // Toggle the checkbox when the hamburger icon is clicked
    hamburger.addEventListener('click', function () {
        navCheck.checked = !navCheck.checked;
    });
});
