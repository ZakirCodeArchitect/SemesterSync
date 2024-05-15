// session.js
document.addEventListener("DOMContentLoaded", function() {
    // Check if session data exists in local storage
    let sessionData = JSON.parse(localStorage.getItem("session")) || {};

    // Initialize session object if not exists
    if (!sessionData.pages) {
        sessionData.pages = [];
    }

    // Function to track page navigation
    function trackPage(page) {
        sessionData.pages.push(page);
        localStorage.setItem("session", JSON.stringify(sessionData));
    }

    // Add event listeners to page links
    let links = document.querySelectorAll("a");
    links.forEach(function(link) {
        link.addEventListener("click", function(event) {
            let page = event.target.getAttribute("href");
            trackPage(page);
        });
    });
});
