<!DOCTYPE html>
<html>

<?php require_once 'db_connect.php'; ?>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>1minutematcher</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css?<?php echo date('l jS \of F Y h:i:s A'); ?>" />
	<script src="js/jquery3_2_1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">

	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.2.2/d3.v3.min.js"></script>
    <script src="uvchart/uvcharts.js"></script>
    <script src="uvchart/canvg.js"></script>
    <script src="uvchart/canvas-toBlob.js"></script>
    <script src="uvchart/FileSaver.js"></script>
    <script src="uvchart/rgbcolor.js"></script>
</head>
<body>

<section>
	
	<center><img src="header.png" width="1200"></center>
	<!-- <iframe width="900" height="800" frameborder="0" scrolling="no" src="//plot.ly/~stephanieherman/341.embed"></iframe> -->
</section>

<section id="intro">
	<div class="container">
		<p>1minutematcher mines adds from the Swedish Labor Office (Arbetsförmedlingen) on keywords and required skills and matches these to your personal profile. In one minute you will have your top five hits, with similarity measurements and lists of potential abilities that you need to acquire.</p>
	</div>
</section>

<section>
    <div class="container">
        <h1>Field Demand</h1>
        <div id="uv-div"></div>
    </div>
</section>

<section>
	<div class="container">
	<h1>Profession Field</h1>



	<?php
	$sql = "select * from omraden_namn order by namn";
	$result = $con->query($sql);
	while ($row = $result->fetch_row()) {
		echo "<button value=".$row[0]." onclick='showUser(this.value)'>".$row[1]."</button>";
		/*$names[] = $row[1];
		$keywords[] = explode (",", $row[2]);*/

	}


/*
	$words = $keywords[0];
	foreach($words as $key){
    echo $key;
	}*/

/*	$q = intval($_GET['q']);

$ind = array_search('q',$names);*/
/*$words = $keywords[0];

foreach($words as $key) {
	echo "<button>".$key."</button>";
}*/


	?>

</script>
	</div>
</section>

<!-- <section>
	<form>
	<select name="id" onchange="showUser(this.value)">
		<option value="">Select a id</option>
		<option value="75">id 75 </option>
		<option value="82">id 82</option>
		<option value="86">id 86</option>
	</select>

	</form>

	<div id="txtHint">Title will be listed heres</div>

</section> -->


<!-- <section id="area">
	<h1>Area choice</h1>
	<p onclick="showSection()">asd</p><p onclick="showSection()">asd</p><p onclick="showSection()">asd</p><p onclick="showSection()">asd</p><p onclick="showSection()">asd</p><p onclick="showSection()">asd</p><p onclick="showSection()">asd</p><p onclick="showSection()">asd</p><p onclick="showSection()">asd</p><p onclick="showSection()">asd</p><p onclick="showSection()">asd</p> -->

<!-- assigna id med php. hämta data från område tabellen -->

<!-- </section>  -->

<section id="hidden">
	<div id="hidden_container">

	</div>
</section>

<section>
	<div class="container">	

	<h1>Top matches</h1>
	<!-- <div class="match_container">	
		<div class="match_box">
			<p class="percentage">70%</p>
			<p class="match">match</p>
		</div>

		<div class="skill_box">
			<h2>Job title</h2>
			<h2>Skills you lack</h2>
			<button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button>
		</div>
	</div>
	<div class="match_container">	
		<div class="match_box">
			<p class="percentage">70%</p>
			<p class="match">match</p>
		</div>

		<div class="skill_box">
			<h2>Job title</h2>
			<h2>Skills you lack</h2>
			<button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button><button>asdas</button>
		</div>

		<div class="prognose">
			<h2>Prognose</h2>
		</div>
	</div> -->
	<!-- <div class="match_container">	
		<div class="match_box">
			<p class="percentage">70<span class="percentageToken">%</span></p>
			<p class="match">match</p>
		</div>

		<div class="skill_box">
			<h1>Job title</h1>
			<h2>Skills you lack</h2>
			<p class="lack_skill">pasdkasdjkasjd</p><p class="lack_skill">pasdkasdjkasjd</p><p class="lack_skill">pasdkasdjkasjd</p><p class="lack_skill">pasdkasdjkasjd</p><p class="lack_skill">pasdkasdjkasjd</p><p class="lack_skill">pasdkasdjkasjd</p>
		</div>

		<div class="prognose">
			<h2>Prognose</h2>
		</div>
	</div>
	<div class="match_container">	
		<div class="match_box">
			<p class="percentage">70<span class="percentageToken">%</span></p>
			<p class="match">match</p>
		</div>

		<div class="skill_box">
			<h1>Job title</h1>
			<h2>Skills you lack:</h2>
			<p class="lack_skill">psdjkasjd</p><p class="lack_skill">pasjd</p><p class="lack_skill">pasdkasjd</p><p class="lack_skill">pasdkasdjd</p><p class="lack_skill">pasdkasdjkasjd</p><p class="lack_skill">pasdkad</p>
		</div>

		<div class="prognose">
			<h2>Prognose</h2>
		</div>
	</div> -->
	</div>

