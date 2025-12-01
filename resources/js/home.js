window.programmeerkennis = {
  html5: {
    title: "HTML5",
    description: `Ik kan een nette HTML-structuur aanhouden door middel van de elementen nav, main, footer en section. Ik ben bekend met de basiselementen zoals linkjes, afbeeldingen, formulieren en tabellen. Ook ben ik bekend met favicon-icoontjes. 
     
    Als ik een webpagina ga maken, denk ik altijd zorgvuldig na over de layout volgens het mobile-first principe.`,
    images: ["HTML5.png"],
    stars: 3
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
    ],
    stars: 3
  },

  javascript: {
    title: "JavaScript",
    description: `Mijn JavaScript-kennis is niet heel uitgebreid. 
        Ik ben bekend met de basis zoals functies en HTML-element selectors.
        Daarnaast ben ik bekent met de basis functionaliteiten van Alpine.js.`,
    images: [
      "Javascript.png",
      "Alpinejs.png"
    ],
    stars: 2
  },

  php: {
    title: "PHP",
    description: `Ik heb met veel verschillende PHP-componenten gewerkt in samenstelling met HTML via XAMPP en Laravel, zoals sessions, JSON-bestanden en API's verwerken en PDO-databaseverbindingen. 
        Ook heb ik PHP gebruikt om de basis van objectgeoriënteerd programmeren te leren. 
        Functies in PHP kan ik duidelijk structureren door middel van comments.`,
    images: ["PHP.png"],
    stars: 3
  },

  sql: {
    title: "MySQL",
    description: `Aan de hand van documentatie kan ik basisdatabase-structuren maken met programma's als MySQL via XAMPP. 
        Ik ben enigszins bekend met relationele database-structuren, maar SQL-joins vind ik nog moeilijk te begrijpen.`,
    images: ["MySQL.png"],
    stars: 2.5
  },

  laravel: {
    title: "Laravel",
    description: `Ik kan comfortabel werken met de structuur van Laravel via de Docker-omgeving.  
        Ik vind de Blade-templates erg fijn om mee te werken en zo views overzichtelijk op te bouwen door middel van layouts.  
        Ik kan werken met basisroutes, formulieren en de ingebouwde databasestructuur.  
        Verder ben ik bekend met middleware, de cache en logfuncties.`,
    images: ["Laravel.png"],
    stars: 3.5
  },
  Csharp: {
    title: "C#",
    description: `Naast de basis syntax heb ik C# gebruikt om kennis te maken met objectgeoriënteerd programmeren. 
      `,
    images: ["Csharp.png"],
    stars: 1.5
  },
  AspDotNet: {
    title: "ASP.NET",
    description: `Niet echt mijn ding.`,
    images: ["AspDotNet.png"],
    stars: 1
  }
};


document.addEventListener('alpine:init', () => {
  Alpine.data('programmeerkennisComponent', () => ({
      assetPath: window.assetPath || '/images/prog_talen',
      skills: window.programmeerkennis,
      selected: null,
      starsTotal: 5,
      highlightedTitles: ['Laravel'],
      cringeList: ['ASP.NET'],

      // methode voor skill button
      selectSkill(key) {
      this.selected = this.skills[key]
      },

      // methodes voor opmaak
      highlightTitle(title) {
          if (this.highlightedTitles.includes(title)) {
              return `<i class="bi bi-stars highlight"></i> ${title} <i class="bi bi-stars highlight"></i>`;
          }

          if (this.cringeList.includes(title)) {
              return `<i class="bi bi-trash3-fill"></i>${title}<i class="bi bi-trash3-fill"></i>`;
          }
          return title;
      },

      starType(i, rating) {
            if (rating >= i) return 'bi-star-fill';        // volle ster
            if (rating >= i - 0.5) return 'bi-star-half';  // halve ster
            return 'bi-star';                              // lege ster
        },

      // init logs voor debuggen
      init() {
          // console.log(this.skills);
      }
  }));
});