(() => {
  const members = [
    // {
    //   img: "../Resources/Images/avatar4.jpeg",
    //   alt: "Portrait of Rohit Nair, Founder",
    //   name: "Rohit Nair",
    //   role: "Founder",
    // },
    {
      img: "../Resources/Images/avatar3.jpeg",
      alt: "Portrait of Upeksh Naik, Developer",
      name: "Upeksh Naik",
      role: "Web Developer",
    },
    {
      img: "../Resources/Images/avatar1.jpeg",
      alt: "Portrait of Manish Prabhu, Developer",
      name: "Manish Prabhu",
      role: "Software Developer",
    },
    {
      img: "../Resources/Images/avatar2.jpeg",
      alt: "Portrait of Saideep Pramanick, Graphic Designer",
      name: "Saideep Pramanick",
      role: "Graphic Designer",
    },
    // You had a 'James Lee' in HTML thumbnails that wasn't in JS, if you want him, add him here.
    // {
    //   img: "https://storage.googleapis.com/a1aa/image/e3a2bd66-d7de-405d-aec9-0777f1ab35ab.jpg",
    //   alt: "Portrait of James Lee, UX Designer",
    //   name: "James Lee",
    //   role: "UX Designer",
    // },
  ];

  let currentIndex = 0; // Start with the first member in the 'members' array

  const mainImg = document.getElementById("main-member-img");
  const mainName = document.getElementById("main-member-name");
  const mainRole = document.getElementById("main-member-role");

  const prevArrow = document.getElementById("prev-arrow");
  const nextArrow = document.getElementById("next-arrow");

  const thumbsContainer = document.querySelector("div.flex.space-x-1.overflow-hidden");
  // Select the actual thumbnail images, which are the children of the thumbsContainer
  const thumbImgs = Array.from(thumbsContainer.children); // Convert NodeList to Array for easier manipulation

  // Update main display and thumbnail borders
  function updateMain(index) {
    const member = members[index];
    mainImg.src = member.img;
    mainImg.alt = member.alt;
    mainName.textContent = member.name;
    mainRole.textContent = member.role;

    // Update border on small images
    thumbImgs.forEach((img, i) => {
      if (i === index) { // The 'i' here directly corresponds to the 'index' of the members array
        img.classList.add("border-black");
      } else {
        img.classList.remove("border-black");
      }
    });

    // Scroll thumbnails container to keep active thumb visible
    const activeThumb = thumbImgs[index]; // Use index directly
    if (activeThumb) {
      const containerRect = thumbsContainer.getBoundingClientRect();
      const thumbRect = activeThumb.getBoundingClientRect();

      if (thumbRect.left < containerRect.left) {
        thumbsContainer.scrollBy({ left: thumbRect.left - containerRect.left - 8, behavior: "smooth" });
      } else if (thumbRect.right > containerRect.right) {
        thumbsContainer.scrollBy({ left: thumbRect.right - containerRect.right + 8, behavior: "smooth" });
      }
    }
  }

  // Initialize the display with the first member
  updateMain(currentIndex);

  // Arrow button handlers
  prevArrow.addEventListener("click", () => {
    currentIndex--;
    if (currentIndex < 0) currentIndex = members.length - 1;
    updateMain(currentIndex);
  });

  nextArrow.addEventListener("click", () => {
    currentIndex++;
    if (currentIndex >= members.length) currentIndex = 0;
    updateMain(currentIndex);
  });

  // Small images click handlers
  thumbImgs.forEach((img, i) => {
    img.addEventListener("click", () => {
      currentIndex = i; // The clicked thumbnail's index directly matches the members array index
      updateMain(currentIndex);
    });
  });
})();