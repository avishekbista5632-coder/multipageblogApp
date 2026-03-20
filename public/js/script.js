document.addEventListener("input", e => {
    if(e.target.tagName.toLowerCase() === "textarea") {
        e.target.style.height = "auto";
        e.target.style.height = (e.target.scrollHeight) + "px";
    }
});
document.addEventListener("DOMContentLoaded", () => {
    const alerts = document.querySelectorAll(".alert-success, .alert-error");

    alerts.forEach(alert => {
        const duration = alert.dataset.duration ? parseInt(alert.dataset.duration) : 4000;

        setTimeout(() => {
            alert.style.transition = "opacity 0.7s ease, transform 0.7s ease";
            alert.style.opacity = "0";
            alert.style.transform = "translateY(-10px)";
            setTimeout(() => alert.remove(), 700);
        }, duration);
    });
});



