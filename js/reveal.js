const sr = ScrollReveal();

sr.reveal('h1', {
  duration: 2000
});

sr.reveal('#projet1, #projet3', {
  origin: 'left',
  distance: '100px',
  duration: 2000
});

sr.reveal('#projet2', {
  origin: 'right',
  distance: '100px',
  duration: 2000
});
