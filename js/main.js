// OnLoad get body padding top same as header height

  var headerHeight;
  var header = document.querySelector('header');
  
  if(header.offsetHeight) {
      headerHeight=header.offsetHeight;
      headerHeight = headerHeight - 15;
      document.querySelector('body').style.paddingTop = headerHeight;  
  } else if(header.style.pixelHeight) {
      headerHeight=header.style.pixelHeight;
      headerHeight = headerHeight - 15;
      document.querySelector('body').style.paddingTop = headerHeight;
  }
  


// Navigation
const menuBtn = document.querySelector(".logo-btn");
const navigation = document.querySelector(".navigation-wrapper")
let menuOpen = false;

menuBtn.addEventListener("click", () => {
  if (!menuOpen) {
    menuBtn.classList.add("open");
    menuOpen = true;
    navigation.classList.add('active');
  } else {
    menuBtn.classList.remove("open");
    menuOpen = false;
    navigation.classList.remove('active');
  }
});
