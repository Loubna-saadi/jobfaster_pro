// Get all the buttons
const toggleButtons = document.querySelectorAll('.toggle-description, .toggle-requirements');

// Add click event listener to each button
toggleButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const textElement = button.previousElementSibling;
    textElement.classList.toggle('expanded');

    // Toggle the button text
    if (button.innerText === 'Show More') {
      button.innerText = 'Show Less';
      textElement.style.maxHeight = 'none';
    } else {
      button.innerText = 'Show More';
      textElement.style.maxHeight = '50px';
    }
  });
});
