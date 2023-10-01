// nav bar

const hamburger = document.querySelector('.hamburger');
const dropdown = document.querySelector('.dropdown');
const closeBtn = document.querySelector('.close-btn');

hamburger.addEventListener('click', () => {
  dropdown.style.display = "flex";
});

closeBtn.addEventListener('click', () => {
  dropdown.style.display = "none";
});


// poppup display option....

const openPopupButton = document.getElementById("open-popup");
const popup = document.getElementById("popup");
const closePopupButton = document.querySelector(".close");

openPopupButton.addEventListener("click", function() {
  popup.style.display = "block";
});

closePopupButton.addEventListener("click", function() {
  popup.style.display = "none";
});

popup.addEventListener("click", function(event) {
  if (event.target === popup) {
    popup.style.display = "none";
  }
});

// selected item display option....

// 1st event...

function dispov1(){
  document.getElementById('overview1').classList.add("active-tab");
  document.getElementById('details1').classList.remove("active-tab");
  document.getElementById('cood1').classList.remove("active-tab");
  document.getElementById('tab-hov1').classList.add("active-link");
  document.getElementById('tab-hov2').classList.remove("active-link");
  document.getElementById('tab-hov3').classList.remove("active-link");
}
function dispdet1(){
  document.getElementById('overview1').classList.remove("active-tab");
  document.getElementById('details1').classList.add("active-tab");
  document.getElementById('cood1').classList.remove("active-tab");
  document.getElementById('tab-hov1').classList.remove("active-link");
  document.getElementById('tab-hov2').classList.add("active-link");
  document.getElementById('tab-hov3').classList.remove("active-link");
}
function dispcood1(){
  document.getElementById('overview1').classList.remove("active-tab");
  document.getElementById('details1').classList.remove("active-tab");
  document.getElementById('cood1').classList.add("active-tab");
  document.getElementById('tab-hov1').classList.remove("active-link");
  document.getElementById('tab-hov2').classList.remove("active-link");
  document.getElementById('tab-hov3').classList.add("active-link");
}

// 2nd event...

function dispov2(){
  document.getElementById('overview2').classList.add("active-tab");
  document.getElementById('details2').classList.remove("active-tab");
  document.getElementById('cood2').classList.remove("active-tab");
  document.getElementById('tab-hov4').classList.add("active-link");
  document.getElementById('tab-hov5').classList.remove("active-link");
  document.getElementById('tab-hov6').classList.remove("active-link");
}
function dispdet2(){
  document.getElementById('overview2').classList.remove("active-tab");
  document.getElementById('details2').classList.add("active-tab");
  document.getElementById('cood2').classList.remove("active-tab");
  document.getElementById('tab-hov4').classList.remove("active-link");
  document.getElementById('tab-hov5').classList.add("active-link");
  document.getElementById('tab-hov6').classList.remove("active-link");
}
function dispcood2(){
  document.getElementById('overview2').classList.remove("active-tab");
  document.getElementById('details2').classList.remove("active-tab");
  document.getElementById('cood2').classList.add("active-tab");
  document.getElementById('tab-hov4').classList.remove("active-link");
  document.getElementById('tab-hov5').classList.remove("active-link");
  document.getElementById('tab-hov6').classList.add("active-link");
}

// 3rd event...

function dispov3(){
  document.getElementById('overview3').classList.add("active-tab");
  document.getElementById('details3').classList.remove("active-tab");
  document.getElementById('cood3').classList.remove("active-tab");
  document.getElementById('tab-hov7').classList.add("active-link");
  document.getElementById('tab-hov8').classList.remove("active-link");
  document.getElementById('tab-hov9').classList.remove("active-link");
}
function dispdet3(){
  document.getElementById('overview3').classList.remove("active-tab");
  document.getElementById('details3').classList.add("active-tab");
  document.getElementById('cood3').classList.remove("active-tab");
  document.getElementById('tab-hov7').classList.remove("active-link");
  document.getElementById('tab-hov8').classList.add("active-link");
  document.getElementById('tab-hov9').classList.remove("active-link");
}
function dispcood3(){
  document.getElementById('overview3').classList.remove("active-tab");
  document.getElementById('details3').classList.remove("active-tab");
  document.getElementById('cood3').classList.add("active-tab");
  document.getElementById('tab-hov7').classList.remove("active-link");
  document.getElementById('tab-hov8').classList.remove("active-link");
  document.getElementById('tab-hov9').classList.add("active-link");
}

