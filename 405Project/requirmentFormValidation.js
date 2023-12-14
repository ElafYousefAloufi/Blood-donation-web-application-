
  
  	function FormValidation(){  
	var caution = document.getElementById("caution");
	var cautionRow = document.getElementById("cautionRow");
	var agefiled = document.getElementById("AgeFiled");
	var weightfiled = document.getElementById("WeightFiled");
	var antibioticsfiled = document.getElementById("AntibioticsFiled");
    var diseasesfiled = document.getElementById("DiseasesFiled");	
	var age = document.getElementById("Age");
	var weight = document.getElementById("Weight");
	var lastDonation = document.getElementById("LastDonation");
	var date = lastDonation.options[lastDonation.selectedIndex];
	var antibiotics = document.getElementsByName("answer");
 	var disease = document.getElementById("Disease");
	
	
	if(!/^[0-9]+$/.test(age.value)){
		agefiled.style.color="red";
		agefiled.innerHTML = "(!) You Must Enter Numbers Only.";
		age.focus();
		return false;		      
	}else{
	if(age.value < 18){
		cautionRow.style.visibility="visible";
		caution.style.color="red";
	    caution.innerHTML ="Sorry you are not eligible to donate, your age is under 18";
		age.focus();
		return false;
	  }
	}
	
	 if(!/^[0-9]+$/.test(weight.value)){
		weightfiled.style.color="red";
		weightfiled.innerHTML = "(!) You Must Enter Numbers Only.";
		weight.focus();
		return false;		
	}else{
	   if(weight.value < 50){
		cautionRow.style.visibility="visible";
		caution.style.color="red";
	    caution.innerHTML ="Sorry you are not eligible to donate, your weight is under 50";	
		weight.focus();
		return false;
	  } 
	}
	
	
 	if(!/^[a-zA-Z]+$/.test(disease.value)){
		diseasesfiled.style.color="red";
		diseasesfiled.innerHTML = "(!) You Must Enter Alphabet Characters Only.";
		disease.focus();
		return false;
	} else{
		var diseasesArr =["AIDS","hepatitis B","hepatitis C","syphilis","malaria"
	                     ,"diabetes","hypertension","cancer"];
						 
		for(var i = 0; i < diseasesArr.length; i++){
			if(diseasesArr[i].toLowerCase() == disease.value.toLowerCase()){
		     cautionRow.style.visibility="visible";
		     caution.style.color="red";
	         caution.innerHTML ="Sorry you are not eligible to donate, you have".concat(" ", diseasesArr[i]);	
		     disease.focus();
		     return false;
			}			
		}	
	}  
	
	if(date.text == "3 Months"){
		cautionRow.style.visibility="visible";
		caution.style.color="red";
	    caution.innerHTML ="Sorry you are not eligible to donate, your last donation was 3 months ago";	
		lastDonation.focus();
		return false;
	}

    if(!(antibiotics[0].checked || antibiotics[1].checked)){
		antibioticsfiled.style.color="red";
		antibioticsfiled.innerHTML = "(!) You Must Choose One.";
		return false;
	}else{
		 if(antibiotics[0].checked == true){
		 cautionRow.style.visibility="visible";
		 caution.style.color="red";
	     caution.innerHTML ="Sorry you are not eligible to donate, your are taking antibiotics";
         var YESantibiotics = document.getElementById("Yes");		 
		 YESantibiotics.focus();
		 return false; 	  
	    }
	  }
	  
	    setTimeout(function() {alert("That's great, you are eligible to donate!");}, 1000);	
		return true;
  
  }
  
  

  
  