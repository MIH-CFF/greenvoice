const teData = {
  c_ad: [
    {
      name: "Mr. Sharif Ar Raffi",
      position: "Chief Advisor",
      dept: "Department of Genetics and Plant Breeding",
      image: "teacher/rafi.jpg",
    },
  ],
  t_ad: [
    {
      name: "Dr. Md. Ashrafuzzaman",
      position: "Teacher Advisor",
      dept: "Department of Crop Botany",
      image: "teacher/ashraf.jpg",
    },
    {
      name: "Dr. Mahbubul Pratik Siddique",
      position: "Teacher Advisor",
      dept: "Department of Microbiology and Hygiene",
      image: "teacher/pratik.jpg",
    },
    {
      name: "Dr. Md. Parvez Anwar",
      position: "Teacher Advisor",
      dept: "Department of Agronomy",
      image: "teacher/parvej.jpg",
    },
    {
      name: "Dr. Md. Shahiduzzaman",
      position: "Teacher Advisor",
      dept: "Department of Parasitology",
      image: "teacher/shahid.jpg",
    },
    {
      name: "Dr. Md. Rostom Ali",
      position: "Teacher Advisor",
      dept: "Department of Farm Power and Machinery",
      image: "teacher/rostom.jpg",
    },
    {
      name: "Dr. Muhammad Ashik-E-Rabbani",
      position: "Teacher Advisor",
      dept: "Department of Farm Power and Machinery",
      image: "teacher/ashik.jpg",
    },
    {
      name: "Dr. Mohammad Mofizur Rahman Jahangir",
      position: "Teacher Advisor",
      dept: "Department of Soil Science",
      image: "teacher/mofiz.jpg",
    },
    {
      name: "Dr. Ziaul Haque",
      position: "Teacher Advisor",
      dept: "Department of Anatomy and Histology",
      image: "teacher/ziaul.jpg",
    },
    {
      name: "Dr. Md. Badiuzzaman Khan",
      position: "Teacher Advisor",
      dept: "Department of Environmental Science",
      image: "teacher/badiuzzaman.jpg",
    },
    {
      name: "Dr. Md. Sabibul Haque",
      position: "Teacher Advisor",
      dept: "Department of Crop Botany",
      image: "teacher/sabib.jpg",
    },
    {
      name: "Dr. Sabina Yeasmin",
      position: "Teacher Advisor",
      dept: "Department of Agronomy",
      image: "teacher/sabina.jpg",
    },
    {
      name: "Dr. M. Nahid Sattar",
      position: "Teacher Advisor",
      dept: "Department of Agricultural Economics",
      image: "teacher/nahid.jpg",
    },
    {
      name: "Mr. Md. Tariqul Islam",
      position: "Teacher Advisor",
      dept: "Haor and Char Development Institute",
      image: "teacher/tariq.jpg",
    },
    {
      name: "Mr. Md. Hosen Ali",
      position: "Teacher Advisor",
      dept: "Department of Plant Pathology",
      image: "teacher/hosen.jpg",
    },
    {
      name: "Mr. Zikesh Barman",
      position: "Teacher Advisor",
      dept: "Department of Farm Structure and Environmental Engineering",
      image: "teacher/zikesh.jpg",
    },
  ],
};

// Initialize the page
document.addEventListener("DOMContentLoaded", () => {
  // Render gv cards
  rendergvCards("c_ad");
  rendergvCards("t_ad");

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
    if (person.position == "Cheif Advisor") card.className = "gv-card cf";
    else card.className = "gv-card";
    card.innerHTML = `
            <a href="profile_teacher.php?name=${person.name}&dept=${
      person.dept
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
                <span class="position">${person.dept}</span>
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