// 4rth event...

function dispov4(){
  document.getElementById('overview4').classList.add("active-tab");
  document.getElementById('details4').classList.remove("active-tab");
  document.getElementById('cood4').classList.remove("active-tab");
  document.getElementById('tab-hov10').classList.add("active-link");
  document.getElementById('tab-hov11').classList.remove("active-link");
  document.getElementById('tab-hov12').classList.remove("active-link");
}
function dispdet4(){
  document.getElementById('overview4').classList.remove("active-tab");
  document.getElementById('details4').classList.add("active-tab");
  document.getElementById('cood4').classList.remove("active-tab");
  document.getElementById('tab-hov10').classList.remove("active-link");
  document.getElementById('tab-hov11').classList.add("active-link");
  document.getElementById('tab-hov12').classList.remove("active-link");
}
function dispcood4(){
  document.getElementById('overview4').classList.remove("active-tab");
  document.getElementById('details4').classList.remove("active-tab");
  document.getElementById('cood4').classList.add("active-tab");
  document.getElementById('tab-hov10').classList.remove("active-link");
  document.getElementById('tab-hov11').classList.remove("active-link");
  document.getElementById('tab-hov12').classList.add("active-link");
}

//5th event....

function dispov5(){
  document.getElementById('overview5').classList.add("active-tab");
  document.getElementById('details5').classList.remove("active-tab");
  document.getElementById('cood5').classList.remove("active-tab");
  document.getElementById('tab-hov13').classList.add("active-link");
  document.getElementById('tab-hov14').classList.remove("active-link");
  document.getElementById('tab-hov15').classList.remove("active-link");
}
function dispdet5(){
  document.getElementById('overview5').classList.remove("active-tab");
  document.getElementById('details5').classList.add("active-tab");
  document.getElementById('cood5').classList.remove("active-tab");
  document.getElementById('tab-hov13').classList.remove("active-link");
  document.getElementById('tab-hov14').classList.add("active-link");
  document.getElementById('tab-hov15').classList.remove("active-link");
}
function dispcood5(){
  document.getElementById('overview5').classList.remove("active-tab");
  document.getElementById('details5').classList.remove("active-tab");
  document.getElementById('cood5').classList.add("active-tab");
  document.getElementById('tab-hov13').classList.remove("active-link");
  document.getElementById('tab-hov14').classList.remove("active-link");
  document.getElementById('tab-hov15').classList.add("active-link");
}

// 6th event....

function dispov6(){
  document.getElementById('overview6').classList.add("active-tab");
  document.getElementById('details6').classList.remove("active-tab");
  document.getElementById('cood6').classList.remove("active-tab");
  document.getElementById('tab-hov16').classList.add("active-link");
  document.getElementById('tab-hov17').classList.remove("active-link");
  document.getElementById('tab-hov18').classList.remove("active-link");
}
function dispdet6(){
  document.getElementById('overview6').classList.remove("active-tab");
  document.getElementById('details6').classList.add("active-tab");
  document.getElementById('cood6').classList.remove("active-tab");
  document.getElementById('tab-hov16').classList.remove("active-link");
  document.getElementById('tab-hov17').classList.add("active-link");
  document.getElementById('tab-hov18').classList.remove("active-link");
}
function dispcood6(){
  document.getElementById('overview6').classList.remove("active-tab");
  document.getElementById('details6').classList.remove("active-tab");
  document.getElementById('cood6').classList.add("active-tab");
  document.getElementById('tab-hov16').classList.remove("active-link");
  document.getElementById('tab-hov17').classList.remove("active-link");
  document.getElementById('tab-hov18').classList.add("active-link");
}

// 7th event

