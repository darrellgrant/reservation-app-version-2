const currentLocation = location.href; //returns the href (URL) of the current page
const menuItem = document.querySelectorAll("a");
const menuLength = menuItem.length;
for (let i = 0; i < menuLength; i++) {
  if (menuItem[i].href === currentLocation) {
    //menuItem[i].className = "active";
    menuItem[i].classList.add("active");
  }
}
