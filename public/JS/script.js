
  // Vibrate effect (optional, for supported devices)
//   if (navigator.vibrate) {
//     navigator.vibrate([100, 100, 100]); 
//   }

  // Auto-hide after 3 seconds
  setTimeout(() => {
    const msg = document.getElementById('flashMessage');
    msg.classList.add('opacity-0'); // fade out
    setTimeout(() => msg.remove(), 500); // remove from DOM
  }, 3000);
