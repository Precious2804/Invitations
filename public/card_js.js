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

function toastFn() {
    let toastInput = document.querySelector("#toastInput");
    let toastStat = document.querySelector(".toastStat");

    toastStat.innerHTML = `<span>${toastInput.value},</span>`
}
function colorFn() {
    let colorInput = document.querySelector("#colorInput");
    let colorStat = document.querySelector(".colorStat");

    colorStat.innerHTML = `<span>${colorInput.value},</span>`
}
function venueFn() {
    let venueInput = document.querySelector("#venueInput");
    let venueDet = document.querySelector(".venueDet");

    venueDet.innerHTML = `<span>${venueInput.value},</span>`
}
function colorFn() {
    let colorInput = document.querySelector("#colorInput");
    let color = document.querySelector(".color");

    color.innerHTML = `<span>${colorInput.value},</span>`
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
function brideFamFn() {
    let bridefamInput = document.querySelector("#bridefamInput");
    let brideFam = document.querySelector(".brideFam");

    brideFam.innerHTML = `<span>${bridefamInput.value}</span>`
}
function groomFamFn() {
    let groomFamInput = document.querySelector("#groomFamInput");
    let groomFam = document.querySelector(".groomFam");

    groomFam.innerHTML = `<span>${groomFamInput.value}</span>`
}

function brideFn() {
    let brideInput = document.querySelector("#brideInput");
    let bride = document.querySelector(".bride");

    bride.innerHTML = `<span>${brideInput.value}</span>`
}
function celebrantFn() {
    let celebrantInput = document.querySelector("#celebrantInput");
    let celebrant = document.querySelector(".celebrant");

    celebrant.innerHTML = `<span>${celebrantInput.value}</span>`
}
function departedFn() {
    let departedInput = document.querySelector("#departedInput");
    let departed = document.querySelector(".departed");

    departed.innerHTML = `<span>${departedInput.value}</span>`
}
function durationFn() {
    let durationInput = document.querySelector("#durationInput");
    let duration = document.querySelector(".duration");

    duration.innerHTML = `<span>${durationInput.value}</span>`
}

function groomFn() {
    let groomInput = document.querySelector("#groomInput");
    let groom = document.querySelector(".groom");

    groom.innerHTML = `<span>${groomInput.value}</span>`
}
function dateFn() {
    let dateOutput = document.querySelector("#dateOutput");
    let date = document.querySelector(".date");

    date.innerHTML = `<span>${dateOutput.value}</span>`
}
function timeFn() {
    let timeOutput = document.querySelector("#timeOutput");
    let time = document.querySelector(".time");

    time.innerHTML = `<span>${timeOutput.value}</span>`
}


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

