function alertNoResults() {
	console.log("Running show alert");
	var z = document.getElementById("success-alert");
	$('div#alert').hide();
	$("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
	$("#success-alert").slideUp(500);
	});
	 	
}

function show(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
		console.log("Option 1");
        return;
    } else {
		
		console.log("Working");
	var x = document.getElementById("searchResults");
	x.classList.remove("d-none");
	var y = document.getElementById("carouselExampleSlidesOnly");
	$('div#carouselExampleSlidesOnly').height('200px');
	$('div#carouselInner').height('200px');
		
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
				document.getElementById("placeholder2").innerHTML=this.responseText;
				console.log("results true")
            }
			console.log("results false")
        };
        xmlhttp.open("GET", "../php/getResults.php?q=" + str, true);
        xmlhttp.send();
    }
}
