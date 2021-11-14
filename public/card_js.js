function streetFn() {
    // const streetOutput = ;
    let x = document.querySelector("#street").value;
    document.querySelector(".streetAddress").innerHTML = x;
}
function receptionFn() {
    // const streetOutput = ;
    let x = document.querySelector("#reception").value;
    document.querySelector(".receptionAddress").innerHTML = x;
}

function cityFn() {
    let cityInput = document.querySelector("#cityInput");
    let city = document.querySelector(".city");

    city.innerHTML = `<span>${cityInput.value},</span>`
}

function stateFn() {
    let stateInput = document.querySelector("#stateInput");
    let state = document.querySelector(".state");

    state.innerHTML = `<span>${stateInput.value}</span>`
}

function locationFn() {
    let locationInput = document.querySelector("#locationInput");
    let location = document.querySelector(".location");

    location.innerHTML = `<span>${locationInput.value}</span>`
}
function brideFn() {
    let brideInput = document.querySelector("#brideInput");
    let bride = document.querySelector(".bride");

    bride.innerHTML = `<span>${brideInput.value}</span>`
}
function groomFn() {
    let groomInput = document.querySelector("#groomInput");
    let groom = document.querySelector(".groom");

    groom.innerHTML = `<span>${groomInput.value}</span>`
}

// function dateFn() {
//     let y = document.querySelector("#dateFn");
//     y.addEventListener(()=> {
        
//     })
//     document.querySelector(".dateInput").innerHTML = y;
//     return y;
// }

let dateInput = document.querySelector("#dateFn");
let dateOutput = document.querySelector(".dateOutput");
dateInput.addEventListener("change", () => {
    dateOutput.innerHTML= dateInput.value;
})

let timeInput = document.querySelector("#timeFn");
let timeOutput = document.querySelector(".timeOutput");
timeInput.addEventListener("change", ()=> {
    timeOutput.innerHTML = timeInput.value;
})




let output = document.getElementById('myDiv');

let buttons = document.getElementsByClassName('tool--btn');
for (let btn of buttons) {
	btn.addEventListener('click', () => {
		let cmd = btn.dataset['command'];
		if(cmd === 'createlink') {
			let url = prompt("Enter the link here: ", "http:\/\/");
			document.execCommand(cmd, false, url);
		} else {
			document.execCommand(cmd, false, null);
		}
	})
}

function execVal(command, value) {
  document.execCommand(command, false, value);
}