function dispov7(){
  document.getElementById('overview7').classList.add("active-tab");
  document.getElementById('details7').classList.remove("active-tab");
  document.getElementById('cood7').classList.remove("active-tab");
  document.getElementById('tab-hov19').classList.add("active-link");
  document.getElementById('tab-hov20').classList.remove("active-link");
  document.getElementById('tab-hov21').classList.remove("active-link");
}
function dispdet7(){
  document.getElementById('overview7').classList.remove("active-tab");
  document.getElementById('details7').classList.add("active-tab");
  document.getElementById('cood7').classList.remove("active-tab");
  document.getElementById('tab-hov19').classList.remove("active-link");
  document.getElementById('tab-hov20').classList.add("active-link");
  document.getElementById('tab-hov21').classList.remove("active-link");
}
function dispcood7(){
  document.getElementById('overview7').classList.remove("active-tab");
  document.getElementById('details7').classList.remove("active-tab");
  document.getElementById('cood7').classList.add("active-tab");
  document.getElementById('tab-hov19').classList.remove("active-link");
  document.getElementById('tab-hov20').classList.remove("active-link");
  document.getElementById('tab-hov21').classList.add("active-link");
}

// 8th event....

function dispov8(){
  document.getElementById('overview8').classList.add("active-tab");
  document.getElementById('details8').classList.remove("active-tab");
  document.getElementById('cood8').classList.remove("active-tab");
  document.getElementById('tab-hov22').classList.add("active-link");
  document.getElementById('tab-hov23').classList.remove("active-link");
  document.getElementById('tab-hov24').classList.remove("active-link");
}
function dispdet8(){
  document.getElementById('overview8').classList.remove("active-tab");
  document.getElementById('details8').classList.add("active-tab");
  document.getElementById('cood8').classList.remove("active-tab");
  document.getElementById('tab-hov22').classList.remove("active-link");
  document.getElementById('tab-hov23').classList.add("active-link");
  document.getElementById('tab-hov24').classList.remove("active-link");
}
function dispcood8(){
  document.getElementById('overview8').classList.remove("active-tab");
  document.getElementById('details8').classList.remove("active-tab");
  document.getElementById('cood8').classList.add("active-tab");
  document.getElementById('tab-hov22').classList.remove("active-link");
  document.getElementById('tab-hov23').classList.remove("active-link");
  document.getElementById('tab-hov24').classList.add("active-link");
}

// 9th event.....

function dispov9(){
  document.getElementById('overview9').classList.add("active-tab");
  document.getElementById('details9').classList.remove("active-tab");
  document.getElementById('cood9').classList.remove("active-tab");
  document.getElementById('tab-hov25').classList.add("active-link");
  document.getElementById('tab-hov26').classList.remove("active-link");
  document.getElementById('tab-hov27').classList.remove("active-link");
}
function dispdet9(){
  document.getElementById('overview9').classList.remove("active-tab");
  document.getElementById('details9').classList.add("active-tab");
  document.getElementById('cood9').classList.remove("active-tab");
  document.getElementById('tab-hov25').classList.remove("active-link");
  document.getElementById('tab-hov26').classList.add("active-link");
  document.getElementById('tab-hov27').classList.remove("active-link");
}
function dispcood9(){
  document.getElementById('overview9').classList.remove("active-tab");
  document.getElementById('details9').classList.remove("active-tab");
  document.getElementById('cood9').classList.add("active-tab");
  document.getElementById('tab-hov25').classList.remove("active-link");
  document.getElementById('tab-hov26').classList.remove("active-link");
  document.getElementById('tab-hov27').classList.add("active-link");
}

// 10th event....

function dispov10(){
  document.getElementById('overview10').classList.add("active-tab");
  document.getElementById('details10').classList.remove("active-tab");
  document.getElementById('cood10').classList.remove("active-tab");
  document.getElementById('tab-hov28').classList.add("active-link");
  document.getElementById('tab-hov29').classList.remove("active-link");
  document.getElementById('tab-hov30').classList.remove("active-link");
}
function dispdet10(){
  document.getElementById('overview10').classList.remove("active-tab");
  document.getElementById('details10').classList.add("active-tab");
  document.getElementById('cood10').classList.remove("active-tab");
  document.getElementById('tab-hov28').classList.remove("active-link");
  document.getElementById('tab-hov29').classList.add("active-link");
  document.getElementById('tab-hov30').classList.remove("active-link");
}
function dispcood10(){
  document.getElementById('overview10').classList.remove("active-tab");
  document.getElementById('details10').classList.remove("active-tab");
  document.getElementById('cood10').classList.add("active-tab");
  document.getElementById('tab-hov28').classList.remove("active-link");
  document.getElementById('tab-hov29').classList.remove("active-link");
  document.getElementById('tab-hov30').classList.add("active-link");
}

