console.log("navigation.ts loaded");


const links = document.querySelectorAll<HTMLAnchorElement>(
  ".hero-nav__list a"
);


const sections = document.querySelectorAll<HTMLElement>(
  "section[id]"
);


const container = document.querySelector(
  ".snap-container"
);



const linkMap = new Map<string, HTMLAnchorElement>();


links.forEach((link) => {

  const href = link.getAttribute("href");


  if (!href) return;


  const hash = new URL(
    href,
    window.location.origin
  ).hash;


  if (hash) {

    linkMap.set(
      hash.replace("#", ""),
      link
    );

  }

});



const observer = new IntersectionObserver(

  (entries) => {

    entries.forEach((entry) => {


      if (!entry.isIntersecting) return;


      const id = entry.target.id;


      console.log(
        "CURRENT SECTION:",
        id
      );



      const link = linkMap.get(id);



      if (link) {


        links.forEach((l) => {

          l.classList.remove("active");

        });


        link.classList.add("active");

      }



      history.replaceState(
        null,
        "",
        `#${id}`
      );


    });

  },

  {

    root: container,

    threshold: 0.6

  }

);



sections.forEach((section) => {

  observer.observe(section);

});





// Preserve current section when switching language


const languageLinks = document.querySelectorAll<HTMLAnchorElement>(
  ".language-switcher a"
);


console.log(
  "LANG LINKS:",
  languageLinks
);



languageLinks.forEach((link) => {


  link.addEventListener("click", (event) => {


    console.log(
      "LANG CLICK:",
      link.href
    );


    const currentHash = window.location.hash;


    console.log(
      "CURRENT HASH:",
      currentHash
    );



    if (!currentHash) return;



    event.preventDefault();



    const url = new URL(link.href);


    url.hash = currentHash;



    console.log(
      "NEW URL:",
      url.toString()
    );



    window.location.href = url.toString();


  });


});





// Restore section after language switch / page reload

const initialHash = window.location.hash;


if (initialHash) {

  const targetSection = document.querySelector<HTMLElement>(
    initialHash
  );


  if (targetSection && container) {

    setTimeout(() => {

      container.scrollTo({

        top: targetSection.offsetTop,

        behavior: "auto"

      });


    }, 100);

  }

}