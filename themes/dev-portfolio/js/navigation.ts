console.log("navigation.ts loaded");

const links = document.querySelectorAll<HTMLAnchorElement>(".hero-nav__list a");
const sections = document.querySelectorAll<HTMLElement>("section[id]");
const container = document.querySelector(".snap-container");

const linkMap = new Map<string, HTMLAnchorElement>();

links.forEach((link) => {
  const href = link.getAttribute("href");

  if (href?.startsWith("#")) {
    linkMap.set(href.replace("#", ""), link);
  }
});

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {

      if (!entry.isIntersecting) return;

      const id = entry.target.id;

      console.log("CURRENT SECTION:", id);

      const link = linkMap.get(id);

      if (link) {
        links.forEach((l) => l.classList.remove("active"));

        link.classList.add("active");
      }

      history.replaceState(null, "", `#${id}`);
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