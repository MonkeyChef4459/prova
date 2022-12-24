var xValues = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30'];
var yValues = [100000,107000,114490,122504.3,131079.601,140255.173,150073.035,160578.148,171818.618,183845.921,196715.136,210485.195,225219.159,240984.5,257853.415,275903.154,295216.375,315881.521,337993.227,361652.753,386968.446,414056.237,443040.174,474052.986,507236.695,542743.264,580735.292,621386.763,664883.836,711425.705];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{  
      label: "ETF",
      fill: false,
      backgroundColor: "#94e0ff",
      borderColor: "#94e0ff",
      data: yValues,
      
    },{
      label: "BANCHE",
      data: [100000,104000,108160,112486.4,116985.856,121665.29,126531.902,131593.178,136856.905,142331.181,148025.181,153946.188,160104.036,166508.197,173168.525,180095.266,187299.077,194791.04,202582.682,210685.989,219113.429,227877.966,236993.084,246472.807,256331.72,266584.988,277248.388,288338.323,299871.856,311866.731],
      fill: false,
      backgroundColor: "#ff005a",
      borderColor: "#ff005a",
    }]
  },
  options: {
    layout: {
      padding: {
          left: 0,
          right: 0,
          top: 25,
          bottom: 25
      }
  }
  }
});


    var menu = document.getElementById("menu");
    var body = document.getElementById("body");
    var home = document.getElementById("page1");
    var sub = document.getElementById("sx");
    var page2 = document.getElementById("page2");
    var page3 = document.getElementById("page3");
    var page4 = document.getElementById("page4");
    var page5 = document.getElementById("page5");
    var schermo = window.screen.width;
    var hscreen = window.screen.height;

function tog(x){
    x.classList.toggle("change");
    if(body.style.overflow === "hidden" && schermo>1025){
        menu.style.opacity = "0";
        body.style.overflow = "";
        home.style.transform = "translateX(0)";
        sub.style.display = "block";
        home.style.opacity = "100%";
    }else if(body.style.overflow != "hidden" && schermo>1025){
        menu.style.opacity = "100%";
        menu.style.display = "block";
        body.style.overflow = "hidden";
        home.style.transform = "translateX(-30%)";
        sub.style.display = "none";
        home.style.opacity = "70%";
    }else if(body.style.overflow != "hidden" && schermo<1025){
        home.style.transform = "translateX(-100%)";
        menu.style.opacity = "100%";
        menu.style.display = "block";
        body.style.overflow = "hidden";
        page2.style.display = "none";
        page3.style.display = "none";
        page4.style.display = "none";
        page5.style.display = "none";
    }else if(body.style.overflow === "hidden" && schermo<1025){
        home.style.transform = "translateX(0)";
        menu.style.opacity = "0";
        body.style.overflow = "";
        page2.style.display = "block";
        page3.style.display = "block";
        page4.style.display = "block";
        page5.style.display = "block";
    }
}


function contatti(){
    document.getElementById("contatti").style.top = "0";
    home.style.opacity = menu.style.opacity = "0";
}

function chiudifooter(){
    document.getElementById("contatti").style.top = "300%";
    menu.style.opacity = "100%";
    home.style.opacity = "70%";
}



window.onscroll = function() {myFunction(),anim1(),anim2(),anim3(),anim4()};

function myFunction() {
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("bar").style.top = "0";
  } else {
    document.getElementById("bar").style.top = "-80px";
  }
}

function anim1(){
    if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
        document.getElementById("dx1").style.opacity = "100";
        document.getElementById("sx1").style.opacity = "100";
      }
}

function anim2(){
    if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900) {
        document.getElementById("due").style.opacity = "100";
      }
}

function anim3(){
    if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200) {
        document.getElementById("quattro").style.opacity = "100";
        document.getElementById("cinque").style.opacity = "100";
      }
}

function anim4(){
    if (document.body.scrollTop > 1400 || document.documentElement.scrollTop > 1400) {
        document.getElementById("sei").style.opacity = "100";
        document.getElementById("sette").style.opacity = "100";
      }
}


function ruota(){
    document.getElementById("img1").style.transform = "rotate(360deg)";
}

function ruota1(){
    document.getElementById("img2").style.transform = "rotate(360deg)";
}

function ruota2(){
    document.getElementById("img3").style.transform = "rotate(360deg)";
}

var uno = document.getElementById("pop1");
var due = document.getElementById("pop2");
var tre = document.getElementById("pop3");
var quat = document.getElementById("pop4");