</section>

<div id="top_hits">

</div>

<script>
function showSection() {
    document.getElementById("hidden").style.display = "block";
}

function showUser(str) {
    if (str == "") {
        document.getElementById("hidden").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } 
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	document.getElementById("hidden").style.display = "block";
                /*if (document.getElementById("hidden").hasClass('hidden')) {
                	document.getElementById("hidden").addClass('show');
                	document.getElementById("hidden").removeClass('hidden');
                };*/
                document.getElementById("hidden_container").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getSkills.php?q="+str,true);
        xmlhttp.send();
    }
}

	$( document ).ready(function() {
	    console.log( "document loaded" );    

	    $('#hidden_container').click(function(e) {   
	    var target = $(e.target);

	    
	    if (target.hasClass('skills') && !target.hasClass('focused')){
	    target.addClass('focused');
	    }
	    else if (target.hasClass('skills') && target.hasClass('focused')){
	    target.removeClass('focused');
	    }
	    });
	});

/*function draw() {
  var buttons = document.getElementsByClassName("skills");
  var c = [];
  for(var i = 0; i < buttons.length; i++){
       if(buttons[i].hasClass('focused')){c.push(1);}
       else{c.push(0);}
   }
  
    $.post("localhost" + "/openhack/manage_add.php",
        {
            value: value
        },
        function(data){
           console.log(data); //data contains return data
           alert(data);
        }
    );
}*/


function in_array(x, arr){
	for(var i = 0; i < arr.length; i++){
		if(arr[i] == x){
			return true;
		}
	}
	return false;
}

function indexOfMax(arr, exceptions) {
	console.log(exceptions)
	if (arr.length === 0) {
	    return -1;
	}

	var max = -1;
	var maxIndex = -1;

	for (var i = 0; i < arr.length; i++) {
		if(in_array(i, exceptions) || arr[i] == 0){
			continue;
		}
	    if (maxIndex == -1 || arr[i] > max) {
	        maxIndex = i;
	        max = arr[i];
	    }
	}
   return maxIndex;
}

function maxFive(arr){
	indexes = []
	for(var i = 0; i < 5; i++){
		tmp = indexOfMax(arr, indexes);
		if(tmp != -1){
			indexes.push(tmp);
		}
	}
	return indexes;
}

function draw(a) {
  var buttons = document.getElementsByClassName("skills");

  var c = [];
  for(var i = 0; i < buttons.length; i++){
  		if(buttons[i].classList.contains('focused')){c.push(buttons[i].value);}
       
   }
  	console.log(c)
  	console.log(a)

    $.post("./manage_add.php",
        {
            value: c,
            area: a
        },
        function(data){
        	console.log(data);
        	var parsedData = JSON.parse(data);
        	var names = parsedData[0];
        	var missing = parsedData[1];
        	var match = parsedData[2];
        	var interests = maxFive(match);

          	var div = document.createElement('div');
			var container = document.getElementById('top_hits')
			container.innerHTML = '<section><div class="container">'
			container.appendChild(div);
			div.className = 'result_container';

			for(var i = 0; i < interests.length; i++){
				var loop_data = [];
				for (j = 0; j < missing[interests[i]].length; j++){
					loop_data.push	('<p class="lack_skill">'+missing[interests[i]][j]+ '</p>');
				}
				console.log(match[interests[i]]*100)
				div.innerHTML += '<div class="match_container"><div class="match_box"><p class="percentage">'+Math.round(match[interests[i]]*100)+'<span class="percentageToken">%</span></p><p class="match">match</p></div><div class="skill_box"><h1 class="title_left">'+names[interests[i]]+'</h1><h2 class="title_left">Skills you lack</h2><br><br>'+loop_data.join()+'</div></div>';
			}
			div.innerHTML += '</div></section><br><br>';
			
		}
    );
}