// 11th event.....

function dispov11(){
  document.getElementById('overview11').classList.add("active-tab");
  document.getElementById('details11').classList.remove("active-tab");
  document.getElementById('cood11').classList.remove("active-tab");
  document.getElementById('tab-hov31').classList.add("active-link");
  document.getElementById('tab-hov32').classList.remove("active-link");
  document.getElementById('tab-hov33').classList.remove("active-link");
}
function dispdet11(){
  document.getElementById('overview11').classList.remove("active-tab");
  document.getElementById('details11').classList.add("active-tab");
  document.getElementById('cood11').classList.remove("active-tab");
  document.getElementById('tab-hov31').classList.remove("active-link");
  document.getElementById('tab-hov32').classList.add("active-link");
  document.getElementById('tab-hov33').classList.remove("active-link");
}
function dispcood11(){
  document.getElementById('overview11').classList.remove("active-tab");
  document.getElementById('details11').classList.remove("active-tab");
  document.getElementById('cood11').classList.add("active-tab");
  document.getElementById('tab-hov31').classList.remove("active-link");
  document.getElementById('tab-hov32').classList.remove("active-link");
  document.getElementById('tab-hov33').classList.add("active-link");
}

// 12th event.....

function dispov12(){
  document.getElementById('overview12').classList.add("active-tab");
  document.getElementById('details12').classList.remove("active-tab");
  document.getElementById('cood12').classList.remove("active-tab");
  document.getElementById('tab-hov34').classList.add("active-link");
  document.getElementById('tab-hov35').classList.remove("active-link");
  document.getElementById('tab-hov36').classList.remove("active-link");
}
function dispdet12(){
  document.getElementById('overview12').classList.remove("active-tab");
  document.getElementById('details12').classList.add("active-tab");
  document.getElementById('cood12').classList.remove("active-tab");
  document.getElementById('tab-hov34').classList.remove("active-link");
  document.getElementById('tab-hov35').classList.add("active-link");
  document.getElementById('tab-hov36').classList.remove("active-link");
}
function dispcood12(){
  document.getElementById('overview12').classList.remove("active-tab");
  document.getElementById('details12').classList.remove("active-tab");
  document.getElementById('cood12').classList.add("active-tab");
  document.getElementById('tab-hov34').classList.remove("active-link");
  document.getElementById('tab-hov35').classList.remove("active-link");
  document.getElementById('tab-hov36').classList.add("active-link");
}

// 13th event.....

function dispov13(){
  document.getElementById('overview13').classList.add("active-tab");
  document.getElementById('details13').classList.remove("active-tab");
  document.getElementById('cood13').classList.remove("active-tab");
  document.getElementById('tab-hov37').classList.add("active-link");
  document.getElementById('tab-hov38').classList.remove("active-link");
  document.getElementById('tab-hov39').classList.remove("active-link");
}
function dispdet13(){
  document.getElementById('overview13').classList.remove("active-tab");
  document.getElementById('details13').classList.add("active-tab");
  document.getElementById('cood13').classList.remove("active-tab");
  document.getElementById('tab-hov37').classList.remove("active-link");
  document.getElementById('tab-hov38').classList.add("active-link");
  document.getElementById('tab-hov39').classList.remove("active-link");
}
function dispcood13(){
  document.getElementById('overview13').classList.remove("active-tab");
  document.getElementById('details13').classList.remove("active-tab");
  document.getElementById('cood13').classList.add("active-tab");
  document.getElementById('tab-hov37').classList.remove("active-link");
  document.getElementById('tab-hov38').classList.remove("active-link");
  document.getElementById('tab-hov39').classList.add("active-link");
}

// 14th event.....

