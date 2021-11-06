mapboxgl.accessToken =
  "pk.eyJ1Ijoic2hhc2hhbmtkeW5hbW8iLCJhIjoiY2trbWhzZng0MGpkeTJvbnNic3U1cXo0MiJ9.jHDzDgQCXJnFwADIPNF9tA"

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
  enableHighAccuracy: true
})

function successLocation(position) {
  setupMap([position.coords.longitude, position.coords.latitude])
}

function errorLocation() {
  setupMap([77.6647,12.8615])
}

function setupMap(center) {
  const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v11",
    center: center,
    zoom: 15
  })

  const nav = new mapboxgl.NavigationControl()
  map.addControl(nav)

  var directions = new MapboxDirections({
    accessToken: mapboxgl.accessToken
  })

  map.addControl(directions, "top-left")
}

