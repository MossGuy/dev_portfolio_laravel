const programmeerkennis = {
  html5: {
    title: "HTML5",
    description: `Ik kan een nette HTML-structuur aanhouden door middel van de elementen nav, main, footer en section. Ik ben bekend met de basiselementen zoals linkjes, afbeeldingen, formulieren en tabellen. Ook ben ik bekend met favicon-icoontjes. 
     
    Als ik een webpagina ga maken, denk ik altijd zorgvuldig na over de layout volgens het mobile-first principe.`,
    images: ["HTML5.png"]
  },

  cssFramework: {
    title: "CSS + Frameworks",
    description: `Ik gebruik nog vaak CSS om basiskleurenthema's op te slaan in de root-variabelen en zo een huisstijl te maken die makkelijk en snel gebruikt kan worden door alle pagina's in mijn project. 
        Ook ben ik bekend met flexbox, grids en media queries. 

        Aan de hand van documentatie kan ik met framsworks als Bootstrap5 en Tailwind een basisopmaak verzorgen. 
        Mijn voorkeur gaat uit naar Tailwind, maar Bootstrap blijft mijn go-to framework als ik icons wil toevoegen.`,
    images: [
      "CSS3.png",
      "Bootstrap5.png",
      "Tailwind.png"
    ]

  },

  javascript: {
    title: "JavaScript",
    description: `Mijn JavaScript-kennis is niet heel uitgebreid. 
        Ik ben bekend met de basis zoals functies en HTML-element selectors.`,
    images: ["Javascript.png"]
  },

  php: {
    title: "PHP",
    description: `Ik heb met veel verschillende PHP-componenten gewerkt in samenstelling met HTML via XAMPP en Laravel, zoals sessions, JSON-bestanden en API's verwerken en PDO-databaseverbindingen. 
        Ook heb ik PHP gebruikt om de basis van objectgeoriënteerd programmeren te leren. 
        Functies in PHP kan ik duidelijk structureren door middel van comments.`,
    images: ["PHP.png"]
  },

  sql: {
    title: "MySQL",
    description: `Aan de hand van documentatie kan ik basisdatabase-structuren maken met programma's als MySQL via XAMPP. 
        Ik ben enigszins bekend met relationele database-structuren, maar SQL-joins vind ik nog moeilijk te begrijpen.`,
    images: ["MySQL.png"]
  },

  laravel: {
    title: "Laravel",
    description: `Ik kan comfortabel werken met de structuur van Laravel via de Docker-omgeving.  
        Ik vind de Blade-templates erg fijn om mee te werken en zo views overzichtelijk op te bouwen door middel van layouts.  
        Ik kan werken met basisroutes, formulieren en de ingebouwde databasestructuur.  
        Verder ben ik bekend met middleware, de cache en logfuncties.`,
    images: ["Laravel.png"]
  },
  Csharp: {
    title: "C#",
    description: `Naast de basis syntax heb ik C# gebruikt om kennis te maken met objectgeoriënteerd programmeren. 
      `,
    images: ["Csharp.png"]
  },
  AspDotNet: {
    title: "ASP.NET",
    description: `Ik wijger om die bloat ooit nog aan te raken al geef je mij een duidelijke handleiding`,
    images: ["AspDotNet.png"]
  }
};

// eventlistener voor de box met mijn programmeerkennis knoppen
document.addEventListener("DOMContentLoaded", () => {
  const skills = document.querySelectorAll(".skill");
  const ervaringBody = document.getElementById("ervaring_body");
  const originalContent = ervaringBody.innerHTML;

  // image src opbouwen met asset path van blade view
  const basePath = window.assetPath || "/images";

  // eventlistener voor elke skill knop
  skills.forEach(skill => {
    skill.addEventListener("click", () => {
      const key = skill.dataset.skill;
      const data = programmeerkennis[key];

      if (data) {
        const isAspNet = data.title === "ASP.NET";
        const baseClasses =
          "p-6 mt-6 animate-fadeIn max-w-5xl mx-auto flex flex-col items-center justify-center gap-8";
        const backButtonHTML = `
          <button id="backButton"
            class="mx-auto w-fit items-center gap-2 px-5 py-2 border-2 border-[var(--primary)]
            bg-[var(--background)] hover:bg-[var(--highlight)] text-[var(--primary)]
            hover:text-white rounded-lg font-semibold transition duration-200">
            <i class="bi bi-x-lg"></i> Sluiten
          </button>
        `;

        // Meerdere afbeeldingen dynamisch genereren
        const imageElements = (data.images ?? [])
          .map(
            (img, i) => `
              <img src="${basePath}/${img}" alt="${data.title} afbeelding ${i + 1}"
                class="w-24 h-24 lg:w-32 lg:h-32 object-contain mx-auto lg:mx-0">
            `
          )
          .join("");

        // HTML opbouw
        const contentHTML = isAspNet
          ? `
              <div class="${baseClasses}">
                ${imageElements}
                ${backButtonHTML}
              </div>
            `
          : `
              <div class="${baseClasses} lg:flex-row lg:items-start">
                <!-- Afbeeldingen -->
                <div class="bg-[var(--primary)] rounded-xl shadow-lg flex flex-col justify-center items-center my-auto flex-shrink-0 text-center w-full lg:w-1/3 p-6">
                  <div class="flex flex-wrap justify-center items-center gap-4">
                    ${imageElements}
                  </div>
                </div>

                <!-- Tekst -->
                <div class="flex flex-col justify-center w-full lg:w-2/3">
                  <h3 class="text-3xl font-bold text-[var(--highlight)] mb-4">${data.title}</h3>
                  <p class="whitespace-pre-line text-gray-700 dark:text-gray-300 text-justify leading-relaxed text-lg mb-8">
                    ${data.description}
                  </p>
                  ${backButtonHTML}
                </div>
              </div>
            `;

        // Injecteren in de pagina
        ervaringBody.innerHTML = contentHTML;

        // Terugknop functionaliteit
        const backButton = document.getElementById("backButton");
        backButton.addEventListener("click", () => {
          ervaringBody.innerHTML = originalContent;
          document.dispatchEvent(new Event("DOMContentLoaded"));
        });
      }


    });
  });
  
});