function dispov14(){
  document.getElementById('overview14').classList.add("active-tab");
  document.getElementById('details14').classList.remove("active-tab");
  document.getElementById('cood14').classList.remove("active-tab");
  document.getElementById('tab-hov40').classList.add("active-link");
  document.getElementById('tab-hov41').classList.remove("active-link");
  document.getElementById('tab-hov42').classList.remove("active-link");
}
function dispdet14(){
  document.getElementById('overview14').classList.remove("active-tab");
  document.getElementById('details14').classList.add("active-tab");
  document.getElementById('cood14').classList.remove("active-tab");
  document.getElementById('tab-hov40').classList.remove("active-link");
  document.getElementById('tab-hov41').classList.add("active-link");
  document.getElementById('tab-hov42').classList.remove("active-link");
}
function dispcood14(){
  document.getElementById('overview14').classList.remove("active-tab");
  document.getElementById('details14').classList.remove("active-tab");
  document.getElementById('cood14').classList.add("active-tab");
  document.getElementById('tab-hov40').classList.remove("active-link");
  document.getElementById('tab-hov41').classList.remove("active-link");
  document.getElementById('tab-hov42').classList.add("active-link");
}

// 15th event...

function dispov15(){
  document.getElementById('overview15').classList.add("active-tab");
  document.getElementById('details15').classList.remove("active-tab");
  document.getElementById('cood15').classList.remove("active-tab");
  document.getElementById('tab-hov43').classList.add("active-link");
  document.getElementById('tab-hov44').classList.remove("active-link");
  document.getElementById('tab-hov45').classList.remove("active-link");
}
function dispdet15(){
  document.getElementById('overview15').classList.remove("active-tab");
  document.getElementById('details15').classList.add("active-tab");
  document.getElementById('cood15').classList.remove("active-tab");
  document.getElementById('tab-hov43').classList.remove("active-link");
  document.getElementById('tab-hov44').classList.add("active-link");
  document.getElementById('tab-hov45').classList.remove("active-link");
}
function dispcood15(){
  document.getElementById('overview15').classList.remove("active-tab");
  document.getElementById('details15').classList.remove("active-tab");
  document.getElementById('cood15').classList.add("active-tab");
  document.getElementById('tab-hov43').classList.remove("active-link");
  document.getElementById('tab-hov44').classList.remove("active-link");
  document.getElementById('tab-hov45').classList.add("active-link");
}

// 16th event...

function dispov16(){
  document.getElementById('overview16').classList.add("active-tab");
  document.getElementById('details16').classList.remove("active-tab");
  document.getElementById('cood16').classList.remove("active-tab");
  document.getElementById('tab-hov46').classList.add("active-link");
  document.getElementById('tab-hov47').classList.remove("active-link");
  document.getElementById('tab-hov48').classList.remove("active-link");
}
function dispdet16(){
  document.getElementById('overview16').classList.remove("active-tab");
  document.getElementById('details16').classList.add("active-tab");
  document.getElementById('cood16').classList.remove("active-tab");
  document.getElementById('tab-hov46').classList.remove("active-link");
  document.getElementById('tab-hov47').classList.add("active-link");
  document.getElementById('tab-hov48').classList.remove("active-link");
}
function dispcood16(){
  document.getElementById('overview16').classList.remove("active-tab");
  document.getElementById('details16').classList.remove("active-tab");
  document.getElementById('cood16').classList.add("active-tab");
  document.getElementById('tab-hov46').classList.remove("active-link");
  document.getElementById('tab-hov47').classList.remove("active-link");
  document.getElementById('tab-hov48').classList.add("active-link");
}

// 17th event...

function dispov17(){
  document.getElementById('overview17').classList.add("active-tab");
  document.getElementById('details17').classList.remove("active-tab");
  document.getElementById('cood17').classList.remove("active-tab");
  document.getElementById('tab-hov49').classList.add("active-link");
  document.getElementById('tab-hov50').classList.remove("active-link");
  document.getElementById('tab-hov51').classList.remove("active-link");
}
function dispdet17(){
  document.getElementById('overview17').classList.remove("active-tab");
  document.getElementById('details17').classList.add("active-tab");
  document.getElementById('cood17').classList.remove("active-tab");
  document.getElementById('tab-hov49').classList.remove("active-link");
  document.getElementById('tab-hov50').classList.add("active-link");
  document.getElementById('tab-hov51').classList.remove("active-link");
}
function dispcood17(){
  document.getElementById('overview17').classList.remove("active-tab");
  document.getElementById('details17').classList.remove("active-tab");
  document.getElementById('cood17').classList.add("active-tab");
  document.getElementById('tab-hov49').classList.remove("active-link");
  document.getElementById('tab-hov50').classList.remove("active-link");
  document.getElementById('tab-hov51').classList.add("active-link");
}

