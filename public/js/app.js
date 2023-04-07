// Get a reference to the select element
// const departure_s = document.getElementById('departure_s');
// const arrival_s = document.getElementById('arrival_s');

// // Fetch data from API and fill select options
// fetch('https://countriesnow.space/api/v0.1/countries/cities', {
//   method: 'POST',
//   headers: {
//     'Content-Type': 'application/json'
//   },
//   body: JSON.stringify({
//     country: 'morocco'
//   })
// })
// .then(response => response.json())
// .then(data => {
//     fill_select(data);
// })
// .catch(error => {
//   console.error('Error:', error);
// });

// function fill_select(data) {
//   data.data.forEach(city => {
//     const option_departure_s = document.createElement('option');
//     const option_arrival_s = document.createElement('option');

//     option_departure_s.value = city;
//     option_departure_s.textContent = city;
//     departure_s.appendChild(option_departure_s);

//     option_arrival_s.value = city;
//     option_arrival_s.textContent = city;
//     arrival_s.appendChild(option_arrival_s);
//   });
// }

// script login and register

const signInBtn = document.querySelector("#sign-in-btn");
const signUpBtn = document.querySelector("#sign-up-btn");
const container = document.querySelector("#containers");

signUpBtn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

signInBtn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
