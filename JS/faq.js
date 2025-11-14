document.addEventListener("DOMContentLoaded", () => {
    feather.replace();

    const items = document.querySelectorAll(".faq-item");

    items.forEach((item) => {
        const question = item.querySelector(".faq-question");
        const answer = item.querySelector(".faq-answer");
        const content = answer.querySelector(".faq-answer-content");
        const icon = item.querySelector(".icon");

        gsap.set(answer, { height: 0, opacity: 0, display: "none" });

        question.addEventListener("click", () => {
            const isOpen = item.classList.contains("open");

            // Close others
            items.forEach((el) => {
                if (el !== item) {
                    el.classList.remove("open");
                    el.querySelector(".icon").setAttribute("data-feather", "plus");
                    gsap.to(el.querySelector(".faq-answer"), {
                        height: 0,
                        opacity: 0,
                        display: "none",
                        duration: 0.3,
                        ease: "power2.inOut"
                    });
                }
            });

            // Toggle clicked item
            if (!isOpen) {
                item.classList.add("open");
                gsap.set(answer, { display: "block" });
                gsap.to(answer, {
                    height: content.scrollHeight,
                    opacity: 1,
                    duration: 0.4,
                    ease: "power2.out"
                });
                icon.setAttribute("data-feather", "x");
            } else {
                item.classList.remove("open");
                gsap.to(answer, {
                    height: 0,
                    opacity: 0,
                    display: "none",
                    duration: 0.3,
                    ease: "power2.inOut"
                });
                icon.setAttribute("data-feather", "plus");
            }

            feather.replace(); // re-render icons
        });
    });
});