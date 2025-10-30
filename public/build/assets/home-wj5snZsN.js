const g={html5:{title:"HTML5",description:`Ik kan een nette HTML-structuur aanhouden door middel van de elementen nav, main, footer en section. Ik ben bekend met de basiselementen zoals linkjes, afbeeldingen, formulieren en tabellen. Ook ben ik bekend met favicon-icoontjes. 
     
    Als ik een webpagina ga maken, denk ik altijd zorgvuldig na over de layout volgens het mobile-first principe.`,image:"HTML5.png"},cssFramework:{title:"CSS + Frameworks",description:`Ik gebruik nog vaak CSS om basiskleurenthema's op te slaan in de root-variabelen en zo een huisstijl te maken die makkelijk en snel gebruikt kan worden door alle pagina's in mijn project. 
        Ook ben ik bekend met flexbox, grids en media queries. 

        Aan de hand van documentatie kan ik met framsworks als Bootstrap5 en Tailwind een basisopmaak verzorgen. 
        Mijn voorkeur gaat uit naar Tailwind, maar Bootstrap blijft mijn go-to framework als ik icons wil toevoegen.`,image:"CSS3.png",image2:"css-framework.png"},javascript:{title:"JavaScript",description:`Mijn JavaScript-kennis is niet heel uitgebreid. 
        Ik ben bekend met de basis zoals functies en HTML-element selectors.`,image:"Javascript.png"},php:{title:"PHP",description:`Ik heb met veel verschillende PHP-componenten gewerkt in samenstelling met HTML via XAMPP en Laravel, zoals sessions, JSON-bestanden en API's verwerken en PDO-databaseverbindingen. 
        Ook heb ik PHP gebruikt om de basis van objectgeoriënteerd programmeren te leren. 
        Functies in PHP kan ik duidelijk structureren door middel van comments.`,image:"PHP.png"},sql:{title:"MySQL",description:`Aan de hand van documentatie kan ik basisdatabase-structuren maken met programma's als MySQL via XAMPP. 
        Ik ben enigszins bekend met relationele database-structuren, maar SQL-joins vind ik nog moeilijk te begrijpen.`,image:"MySQL.png"},laravel:{title:"Laravel",description:`Ik kan comfortabel werken met de structuur van Laravel via de Docker-omgeving.  
        Ik vind de Blade-templates erg fijn om mee te werken en zo views overzichtelijk op te bouwen door middel van layouts.  
        Ik kan werken met basisroutes, formulieren en de ingebouwde databasestructuur.  
        Verder ben ik bekend met middleware, de cache en logfuncties.`,image:"Laravel.png"},Csharp:{title:"C#",description:`Naast de basis syntax heb ik C# gebruikt om kennis te maken met objectgeoriënteerd programmeren. 
      `,image:"Csharp.png"},AspDotNet:{title:"ASP.NET",description:"Ik wijger om die bloat ooit nog aan te raken al geef je mij een duidelijke handleiding",image:"AspDotNet.png"}};document.addEventListener("DOMContentLoaded",()=>{const r=document.querySelectorAll(".skill"),t=document.getElementById("ervaring_body"),l=t.innerHTML,n=window.assetPath||"/images";r.forEach(a=>{a.addEventListener("click",()=>{const i=a.dataset.skill,e=g[i];if(e){const d=e.image2??""?`<img src="${n}/${e.image2}" alt="Framework Logo" class="w-20 h-20 object-contain mx-auto lg:mx-0">`:"",m=e.title==="ASP.NET",o="p-6 mt-6 animate-fadeIn max-w-5xl mx-auto flex flex-col items-center justify-center gap-8",s=`
          <button id="backButton"
            class="mx-auto w-fit items-center gap-2 px-5 py-2 border-2 border-[var(--primary)]
            bg-[var(--background)] hover:bg-[var(--highlight)] text-[var(--primary)]
            hover:text-white rounded-lg font-semibold transition duration-200">
            <i class="bi bi-x-lg"></i> Sluiten
          </button>
        `,c=m?`
              <div class="${o}">
                <img src="${n}/${e.image}" alt="${i}" class="w-40 h-40 object-contain my-4">
                ${s}
              </div>
            `:`
              <div class="${o} lg:flex-row lg:items-start">
                
                <!-- Afbeeldingen -->
                <div class="flex flex-col justify-center items-center my-auto flex-shrink-0 text-center w-full lg:w-1/3">
                  <img src="${n}/${e.image}" alt="${i}" class="w-40 h-40 object-contain my-4">
                  ${d}
                </div>

                <!-- Tekst -->
                <div class="flex flex-col justify-center w-full lg:w-2/3">
                  <h3 class="text-3xl font-bold text-[var(--highlight)] mb-4">${e.title}</h3>
                  <p class="whitespace-pre-line text-gray-700 dark:text-gray-300 text-justify leading-relaxed text-lg mb-8">
                    ${e.description}
                  </p>
                  ${s}
                </div>
              </div>
            `;t.innerHTML=c,document.getElementById("backButton").addEventListener("click",()=>{t.innerHTML=l,document.dispatchEvent(new Event("DOMContentLoaded"))})}})})});
