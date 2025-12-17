const testimonials = [
    {
        text: `"Hare Krishna, dear devotees Thank you, ISKCON Devotees for launching the Devotee Vivah app, a wonderful platform for devotees to find their life partner in Krishna Consciousness. This app is easy to use and provides a great opportunity for devotees to connect with like-minded individuals. "`,
        name: "Aashka Jaiswal",
        title: "Teacher",
        image: "../Resources/Images/avatar5.jpg"
    },
    {
        text: `"Hare Krishna this app is useful hats off you guys have made it possible.It's just starting in the future I hope this app will grow very well and fast.Haribol 🌸"`,
        name: "Mohit Prabhuji",
        title: "Casting Director",
        image: "../Resources/Images/avatar2.jpeg"
    },
    {
        text: `"Hare Krishna, I liked the components used in the app UI, also I think Ux Is very well decided. Once the images are properly fitted the App will have a very good look for users. I think there should be a search bar in discover option."`,
        name: "Shubham Maurya",
        title: "Sales Executive",
        image: "../Resources/Images/avatar3.jpeg"
    },
    // {
    //     text: `"Lena brought fresh perspectives and an elegant design language. Her insights turned our brand into a visual story that resonates deeply."`,
    //     name: "Lena Harper",
    //     title: "Design Lead at The Loft",
    //     image: "../Resources/Images/avatar4.jpg"
    // }
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