const teData = {
  s_ad: [
    {
      name: "Osama Iban",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/osama.jpg",
    },
    {
      name: "Md. Al Shahriar Nafiz",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/nafiz.jpg",
    },
    {
      name: "Md. Bokul Ali",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/bokul.jpg",
    },
    {
      name: "Mst. Jannatun Fiza",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/fiza.jpg",
    },
    {
      name: "Md. Raihanul Islam",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/raihan.jpg",
    },
    {
      name: "Sadia Islam Ena",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/ena.jpg",
    },
    {
      name: "Md. Al-Amin Hossain",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/al_amin.jpg",
    },
    {
      name: "Md. Omar Faruk",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/omar.jpg",
    },
    {
      name: "Asraul Hoque",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/asraul.jpg",
    },
    {
      name: "S.M. Rakib Hasan",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/rakib.jpg",
    },
    {
      name: "Vashwati Mondol",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/mondol.jpg",
    },
    {
      name: "Lailatul Ferdows Shishir",
      position: "Student Advisor",
      faculty: "Faculty of Agriculture",
      image: "student/shishir.jpg",
    },
  ],
};

// Initialize the page
document.addEventListener("DOMContentLoaded", () => {
  // Render gv cards
  rendergvCards("s_ad");

  // Mobile Navigation Toggle
  const navToggle = document.querySelector(".nav-toggle");
  const navMenu = document.getElementById("nav-menu");

  navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("show");
  });

  const navLinks = document.querySelectorAll("nav a");
  const currentPath = window.location.pathname.split("/").pop(); // removes preceding folders if any

  navLinks.forEach((link) => {
    // Extract href path (e.g., "about.html")
    const linkPath = link.getAttribute("href");

    // Check if this link matches current page
    if (
      linkPath === currentPath ||
      (linkPath === "index.php" && currentPath === "")
    ) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }

    // Optional: Close mobile menu when a link is clicked
    link.addEventListener("click", () => {
      if (navMenu.classList.contains("show")) {
        navMenu.classList.remove("show");
      }
    });
  });

  // gv card hover effect
  const gvCards = document.querySelectorAll(".gv-card");
  gvCards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
      card.style.transform = "translateY(-10px)";
    });

    card.addEventListener("mouseleave", () => {
      card.style.transform = "translateY(0)";
    });
  });
});

// Render gv cards for a section
function rendergvCards(section) {
  const container = document.querySelector(`#${section} .gv-grid`);
  if (!container) return;

  container.innerHTML = "";

  teData[section].forEach((person) => {
    const card = document.createElement("div");
    card.className = "gv-card";
    card.innerHTML = `
            <a href="profile_st.php?name=${person.name}&position=${
      person.position
    }" style="text-decoration:none">
            <div class="card-img">
                ${
                  person.image
                    ? `<img src="${person.image}" alt="${person.name}">`
                    : '<i class="fa-solid fa-user"></i>'
                }
            </div>
            <div class="card-content">
                <h3>${person.name}</h3>
                <span class="position">${person.position}</span>
            </div>
            </a>
        `;
    container.appendChild(card);
  });
}
