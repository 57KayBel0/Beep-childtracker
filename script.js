const signUpButton=document.getElementById('signInBtn-link');
const signInButton=document.getElementById('signInBtn-link');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})


const signInBtnLink =
 document.querySelector('.signinBtn-link');

 const signUpBtnLink =
 document.querySelector('.signupBtn-link');

 const wrapper =
 document.querySelector('.wrapper');

 signUpBtnLink.addEventListener('click', () =>{
    wrapper.classList.toggle('active');
 });

 signInBtnLink.addEventListener('click', () =>{
    wrapper.classList.toggle('active');
 });
// /*
 document.getElementById('form').addEventListener('submit', function(event) {
   event.preventDefault();
   const username = document.getElementById('username').value;
   const password = document.getElementById('password').value;

   fetch('http://localhost:3000/login', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json'
      },
      body: JSON.stringify({ username, password })
  })
  .then(response => response.json())
  .then(data => {
      if (data.auth) {
          localStorage.setItem('token', data.token);
          document.getElementById('login-form').style.display = 'none';
          document.getElementById('map').style.display = 'block';
          initMap();
      } else {
          alert('Invalid login credentials');
      }
  });
});

function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 15,
      center: { lat: -34.397, lng: 150.644 },
  });

  const marker = new google.maps.Marker({
      position: { lat: -34.397, lng: 150.644 },
      map: map,
  });

  if (navigator.geolocation) {
      navigator.geolocation.watchPosition(
          (position) => {
              const pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude,
              };
              marker.setPosition(pos);
              map.setCenter(pos);
          },
          () => {
              handleLocationError(true, map.getCenter());
          }
      );
  } else {
      handleLocationError(false, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, pos) {
  const infoWindow = new google.maps.InfoWindow();
  infoWindow.setPosition(pos);
  infoWindow.setContent(
      browserHasGeolocation
          ? "Error: The Geolocation service failed."
          : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}

const script = document.createElement('script');
script.src = `https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap`;
script.async = true;
document.head.appendChild(script);