/*<div class="match_container">	
		<div class="match_box">
			<p class="percentage">70<span class="percentageToken">%</span></p>
			<p class="match">match</p>
		</div>

		<div class="skill_box">
			<h1>Job title</h1>
			<h2>Skills you lack</h2>
			<p class="lack_skill">pasjd</p><p class="lack_skill">pasdkasdjkasjd</p><p class="lack_skill">pasdkasdj</p><p class="lack_skill">pajkasjd</p><p class="lack_skill">pasdkasdjkasjd</p><p class="lack_skill">pasdkasdjkasjd</p>
		</div>

		<div class="prognose">
			<h2>Prognose</h2>
		</div>
	</div>
	<div class="match_container">	
		<div class="match_box">
			<p class="percentage">70<span class="percentageToken">%</span></p>
			<p class="match">match</p>
		</div>

		<div class="skill_box">
			<h1>Job title</h1>
			<h2>Skills you lack:</h2>
			<p class="lack_skill">psdjkasjd</p><p class="lack_skill">pasjd</p><p class="lack_skill">pasdkasjd</p><p class="lack_skill">pasdkasdjd</p><p class="lack_skill">pasdkasdjkasjd</p><p class="lack_skill">pasdkad</p>
		</div>

		<div class="prognose">
			<h2>Prognose</h2>
		</div>
	</div>*/

/*function draw() {
  var buttons = document.getElementsByClassName("skills");
  var c = [];
  for(var i = 0; i < buttons.length; i++){
       if(buttons.items[1].hasClass('focused')){c[i] = 1;}
       else{c[i] = 0;}
   }
  
    $.post("localhost" + "/openHack/manage_add.php",
        {
            value: value
        },
        function(data){
           console.log(data); //data contains return data
           alert(data);
        }
    );
}*/
	/*$(document).ready(function(){ 
    $('.btn').click(function() { 
        $(this).toggleClass('active');
    });
});*/
/*}*/

</script>

</body>

<script>
     var graphdef = {
        categories : ['Ads', 'Positions'],
        dataset : {
		'Ads' : [
			{ name : 'Economics, Law', value : 4064},
			{ name : 'Building, Construction', value : 1585 },
			{ name : 'Managers', value : 1660 },
			{ name : 'Data/IT', value : 2873 },
			{ name : 'Sales, Marketing', value : 5643 },
			{ name : 'Craft Professions', value : 140 },
			{ name : 'Hotel, Restaurant', value : 2549 },
			{ name : 'Health Care', value : 5684 },
			{ name : 'Industrial Production', value : 1512 },
			{ name : 'Installation, mMintenance', value : 1314 },
			{ name : 'Body/Beauty Care', value : 361 },
			{ name : 'Culture, Media, Design', value : 432 },
			{ name : 'Military Work', value : 22 },
			{ name : 'Agriculture', value : 210 },
			{ name : 'Nature Sciences', value : 323 },
			{ name : 'Educational Work', value : 7625 },
			{ name : 'Sanitation, Cleaning', value : 999 },
			{ name : 'Social Work', value : 3668 },
			{ name : 'Security', value : 273 },
			{ name : 'Technical Work', value : 1691 },
			{ name : 'Technical Transportation', value : 2090 }

		],

		'Positions' : [
			{ name : 'Economics, Law', value : 4947},
			{ name : 'Building, Construction', value : 2661 },
			{ name : 'Managers', value : 1760 },
			{ name : 'Data/IT', value : 3985 },
			{ name : 'Sales, Marketing', value : 13555 },
			{ name : 'Craft Professions', value : 164 },
			{ name : 'Hotel, Restaurant', value : 4726 },
			{ name : 'Health Care', value : 22155 },
			{ name : 'Industrial Production', value : 3910 },
			{ name : 'Installation, Maintenance', value : 2134 },
			{ name : 'Body/Beauty Care', value : 494 },
			{ name : 'Culture, Media, Design', value : 3181 },
			{ name : 'Military Work', value : 34 },
			{ name : 'Agriculture', value : 359 },
			{ name : 'Nature Sciences', value : 369 },
			{ name : 'Educational Work', value : 10583 },
			{ name : 'Sanitation, Cleaning', value : 1760 },
			{ name : 'Social Work', value : 9888 },
			{ name : 'Security', value : 1124 },
			{ name : 'Technical Work', value : 2033 },
			{ name : 'Technical Transportation', value : 7729 }
		]
	}
    };

    var chart = uv.chart("Bar", graphdef,
			{
        meta : {
            caption : "",
            subcaption : "",
            hlabel : "",
            vlabel : "Quantity"
        },
        graph : {
            orientation : 'Vertical',
            custompalette : ['#8abee5', '#344bbf']
        },
        dimension : {
            width : 1200
        },
        effects : {
            hovercolor : '#aa3939'
        },
        legend : {
            position : "right"
        }
    });
/*
    $('.uv-frame-bg').attr('width', 1200);
    $('.uv-frame').attr('width', 1200);
    */
</script>
<style>
	.uv-hor-axis .tick  text {
    white-space: nowrap;
    transform: translate(-20px, 60px) rotate(-60deg);
    text-indent: -100%;
    transform-origin: top right;
    text-align: right !important;
    font-size: 10pt;

}
</style>
</html>