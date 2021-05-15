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

// Cookie consent

const cookieStorage = {
  getItem: (item) => {
    const cookies = document.cookie
      .split(";")
      .map((cookie) => cookie.split("="))
      .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
    return cookies[item];
  },
  setItem: (item, value) => {
    document.cookie = `${item}=${value};`;
  },
};

const storageType = cookieStorage;
const consentPropertyName = "gdpr_consent";
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
  const acceptFn = (event) => {
    saveToStorage(storageType);
    consentPopup.classList.add("hidden");
  };
  const consentPopup = document.getElementById("consent-popup");
  const acceptBtn = document.getElementById("accept");
  acceptBtn.addEventListener("click", acceptFn);

  if (shouldShowPopup(storageType)) {
    setTimeout(() => {
      consentPopup.classList.remove("hidden");
    }, 2000);
  }
};
