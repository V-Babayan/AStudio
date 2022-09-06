(function () {
  const KEYWORDS = [
    'home',
    'wwd',
    'service',
    'project',
    'blog',
    'contact',
    'contact_button',
  ];

  const createLink = (key) => {
    return document.querySelector('#link_' + key);
  };

  const createRoute = (key) => {
    return document.querySelector('#route_' + key);
  };

  const scrollToRoute = (link, route) => {
    link.addEventListener('click', () => {
      route.scrollIntoView({ block: 'start', behavior: 'smooth' });
    });
  };

  KEYWORDS.forEach((key) => {
    const link = createLink(key);
    const route = createRoute(key === 'contact_button' ? 'contact' : key);

    scrollToRoute(link, route);
  });
})();