// 18th event...

function dispov18(){
  document.getElementById('overview18').classList.add("active-tab");
  document.getElementById('details18').classList.remove("active-tab");
  document.getElementById('cood18').classList.remove("active-tab");
  document.getElementById('tab-hov52').classList.add("active-link");
  document.getElementById('tab-hov53').classList.remove("active-link");
  document.getElementById('tab-hov54').classList.remove("active-link");
}
function dispdet18(){
  document.getElementById('overview18').classList.remove("active-tab");
  document.getElementById('details18').classList.add("active-tab");
  document.getElementById('cood18').classList.remove("active-tab");
  document.getElementById('tab-hov52').classList.remove("active-link");
  document.getElementById('tab-hov53').classList.add("active-link");
  document.getElementById('tab-hov54').classList.remove("active-link");
}
function dispcood18(){
  document.getElementById('overview18').classList.remove("active-tab");
  document.getElementById('details18').classList.remove("active-tab");
  document.getElementById('cood18').classList.add("active-tab");
  document.getElementById('tab-hov52').classList.remove("active-link");
  document.getElementById('tab-hov53').classList.remove("active-link");
  document.getElementById('tab-hov54').classList.add("active-link");
}

// 19th event...

function dispov19(){
  document.getElementById('overview19').classList.add("active-tab");
  document.getElementById('details19').classList.remove("active-tab");
  document.getElementById('cood19').classList.remove("active-tab");
  document.getElementById('tab-hov55').classList.add("active-link");
  document.getElementById('tab-hov56').classList.remove("active-link");
  document.getElementById('tab-hov57').classList.remove("active-link");
}
function dispdet19(){
  document.getElementById('overview19').classList.remove("active-tab");
  document.getElementById('details19').classList.add("active-tab");
  document.getElementById('cood19').classList.remove("active-tab");
  document.getElementById('tab-hov55').classList.remove("active-link");
  document.getElementById('tab-hov56').classList.add("active-link");
  document.getElementById('tab-hov57').classList.remove("active-link");
}
function dispcood19(){
  document.getElementById('overview19').classList.remove("active-tab");
  document.getElementById('details19').classList.remove("active-tab");
  document.getElementById('cood19').classList.add("active-tab");
  document.getElementById('tab-hov55').classList.remove("active-link");
  document.getElementById('tab-hov56').classList.remove("active-link");
  document.getElementById('tab-hov57').classList.add("active-link");
}

// 20th event...

function dispov20(){
  document.getElementById('overview20').classList.add("active-tab");
  document.getElementById('details20').classList.remove("active-tab");
  document.getElementById('cood20').classList.remove("active-tab");
  document.getElementById('tab-hov58').classList.add("active-link");
  document.getElementById('tab-hov59').classList.remove("active-link");
  document.getElementById('tab-hov60').classList.remove("active-link");
}
function dispdet20(){
  document.getElementById('overview20').classList.remove("active-tab");
  document.getElementById('details20').classList.add("active-tab");
  document.getElementById('cood20').classList.remove("active-tab");
  document.getElementById('tab-hov58').classList.remove("active-link");
  document.getElementById('tab-hov59').classList.add("active-link");
  document.getElementById('tab-hov60').classList.remove("active-link");
}
function dispcood20(){
  document.getElementById('overview20').classList.remove("active-tab");
  document.getElementById('details20').classList.remove("active-tab");
  document.getElementById('cood20').classList.add("active-tab");
  document.getElementById('tab-hov58').classList.remove("active-link");
  document.getElementById('tab-hov59').classList.remove("active-link");
  document.getElementById('tab-hov60').classList.add("active-link");
}

// 21st event...

