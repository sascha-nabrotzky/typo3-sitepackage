"use strict";

const buttons = document.querySelectorAll("button");

buttons.forEach((element) => {
  element.addEventListener("click", scrollToElement);
});

function scrollToElement() {
  const item = this.innerText;
  window.location.hash = item;
}
