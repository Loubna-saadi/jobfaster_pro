// Get all the buttons
// const toggleButtons = document.querySelectorAll('.toggle-description, .toggle-requirements');

// Add click event listener to each button
// toggleButtons.forEach((button) => {
//   button.addEventListener('click', () => {
//     const textElement = button.previousElementSibling;
//     textElement.classList.toggle('expanded');

    // Toggle the button text
//     if (button.innerText === 'Show More') {
//       button.innerText = 'Show Less';
//       textElement.style.maxHeight = 'none';
//     } else {
//       button.innerText = 'Show More';
//       textElement.style.maxHeight = '50px';
//     }
//   });
// });

const jobOffers = document.querySelectorAll('.job-offer');

jobOffers.forEach((jobOffer) => {
    jobOffer.addEventListener('click', () => {
        jobOffer.classList.toggle('expanded');
    });

    jobOffer.addEventListener('mouseover', () => {
        if (!jobOffer.classList.contains('expanded')) {
            jobOffer.classList.add('flipped');
        }

    });

    jobOffer.addEventListener('mouseout', () => {
        jobOffer.classList.remove('flipped');
    });
});

document.addEventListener('click', (event) => {
    jobOffers.forEach((jobOffer) => {
        if (!jobOffer.contains(event.target)) {
            jobOffer.classList.remove('expanded');
        }
    });
});

