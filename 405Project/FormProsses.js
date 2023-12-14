// Array for focus event
	var helpArr = ["Please, Enter your Age."
	               ,"Please, Enter your Weight."
				   ,"Please, Enter Infectious Disease if you have or write NONE."
				   ,"Please, Choose your Last Donation time."
				   ,"Choose YES if you take antibiotics."
				   ,"Choose NO if you don't take antibiotics."
				   ,""];
				 
	var helpText;
	var form;

 function init(){
	helpText = document.getElementById("helpText");
	
	// register listener
	registerListener(document.getElementById("Age"),0);
	registerListener(document.getElementById("Weight"),1);
		registerListener(document.getElementById("Disease"),2);
	registerListener(document.getElementById("LastDonation"),3);
	registerListener(document.getElementById("Yes"),4);
	registerListener(document.getElementById("No"),5);
	
	//submit and reset confirmation
	form = document.getElementById("RequirmentForm");
	
	//submit
	form.addEventListener("submit", function(){return window.confirm("Are you sure of the entered information?");}, false);
	
	//reset
	form.addEventListener("reset", function(){return window.confirm("Are you sure you want to reset?");}, false);
 }				 

 function registerListener(obj, msgNum){
	// focus event
	obj.addEventListener("focus", function(){helpText.innerHTML = helpArr[msgNum];}, false);
	
	// blur event
	obj.addEventListener("blur", function(){helpText.innerHTML = helpArr[6];}, false);
 }
 function UpperCaseLetter() {
  var x = document.getElementById("Disease");
  x.value = x.value.toUpperCase();
}

  function fontcolor() {
    document.getElementById("Weight").style.color = "black";
  }
  

	window.addEventListener("load", init, false);
