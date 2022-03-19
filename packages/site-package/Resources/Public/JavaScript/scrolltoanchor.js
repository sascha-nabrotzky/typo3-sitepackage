"use strict";

const buttons = document.querySelectorAll(".btn-primary");

buttons.forEach((element) => {
  element.addEventListener("click", scrollToElement);
});

function scrollToElement() {
  const item = this.innerText;
  window.location.hash = item;
}