function dispov21(){
  document.getElementById('overview21').classList.add("active-tab");
  document.getElementById('details21').classList.remove("active-tab");
  document.getElementById('cood21').classList.remove("active-tab");
  document.getElementById('tab-hov61').classList.add("active-link");
  document.getElementById('tab-hov62').classList.remove("active-link");
  document.getElementById('tab-hov63').classList.remove("active-link");
  
}
function dispdet21(){
  document.getElementById('overview21').classList.remove("active-tab");
  document.getElementById('details21').classList.add("active-tab");
  document.getElementById('cood').classList.remove("active-tab");
  document.getElementById('tab-hov61').classList.remove("active-link");
  document.getElementById('tab-hov62').classList.add("active-link");
  document.getElementById('tab-hov63').classList.remove("active-link");
}
function dispcood21(){
  document.getElementById('overview21').classList.remove("active-tab");
  document.getElementById('details21').classList.remove("active-tab");
  document.getElementById('cood21').classList.add("active-tab");
  document.getElementById('tab-hov61').classList.remove("active-link");
  document.getElementById('tab-hov62').classList.remove("active-link");
  document.getElementById('tab-hov63').classList.add("active-link");
}

// 22nd event...

function dispov22(){
  document.getElementById('overview22').classList.add("active-tab");
  document.getElementById('details22').classList.remove("active-tab");
  document.getElementById('cood22').classList.remove("active-tab");
  document.getElementById('tab-hov64').classList.add("active-link");
  document.getElementById('tab-hov65').classList.remove("active-link");
  document.getElementById('tab-hov66').classList.remove("active-link");
}
function dispdet22(){
  document.getElementById('overview22').classList.remove("active-tab");
  document.getElementById('details22').classList.add("active-tab");
  document.getElementById('cood22').classList.remove("active-tab");
  document.getElementById('tab-hov64').classList.remove("active-link");
  document.getElementById('tab-hov65').classList.add("active-link");
  document.getElementById('tab-hov66').classList.remove("active-link");
}
function dispcood22(){
  document.getElementById('overview22').classList.remove("active-tab");
  document.getElementById('details22').classList.remove("active-tab");
  document.getElementById('cood22').classList.add("active-tab");
  document.getElementById('tab-hov64').classList.remove("active-link");
  document.getElementById('tab-hov65').classList.remove("active-link");
  document.getElementById('tab-hov66').classList.add("active-link");
}

// 23rd event......

function dispov23(){
  document.getElementById('overview23').classList.add("active-tab");
  document.getElementById('details23').classList.remove("active-tab");
  document.getElementById('cood23').classList.remove("active-tab");
  document.getElementById('tab-hov67').classList.add("active-link");
  document.getElementById('tab-hov68').classList.remove("active-link");
  document.getElementById('tab-hov69').classList.remove("active-link");
}
function dispdet23(){
  document.getElementById('overview23').classList.remove("active-tab");
  document.getElementById('details23').classList.add("active-tab");
  document.getElementById('cood23').classList.remove("active-tab");
  document.getElementById('tab-hov67').classList.remove("active-link");
  document.getElementById('tab-hov68').classList.add("active-link");
  document.getElementById('tab-hov69').classList.remove("active-link");
}
function dispcood23(){
  document.getElementById('overview23').classList.remove("active-tab");
  document.getElementById('details23').classList.remove("active-tab");
  document.getElementById('cood23').classList.add("active-tab");
  document.getElementById('tab-hov67').classList.remove("active-link");
  document.getElementById('tab-hov68').classList.remove("active-link");
  document.getElementById('tab-hov69').classList.add("active-link");
}

// 24th event......

function dispov24(){
  document.getElementById('overview24').classList.add("active-tab");
  document.getElementById('details24').classList.remove("active-tab");
  document.getElementById('cood24').classList.remove("active-tab");
  document.getElementById('tab-hov70').classList.add("active-link");
  document.getElementById('tab-hov71').classList.remove("active-link");
  document.getElementById('tab-hov72').classList.remove("active-link");
}
function dispdet24(){
  document.getElementById('overview24').classList.remove("active-tab");
  document.getElementById('details24').classList.add("active-tab");
  document.getElementById('cood24').classList.remove("active-tab");
  document.getElementById('tab-hov70').classList.remove("active-link");
  document.getElementById('tab-hov71').classList.add("active-link");
  document.getElementById('tab-hov72').classList.remove("active-link");
}
function dispcood24(){
  document.getElementById('overview24').classList.remove("active-tab");
  document.getElementById('details24').classList.remove("active-tab");
  document.getElementById('cood24').classList.add("active-tab");
  document.getElementById('tab-hov70').classList.remove("active-link");
  document.getElementById('tab-hov71').classList.remove("active-link");
  document.getElementById('tab-hov72').classList.add("active-link");
}

