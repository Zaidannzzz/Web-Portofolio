
let video = document.getElementById("video");
let canvas = document.body.appendChild(document.createElement("canvas"));
let ctx = canvas.getContext("2d");
let model;
let width = 600;
let height = 400;

ctx.canvas.width = width;
ctx.canvas.height = width;
const startStream = () => {
    navigator.mediaDevices.getUserMedia ({
        video : {width: width, height: height},
        audio : false
    }).then((stream) => {
        video.srcObject = stream;
    });
}

const detect = async () => {
    //const model = await blazeface.load();
    const returnTensors = false; // Pass in `true` to get tensors back, rather than values.
    const predictions = await model.estimateFaces(video, returnTensors);

    console.log(predictions);

    ctx.drawImage(video, 0, 0, width, height);

    predictions.forEach(element => {
        ctx.beginPath();
        ctx.lineWidth = 4;
        ctx.strokeStyle = "green";
        ctx.rect(
            element.topLeft[0], element.topLeft[1],
            element.bottomRight[0] - element.topLeft[0],
            element.bottomRight[1] - element.topLeft[1]
        );
        ctx.stroke();

        ctx.fillStyle = "green";
        element.landmarks.forEach((landmarks) => {
            ctx.fillRect(landmarks[0], landmarks[1], 10, 10);
        })
    });
}

startStream();
video.addEventListener('loadeddata', async () => {
    model = await blazeface.load();
    setInterval(detect, 20);
});