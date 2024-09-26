document.querySelector('form').addEventListener('submit', function(e) {
  let username = document.querySelector('#username').value;
  let password = document.querySelector('#password').value;
  if(username === " " || password === " ") {
    e.preventDefault();
    alert("Please fill in all fields.");
  }
});