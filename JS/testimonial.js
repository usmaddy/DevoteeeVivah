const testimonials = [
    {
        text: `"Working with Julian was a transformative experience. Their eye for detail and ability to create mesmerizing visual patterns are unmatched. Every piece brought new depth and fascination."`,
        name: "Amara Collins",
        title: "Creative Director of Visual Narratives",
        image: "https://i.pravatar.cc/80?img=1"
    },
    {
        text: `"Kai’s ability to balance creativity with function is rare. Our app redesign was not only stunning but dramatically improved usability."`,
        name: "Kai Sterling",
        title: "Lead UX Strategist at Urban Nest",
        image: "https://i.pravatar.cc/80?img=2"
    },
    {
        text: `"Lena brought fresh perspectives and an elegant design language. Her insights turned our brand into a visual story that resonates deeply."`,
        name: "Lena Harper",
        title: "Design Lead at The Loft",
        image: "https://i.pravatar.cc/80?img=3"
    },
    {
        text: `"Lena brought fresh perspectives and an elegant design language. Her insights turned our brand into a visual story that resonates deeply."`,
        name: "Lena Harper",
        title: "Design Lead at The Loft",
        image: "https://i.pravatar.cc/80?img=3"
    }
];

const textEl = document.getElementById('testimonial-text');
const nameEl = document.getElementById('author-name');
const titleEl = document.getElementById('author-title');
const imageEl = document.getElementById('author-image');
const navItems = document.querySelectorAll('.testimonial-nav-item');

function updateTestimonial(index) {
    const t = testimonials[index];

    gsap.to('.testimonial-text', {
        opacity: 0, y: 10, duration: 0.3, onComplete: () => {
            textEl.textContent = t.text;
            nameEl.textContent = t.name;
            titleEl.textContent = t.title;
            imageEl.src = t.image;

            gsap.fromTo('.testimonial-text', { opacity: 0, y: 10 }, { opacity: 1, y: 0, duration: 0.4 });
        }
    });

    navItems.forEach(item => item.classList.remove('active'));
    navItems[index].classList.add('active');
}

navItems.forEach(item => {
    item.addEventListener('click', () => {
        const index = parseInt(item.dataset.index);
        updateTestimonial(index);
    });
});