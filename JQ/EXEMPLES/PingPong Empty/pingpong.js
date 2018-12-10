

var canvas, context;
var fieldWidth, fieldHeight;

canvas = $("#camp")[0];

fieldWidth = canvas.width;
fieldHeight = canvas.height;
context = canvas.getContext("2d");

// Ball
var xBall, yBall;
var ballWidth, ballHeight;
var incBall, incX, incY;

// Pales
var stickWidth, stickHeight, stickSeparation;
var incStick;
var leftStickX, leftStickY, rightStickX, rightStickY;



drawField();
initBall();
drawBall();
initSticks();
drawLeftStick();
drawRightStick();

//linea separadora del camp

function drawField(){	
	context.fillStyle = "red";
	context.clearRect(0,0,fieldWidth, fieldHeight);
	context.fillRect(fieldWidth/2,0,2,fieldHeight);
}

//bolla com es

function initBall(){
	xBall = fieldWidth/2;
	yBall = fieldHeight/2;
	ballWidht = 20;
	ballHeight = 20;
	incBall = 1;
}

//grandaria i forma de la bolla

function drawBall(){
	context.fillStyle = "blue";
	context.fillRect(xBall, yBall, ballWidht, ballHeight)
}

function initSticks(){
	stickWidth = 15;
	stickHeight = 100;
	stickSeparation = 20;
	incStick = 5;
	leftStickX = stickSeparation;
	leftStickY = fieldHeight/2 - stickHeight/2;
	rightStickX = fieldWidth - stickSeparation - stickWidth;
	rightStickY = fieldHeight/2 - stickHeight/2;
}

function drawLeftStick (){
	context.fillStyle = "white";
	context.fillRect(leftStickX, leftStickY, stickWidth, stickHeight);
}

function drawRightStick (){
	context.fillStyle = "white";
	context.fillRect(rightStickX, rightStickY, stickWidth, stickHeight);
}
