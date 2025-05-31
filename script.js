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
  ],
  g_secretary: [
    {
      name: "Taskia Khatun",
      position: "General Secretary",
      image: "images/taskia.jpg",
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
  ],
  of_s: [
    {
      name: "Maimuna Tabassum",
      position: "Office Secretary",
      image: "images/maimuna.jpg",
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
      name: "Taskia Khatun",
      position: "General Secretary",
      image: "images/khairun.jpg",
    },
  ],
  c_s: [
    {
      name: "Anol Krishnodip",
      position: "Cultural Secretary",
      image: "images/anol.jpg",
    },
  ],
  s_s: [
    {
      name: "Muhammad Ishmamul Hoque",
      position: "Sports Secretary",
      image: "images/ishmam.jpg",
    },
  ],
  er_s: [
    {
      name: "Taskia Khatun ",
      position: "General Secretary",
      image: "images/khairun.jpg",
    },
  ],
  h_s: [
    {
      name: "Mst. Mahmuda Khatun Sadia",
      position: "Hospitality Secretary",
      image: "images/sadia.jpg",
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
      name: "Aribah Tasnim Surovi",
      position: "Executive Member",
      image: "images/surovi.jpg",
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
  navLinks.forEach((link) => {
    link.addEventListener("click", () => {
      navLinks.forEach((item) => item.classList.remove("active"));
      link.classList.add("active");

      // Close mobile menu after selection
      if (navMenu.classList.contains("show")) {
        navMenu.classList.remove("show");
      }
    });
  });

  // Search functionality
  const searchInput = document.getElementById("search-input");
  const searchBtn = document.getElementById("search-btn");

  searchBtn.addEventListener("click", performSearch);
  searchInput.addEventListener("keyup", (e) => {
    if (e.key === "Enter") {
      performSearch();
    }
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

// Search function
function performSearch() {
  const searchTerm = document
    .getElementById("search-input")
    .value.toLowerCase();
  if (!searchTerm) return;

  // Combine all gv into one array
  const allgv = [...gvData.executive, ...gvData.teachers, ...gvData.students];

  // Filter matching results
  const results = allgv.filter(
    (person) =>
      person.name.toLowerCase().includes(searchTerm) ||
      person.position.toLowerCase().includes(searchTerm) ||
      person.department.toLowerCase().includes(searchTerm)
  );

  if (results.length > 0) {
    // Create a modal with search results
    const modal = document.createElement("div");
    modal.className = "search-modal";
    modal.innerHTML = `
            <div class="modal-content">
                <h2>Search Results</h2>
                <div class="search-results">
                    ${results
                      .map(
                        (person) => `
                        <div class="search-result">
                            <div class="search-result-img">
                                ${
                                  person.image
                                    ? `<img src="${person.image}" alt="${person.name}">`
                                    : '<i class="fas fa-user-graduate"></i>'
                                }
                            </div>
                            <div class="search-result-info">
                                <h3>${person.name}</h3>
                                <p><strong>${person.position}</strong> | ${
                          person.department
                        }</p>
                                <p>${person.email} | ${person.phone}</p>
                            </div>
                        </div>
                    `
                      )
                      .join("")}
                </div>
                <button class="close-modal">Close</button>
            </div>
        `;

    document.body.appendChild(modal);

    // Add modal styles
    const style = document.createElement("style");
    style.innerHTML = `
            .search-modal {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 1000;
            }

            .modal-content {
                background: white;
                padding: 2rem;
                border-radius: 10px;
                max-width: 600px;
                width: 90%;
                max-height: 80vh;
                overflow-y: auto;
            }

            .search-results {
                margin: 1.5rem 0;
            }

            .search-result {
                display: flex;
                align-items: center;
                padding: 1rem;
                border-bottom: 1px solid #eee;
            }

            .search-result:last-child {
                border-bottom: none;
            }

            .search-result-img {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                overflow: hidden;
                margin-right: 1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #f0f0f0; /* Placeholder background */
            }

            .search-result-img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .search-result-img .fas {
                font-size: 2.5rem;
                color: #ccc;
            }

            .search-result-info h3 {
                color: var(--primary-dark);
                margin-bottom: 0.25rem;
            }

            .close-modal {
                background: var(--primary);
                color: white;
                border: none;
                padding: 0.75rem 1.5rem;
                border-radius: 5px;
                cursor: pointer;
                font-weight: 600;
                transition: var(--transition);
            }

            .close-modal:hover {
                background: var(--primary-dark);
            }
        `;
    document.head.appendChild(style);

    // Close modal functionality
    const closeBtn = modal.querySelector(".close-modal");
    closeBtn.addEventListener("click", () => {
      document.body.removeChild(modal);
      document.head.removeChild(style);
    });
  } else {
    alert("No gv members found matching your search.");
  }
}
