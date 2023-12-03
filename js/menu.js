function menu() {
  // Hide the menu button
    const menuButton = document.querySelector(".menu_h");
    menuButton.style.display = "none";

  // Show the header
    const header = document.querySelector(".menu");
    header.style.display = "flex";
    header.style.left = "0"; // Position the header to the left

  // Hide the main section
    const mainSection = document.querySelector("main");
    mainSection.style.display = "none";
}

function menu_volver () {
      // Hide the menu button
    const menuButton = document.querySelector(".menu_h");
    menuButton.style.display = "block";
    // Show the header
    const header = document.querySelector(".menu");
    header.style.display = "none";
    // Hide the main section
    const mainSection = document.querySelector("main");
    mainSection.style.display = "block";
}
