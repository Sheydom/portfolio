import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

const dot = document.getElementById("cursor-dot");
const ring = document.getElementById("cursor-ring");

let mouseX = 0;
let mouseY = 0;
let ringX = 0;
let ringY = 0;


window.addEventListener("mousemove", (e) => {
    mouseX = e.clientX;
    mouseY = e.clientY;

    dot.style.left = `${mouseX}px`;
    dot.style.top = `${mouseY}px`;
});

function animateCursor() {
    ringX += (mouseX - ringX) * 0.18;
    ringY += (mouseY - ringY) * 0.18;

    ring.style.left = `${ringX}px`;
    ring.style.top = `${ringY}px`;

    requestAnimationFrame(animateCursor);
}

animateCursor();

const clickableElements = document.querySelectorAll(
    'a, button, input, textarea, select, [role="button"], .cursor-hover',
);

clickableElements.forEach((el) => {
    el.addEventListener("mouseenter", () => {
        ring.classList.add("hover");
    });

    el.addEventListener("mouseleave", () => {
        ring.classList.remove("hover");
    });
});

window.addEventListener("mousedown", () => {
    dot.classList.add("click");
});

window.addEventListener("mouseup", () => {
    dot.classList.remove("click");
});
