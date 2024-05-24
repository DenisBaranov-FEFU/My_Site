var count = 0;
document.getElementById("myButton").onclick = function () {
	count++;
	if (count % 2 == 0) { //проверка на четность
		document.getElementById("demo").innerHTML = "";//здесь будет описанно ,что произойдет
	} else {
		var img = document.createElement("img");
		//здесь то, что будет выполняться в противном случае
		img.src = "file:///C:/Users/AsusPC/Desktop/Me.png";
		document.getElementById("demo").appendChild(img);
	}
}