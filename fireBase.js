var fireBase = fireBase || firebase;
var hasInit = false;
var config = {
    apiKey: "AIzaSyCvNiyXxXqiXp7njj3oW4bfKqlWF3RnADg",
    authDomain: "accident-management-926d3.firebaseapp.com",
    databaseURL: "https://accident-management-926d3-default-rtdb.firebaseio.com",
    projectId: "accident-management-926d3",
    storageBucket: "accident-management-926d3.appspot.com",
    messagingSenderId: "411206249622",
    appId: "1:411206249622:web:38bdb9b0b07c1bb38ba6b7",
    measurementId: "G-H27S41JW47"
  };
if(!hasInit){
    firebase.initializeApp(config);
    hasInit = true;
}


