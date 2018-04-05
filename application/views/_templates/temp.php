
<div class = "monster">
<p class = "name">Monster name</p>
<p>HP:<span class = "currenthp">100</span>/<span class = "max hp">100</span></p>
<p>Resistance Value:<span class ="resistance Value">6</span>
<ul>
<il class = "trust">trust</il>
<il>bash</il>
<il>trzy</il>
<il>cztery</il>
</ul>
</div>
<div id="banner-message">
  <p>Hello World</p>
  <button>Change color</button>
</div>

<script>
var list = $("il");
var banner = $("#banner-message")
var button = $("button")
var trust = $(".trust");
var currHp = $(".currenthp");
/*trust.on("click",function(){  
  currHp.text("4");
});
*/
list.on("click",function(){
    var damage =  Math.floor((Math.random() * 10) + 1)
    var  hp = currHp.text();
  if((hp-damage)>0){
        currHp.text(hp-damage);
   } else {
    currHp.text("0");
   }
})

//button.on("click",alert("kliknieto"));
// handle click and add class
button.on("click", function(){
  banner.toggleClass("alt")
})
</script>
