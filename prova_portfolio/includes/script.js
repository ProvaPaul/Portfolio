document.addEventListener('DOMContentLoaded', function () {
    const modeSwitch = document.getElementById('modeSwitch');
    const dashboardContent = document.getElementById('dashboard-content');

    function loadPage(page) {
        fetch(page)
            .then(response => response.text())
            .then(data => {
                dashboardContent.innerHTML = data;
            })
            .catch(error => console.error('Error fetching page:', error));
    }

    modeSwitch.addEventListener('change', function () {
        document.body.classList.toggle('dark-mode');
        document.querySelector('.sidebar').classList.toggle('dark-mode');
    });

    // Initial page load (default: home.php)
    loadPage('footer.php');
});
