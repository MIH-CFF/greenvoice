// script.js
// gv data
const gvData = {
  president: [
    {
      name: "Ifran Yousuf Shihab",
      position: "President",
      image: "images/shihab.jpg",
    },
    {
      name: "MD. Zillur Rahman Samrat",
      position: "Vice President",
      image: "images/samrat.jpg",
    },
    {
      name: "Susmita Podder",
      position: "Vice President",
      image: "images/susmita.jpg",
    },
    {
      name: "Sezuti Sarkar",
      position: "Vice President",
      image: "images/sezuti.jpg",
    },
  ],
  g_secretary: [
    {
      name: "Taskia Khatun",
      position: "General Secretary",
      image: "images/taskia.jpg",
    },
    {
      name: "Khairun Nahar",
      position: "Assistant General Secretary",
      image: "images/laka.jpg",
    },
    {
      name: "Israt Jahan Rimu",
      position: "Assistant General Secretary",
      image: "images/rimu.jpg",
    },
    {
      name: "Md Al Jubayer",
      position: "Assistant General Secretary",
      image: "images/jubayer.jpg",
    },
  ],
  o_s: [
    {
      name: "Md. Shafiqul Islam",
      position: "Organizing Secretary",
      image: "images/shafiqul.jpg",
    },
    {
      name: "Ramisha Islam Ripa",
      position: "Organizing Secretary",
      image: "images/ramisha.jpg",
    },
    {
      name: "Nashmin Ferdaush",
      position: "Organizing Secretary",
      image: "images/nashmin.jpg",
    },
    {
      name: "Md. Mine Hossain",
      position: "Organizing Secretary",
      image: "images/mine.jpg",
    },
  ],
  tre: [
    {
      name: "Nafisa Rahman",
      position: "Treasurer",
      image: "images/nafisa.jpg",
    },
    {
      name: "Shamima Yesmin",
      position: "Treasurer",
      image: "images/yesmin.jpg",
    },
  ],
  mp_s: [
    {
      name: "Lamyah Islam",
      position: "Media and Publication Secretary",
      image: "images/lamyah.jpg",
    },
    {
      name: "Musarrat Jahan Richie",
      position: "Media and Publication Secretary",
      image: "images/richie.jpg",
    },
  ],
  of_s: [
    {
      name: "Maimuna Tabassum",
      position: "Office Secretary",
      image: "images/maimuna.jpg",
    },
    {
      name: "Md. Farhadul Islam Fahad",
      position: "Office Secretary",
      image: "images/fahad.jpg",
    },
  ],
  ic_s: [
    {
      name: "Mahmuda Monowar Lorin",
      position: "Information and Communication Secretary",
      image: "images/lorin.jpg",
    },
    {
      name: "Mst. Rabeya Sarker",
      position: "Information and Communication Secretary",
      image: "images/rabeya.jpg",
    },
  ],
  swa_s: [
    {
      name: "Shibu Majumder",
      position: "Social Welfare Affairs Secretary",
      image: "images/shibu.jpg",
    },
  ],
  c_s: [
    {
      name: "Anol Krishnodip",
      position: "Cultural Secretary",
      image: "images/anol.jpg",
    },
    {
      name: "Dipannita Roy Pritha",
      position: "Cultural Secretary",
      image: "images/dipannita.jpg",
    },
  ],
  s_s: [
    {
      name: "Muhammad Ishmamul Hoque",
      position: "Sports Secretary",
      image: "images/ishmam.jpg",
    },
    {
      name: "Sanjida Akter",
      position: "Sports Secretary",
      image: "images/sanzida.jpg",
    },
  ],
  er_s: [
    {
      name: "K. M. Asif Al-Rehman Shammo",
      position: "Education and Research Secretary",
      image: "images/shammo.jpg",
    },
  ],
  h_s: [
    {
      name: "Mst. Mahmuda Khatun Sadia",
      position: "Hospitality Secretary",
      image: "images/sadia.jpg",
    },
    {
      name: "Md Asadujjaman",
      position: "Hospitality Secretary",
      image: "images/asad.jpg",
    },
  ],
  rd_s: [
    {
      name: "Parmita Saha Setu",
      position: "Relief and Disaster Management Secretary",
      image: "images/setu.jpg",
    },
    {
      name: "Mst. Salma Akter",
      position: "Relief and Disaster Management Secretary",
      image: "images/salma.jpg",
    },
  ],
  hw_s: [
    {
      name: "Apsari Wasim",
      position: "Human Welfare Secretary",
      image: "images/apsari.jpg",
    },
  ],
  em: [
    {
      name: "Arnab Saha",
      position: "Executive Member",
      image: "images/arnob.jpg",
    },
    {
      name: "Aribah Tasnim Surovi",
      position: "Executive Member",
      image: "images/surovi.jpg",
    },
    {
      name: "Arpita Rani Noyoni",
      position: "Executive Member",
      image: "images/arpita.jpg",
    },
  ],
};

// Initialize the page
document.addEventListener("DOMContentLoaded", () => {
  // Render gv cards
  rendergvCards("president");
  rendergvCards("g_secretary");
  rendergvCards("o_s");
  rendergvCards("tre");
  rendergvCards("mp_s");
  rendergvCards("of_s");
  rendergvCards("ic_s");
  rendergvCards("swa_s");
  rendergvCards("c_s");
  rendergvCards("s_s");
  rendergvCards("er_s");
  rendergvCards("h_s");
  rendergvCards("hw_s");
  rendergvCards("em");

  // Mobile Navigation Toggle
  const navToggle = document.querySelector(".nav-toggle");
  const navMenu = document.getElementById("nav-menu");

  navToggle.addEventListener("click", () => {
    navMenu.classList.toggle("show");
  });

  // Navigation active state
  const navLinks = document.querySelectorAll("nav a");
  const currentPath = window.location.pathname.split("/").pop(); // removes preceding folders if any

  navLinks.forEach((link) => {
    // Extract href path (e.g., "about.html")
    const linkPath = link.getAttribute("href");

    // Check if this link matches current page
    if (
      linkPath === currentPath ||
      (linkPath === "index.html" && currentPath === "")
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

  gvData[section].forEach((person) => {
    const card = document.createElement("div");
    card.className = "gv-card";
    card.innerHTML = `
            <a href="profile.php?name=${person.name}&position=${
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
