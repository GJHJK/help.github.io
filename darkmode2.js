// Load dark mode state from local storage
function loadDarkModeState() {
    const storedData = localStorage.getItem('dark-mode');
    return storedData ? JSON.parse(storedData) : false;
}

// Apply the saved dark mode state
function applyDarkModeState() {
    const isDarkMode = loadDarkModeState();
    if (isDarkMode) {
        document.body.classList.add("dark-mode");
    } else {
        document.body.classList.remove("dark-mode");
    }
}

// Initialize dark mode state on page load
document.addEventListener("DOMContentLoaded", function () {
    applyDarkModeState();
});

