const name = prompt('Enter your name:');

// Execute code on windows load
window.addEventListener(
  'load', 
  (event) => {
    const el = document.querySelector('.my-custom-plugin-container');
    el.innerHTML = "Hello " + name + "!";
  }
);