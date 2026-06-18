import Alpine from "alpinejs";
import intersect from "@alpinejs/intersect";

Alpine.plugin(intersect);

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

const form = document.getElementById("contactForm");
const submitBtn = form.querySelector('button[type="submit"]');
const success = document.getElementById("success");

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(form);
    const spamField = formData.get("spam");
    //honeypot spam protection
    if (spamField?.trim()) {
        return;
    }
    formData.append("access_key", "7420cb42-4eb9-497a-864e-53664dc167fd");

    const originalText = submitBtn.textContent;

    submitBtn.textContent = "Sending...";
    submitBtn.disabled = true;

    try {
        const response = await fetch("https://api.web3forms.com/submit", {
            method: "POST",
            body: formData,
        });

        const data = await response.json();

        if (response.ok) {
            success.textContent = "Succes! Your message has been sent.";
            form.reset();
        } else {
            alert("Error: " + data.message);
        }
    } catch (error) {
        alert("Something went wrong. Please try again.");
    } finally {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }
});
