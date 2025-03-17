const buttons = document.getElementsByClassName("login");

if (buttons.length > 0) {
  const button = buttons[0]; // Sélectionne le premier élément avec la classe "login"
  button.addEventListener("click", (event) => {
    button.textContent = `Click count: ${event.detail}`;
  });
}
