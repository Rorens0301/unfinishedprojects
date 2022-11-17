const selectElement = (element) => document.querySelector(element);
selectElement('.menubar'),addEventListener('click',(click) =>{
     selectElement('.mobile-nav').classlist.toggle('active');
});