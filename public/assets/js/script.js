const toggleBtn = document.getElementById("toggleSidebar");
const sidebar = document.getElementById("sidebar");
const mainWrapper = document.getElementById("main-wrapper");

function isMobile() {
    return window.innerWidth < 992;
}

toggleBtn.addEventListener("click", () => {
    if (isMobile()) {
        // Toggle mobile
        sidebar.classList.toggle("show");
    } else {
        // Toggle desktop
        sidebar.classList.toggle("collapsed");
        mainWrapper.classList.toggle("full");
    }
});

// Optional: reset state on resize
window.addEventListener("resize", () => {
    if (isMobile()) {
        sidebar.classList.remove("collapsed");
        mainWrapper.classList.add("full");
    } else {
        sidebar.classList.remove("show");
    }
});

// Initial load (auto collapse on mobile)
if (isMobile()) {
    sidebar.classList.add("collapsed");
    mainWrapper.classList.add("full");
}
