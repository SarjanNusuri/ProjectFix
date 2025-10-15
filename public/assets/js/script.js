const toggleBtn = document.getElementById("toggleSidebar");
const sidebar = document.getElementById("sidebar");
const mainWrapper = document.getElementById("main-wrapper");

toggleBtn.addEventListener("click", () => {
    sidebar.classList.toggle("collapsed");
    mainWrapper.classList.toggle("full");
});
