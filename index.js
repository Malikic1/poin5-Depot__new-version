const waterPrice = [550,700,600];
function calc(){
  var aquariteWater=document.getElementById("aquarite").value*waterPrice[0]
  var aquafinaWater=document.getElementById("aquafina").value*waterPrice[1]
  var bigiWater=document.getElementById("bigi-w").value*waterPrice[2]
  var evaWater=document.getElementById("eva").value*waterPrice[1]
  document.getElementById("water-amount").style.display= "block"
  document.getElementById("water-amount").innerHTML="Bottled-Water  TOTAL:"+"  "+ "#"+(aquariteWater+aquafinaWater+bigiWater+evaWater);
}
  
const softPrice = [1000,1500,1400,];
function calculate(){
  var colaPet=document.getElementById("cola1").value*softPrice[0]
  var colaBig=document.getElementById("cola2").value*softPrice[1]
  var orangePet=document.getElementById("orange1").value*softPrice[2]
  var orangeBig=document.getElementById("orange2").value*softPrice[1]
  var tropicaPet=document.getElementById("tropica1").value*softPrice[0]
  var tropicaBig=document.getElementById("tropica2").value*softPrice[1]
  var chapPet=document.getElementById("chap1").value*softPrice[2]
  var chapBig=document.getElementById("chap2").value*softPrice[1]
  var pepsiPet=document.getElementById("pepsi1").value*softPrice[0]
  var pepsiBig=document.getElementById("pepsi2").value*softPrice[1]
  var mirindaPet=document.getElementById("mirinda1").value*softPrice[2]
  var mirindaBig=document.getElementById("mirinda2").value*softPrice[1]
  var cokePet=document.getElementById("coke1").value*softPrice[2]
  var cokeBig=document.getElementById("coke2").value*softPrice[1]
  var fantaPet=document.getElementById("fanta1").value*softPrice[0]
  var fantaBig=document.getElementById("fanta2").value*softPrice[1]
  var alivePet=document.getElementById("alive1").value*softPrice[2]
  var aliveBig=document.getElementById("alive2").value*softPrice[1]
  document.getElementById("soft-amount").style.display= "block"
  document.getElementById("soft-amount").innerHTML="Soft-Drink"+" "+"TOTAL:"+"  "+ "#"+
  (colaPet+colaBig+orangePet+orangeBig+tropicaPet+
    tropicaBig+chapPet+chapBig+pepsiPet+pepsiBig+mirindaPet+
    mirindaBig+cokePet+cokeBig+fantaPet+fantaBig+alivePet+aliveBig)
} 

$(document).ready(function(){
  $("#menu").click(function(){
    $("#panel").toggle("fast");
  });

  
  $("#priceT").click(function(){
    $("#priceTracker").show()
  });
  $("#cancel").click(function(){
    $("#priceTracker").hide()
  });
  
  $("#cancel1").click(function(){
    $("#myModal").hide();
    $(".register").hide();
    $(".login").hide();
  });
   
   $("#loginBtn").click(function(){
    $("#myModal").show();
    $(".register").hide()
    $(".login").show()
     $(".btn-2").css({'background-color': 'silver', 'color': 'black',  'border-bottom':'none'});
    $(".btn-1").css({'background-color': 'aliceblue', 'color': 'darkred',  'border-bottom':'solid  #4f4fff 0.2rem'})
  });
   $("#registerBtn").click(function(){
    $("#myModal").show();
    $(".register").show();
    $(".login").hide();
        $(".btn-1").css({'background-color': 'silver', 'color': 'black', 'border-bottom':'none'});
    $(".btn-2").css({'background-color': 'aliceblue', 'color': 'darkred', 'border-bottom':'solid  #4f4fff 0.2rem'});
  });
 
  $("#selector1").click(function(){
    $(".register").hide();
    $(".login").show();
    $(".btn-2").css({'background-color': 'silver', 'color': 'black',  'border-bottom':'none'});
    $(".btn-1").css({'background-color': 'aliceblue', 'color': 'darkred',  'border-bottom':'solid  #4f4fff 0.2rem'})
  });

  $("#selector2").click(function(){
    $(".register").show();
    $(".login").hide();
    $(".btn-1").css({'backgroundColor': 'silver', 'color': 'black', 'border-bottom':'none'});
    $(".btn-2").css({'backgroundColor': 'aliceblue', 'color': 'darkred', 'border-bottom':'solid  #4f4fff 0.2rem'});
  });

$('#type').on('change', function() {
 if(this.value =="1"){
  $("#divSoft").hide()
  $("#divWater").show()
  $("section").height(290)} 
 if(this.value =="2"){
  $("#divWater").hide()
  $("#divSoft").show()
  $("section").height(650)} 
 if(this.value =="3"){
  $("#divWater").show()
  $("#divSoft").show()
  $("section").height(770)}
});
  });
 function scrollDisplay() { 
   $("#panel").hide(700);
  $("html, body").animate({ scrollTop: "1200" }); }

var xValues = [1,2,3,4,5,6,7,8,9,10,11,12]
//pepsi product chart
new Chart("priceChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [
      { 
      data: [860,1140,1060,1020,1170,1110,1330,1370,1497],borderColor:"blue",fill:true,} ,
      {
      data: [535,565,643,608,786,790,827,912,933],borderColor:"green",fill:true,}
    ]
  },
  options: {
    responsive:true ,
    legend: {display: false},
    scales:{ yAxes:[{ticks:{min: 200,max: 2000,fontSize:7}}],
    xAxes:[{ticks:{fontSize:9}}]
      
    }
  }
});
//Bigi product chart
  new Chart("priceChart1", {
   type:"line" ,
   data:{
     labels: xValues ,
     datasets:[{
       data:[732,758,806,776,830,872,884,923,944], borderColor:"green" ,fill:true
     },
    {
       data:[876,898,986,936,1090,1230,1215,1310,1370], borderColor:"blue" ,fill:true,
     },
    {
       data:[336,358,421,405,492,505,466,420,452], borderColor:"brown" ,fill:true
     }
     ]
   } ,
    options:{ 
      legend:{display:false},
    scales:{ yAxes: [{ticks: {min: 200,max: 2000,fontSize:7}}],
    xAxes:[{ticks:{fontSize:9}}]
      }
      
}
    });
 //cocacola chart
  new Chart("priceChart2", {
   type:"line" ,
   data:{
     labels: xValues ,
     datasets:[{
       data:[654,675,641,640,893,872,993,943,974], borderColor:"green" ,fill:true
     },
    { data:[1212,1150,1177,1169,1298,1370,1355,1414,1473], borderColor:"blue" ,fill:true,
     },
    { data:[456,472,466,479,496,523,515,528,540], borderColor:"brown" ,fill:true
     }
     ]
   } ,
    options:{ 
      legend:{display:false},
    scales:{ yAxes: [{ticks: {min: 200,max: 2000,fontSize:7}}],
    xAxes:[{ticks:{fontSize:9}}] }
      }
    });
// 5 alive
new Chart("priceChart3", {
  type:"line",
  data:{
  labels: xValues,
  datasets:[
    { data:[1270,1310,1287,1305,1365,1397,1477,1459,1456],borderColor:"blue",fill:true
},
    { data:[789,763,782,790,815,867,875,905,893],borderColor:"green",fill:true
}]
    },
options:{
  legend:{display:false},
  scales:{ yAxes:[{ticks: {min:200,max:2000,fontSize:7}}],
  xAxes:[{ticks:{fontSize:9}}]
  }
}
})
  
  