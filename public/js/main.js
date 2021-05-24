const video = document.getElementById('webcam');

function startUp() {
	navigator.mediaDevices.getUserMedia({
		audio: false,
		video: true
	}).then(stream => {
		video.srcObject = stream;
	}).catch(console.error);
}

window.addEventListener('load', startUp, false);