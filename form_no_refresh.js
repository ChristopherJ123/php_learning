console.log("JS connected")

$("#form").on("submit", function(event) {
    alert("Handler for `submit` called.");
    event.preventDefault();
  });

document.getElementById('form').addEventListener('keypress', function(e) {
  document.querySelector('.output').innerText += e.key;
})