// 25th event......

function dispov25(){
  document.getElementById('overview25').classList.add("active-tab");
  document.getElementById('details25').classList.remove("active-tab");
  document.getElementById('cood25').classList.remove("active-tab");
  document.getElementById('tab-hov73').classList.add("active-link");
  document.getElementById('tab-hov74').classList.remove("active-link");
  document.getElementById('tab-hov75').classList.remove("active-link");
}
function dispdet25(){
  document.getElementById('overview25').classList.remove("active-tab");
  document.getElementById('details25').classList.add("active-tab");
  document.getElementById('cood25').classList.remove("active-tab");
  document.getElementById('tab-hov73').classList.remove("active-link");
  document.getElementById('tab-hov74').classList.add("active-link");
  document.getElementById('tab-hov75').classList.remove("active-link");
}
function dispcood25(){
  document.getElementById('overview25').classList.remove("active-tab");
  document.getElementById('details25').classList.remove("active-tab");
  document.getElementById('cood25').classList.add("active-tab");
  document.getElementById('tab-hov73').classList.remove("active-link");
  document.getElementById('tab-hov74').classList.remove("active-link");
  document.getElementById('tab-hov75').classList.add("active-link");
}

// 26th event......

function dispov26(){
  document.getElementById('overview26').classList.add("active-tab");
  document.getElementById('details26').classList.remove("active-tab");
  document.getElementById('cood26').classList.remove("active-tab");
  document.getElementById('tab-hov76').classList.add("active-link");
  document.getElementById('tab-hov77').classList.remove("active-link");
  document.getElementById('tab-hov78').classList.remove("active-link");
}
function dispdet26(){
  document.getElementById('overview26').classList.remove("active-tab");
  document.getElementById('details26').classList.add("active-tab");
  document.getElementById('cood26').classList.remove("active-tab");
  document.getElementById('tab-hov76').classList.remove("active-link");
  document.getElementById('tab-hov77').classList.add("active-link");
  document.getElementById('tab-hov78').classList.remove("active-link");
}
function dispcood26(){
  document.getElementById('overview26').classList.remove("active-tab");
  document.getElementById('details26').classList.remove("active-tab");
  document.getElementById('cood26').classList.add("active-tab");
  document.getElementById('tab-hov76').classList.remove("active-link");
  document.getElementById('tab-hov77').classList.remove("active-link");
  document.getElementById('tab-hov78').classList.add("active-link");
}

// 27th event......

function dispov27(){
  document.getElementById('overview27').classList.add("active-tab");
  document.getElementById('details27').classList.remove("active-tab");
  document.getElementById('cood27').classList.remove("active-tab");
  document.getElementById('tab-hov79').classList.add("active-link");
  document.getElementById('tab-hov80').classList.remove("active-link");
  document.getElementById('tab-hov81').classList.remove("active-link");
}
function dispdet27(){
  document.getElementById('overview27').classList.remove("active-tab");
  document.getElementById('details27').classList.add("active-tab");
  document.getElementById('cood27').classList.remove("active-tab");
  document.getElementById('tab-hov79').classList.remove("active-link");
  document.getElementById('tab-hov80').classList.add("active-link");
  document.getElementById('tab-hov81').classList.remove("active-link");
}
function dispcood27(){
  document.getElementById('overview27').classList.remove("active-tab");
  document.getElementById('details27').classList.remove("active-tab");
  document.getElementById('cood27').classList.add("active-tab");
  document.getElementById('tab-hov79').classList.remove("active-link");
  document.getElementById('tab-hov80').classList.remove("active-link");
  document.getElementById('tab-hov81').classList.add("active-link");
}



// 
$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });
});