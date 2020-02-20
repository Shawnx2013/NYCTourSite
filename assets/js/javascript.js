var index = 0;
show(index);
automatic();

function addShow(n){
    show(index += n);
}
            
function show(n){
    var i;
    var x = document.getElementsByClassName("slides");
    if(n > x.length){
        index = 1;
    }
    if(n < 1){
        index = x.length;
    }
    for(i=0;i<x.length;i++){
        x[i].style.display = "none";
    }
    x[index-1].style.display = "block";
}
/* automatic slides */           
function automatic(){
    var i;
    var x = document.getElementsByClassName("slides");
    for(i=0;i<x.length;i++){
        x[i].style.display = "none";
    }
    index++;
    if(index > x.length){
        index = 1;
    }
    x[index-1].style.display = "block";
    setTimeout(automatic, 10000); //every ten seconds
}

/* Opening a menu item closes the others*/
function box(element){
	var boxes = document.getElementsByClassName("check");
	for(var i = 0; i < boxes.length; i++){
		if(element.id == "neighborhoods"){
			if(box[i].id == "places"){
				continue;
			}
		}
		boxes[i].checked = false;
	}
	if(element.checked == true){
		element.checked = false;
	}
	else
		element.checked = true;
}

/*javascript for form validation */
function validateForm(){
	var username = document.getElementById("commentform").username.value;
	var comment =  document.getElementById("commentform").comment.value;
	//alert(username + comment);
	if(username == "" || username == null || comment == "" || comment == null){
		if(username == "" || username == null){
			document.getElementById("commentform").username.style.backgroundColor = "red";
			document.getElementById("warning2").innerHTML = "Please enter a name";
		}
		if(comment == "" || comment == null){
			document.getElementById("warning1").innerHTML = "Please enter a valid comment";
		}
		return false;
	}
	else
		return true;
}
/* for menu icon toggle change */
function iconChange(element){
	var x = document.getElementById("menu_button");
	if(element.checked == true){
		x.className = "fa fa-close buttonRight";
	}
	else
		x.className = "fa fa-bars buttonLeft";
}
