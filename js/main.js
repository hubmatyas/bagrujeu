//Javascript

console.log('main.js has been connected');


function openNav() {
  var icon = document.getElementById('logoIcon');
  document.getElementById("mySidenav").style.width = "330px";
  icon.classList.add("active");
  console.log('The nav has been opened');
}

function closeNav() {
  var icon = document.getElementById('logoIcon')
  document.getElementById("mySidenav").style.width = "0";
  icon.classList.remove("active");
  console.log('The nav has been closed');
}





// Cookie consent

const cookieStorage = {
  getItem: (item) => {
      const cookies = document.cookie
          .split(';')
          .map(cookie => cookie.split('='))
          .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value }), {});
      return cookies[item];
  },
  setItem: (item, value) => {
      document.cookie = `${item}=${value};`
  }
}

const storageType = cookieStorage;
const consentPropertyName = 'gdpr_consent';
const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {

  const acceptFn = event => {
      saveToStorage(storageType);
      consentPopup.classList.add('hidden');
  }
  const consentPopup = document.getElementById('consent-popup');
  const acceptBtn = document.getElementById('accept');
  acceptBtn.addEventListener('click', acceptFn);

  if (shouldShowPopup(storageType)) {
      setTimeout(() => {
          consentPopup.classList.remove('hidden');
      }, 2000);
  }

};
