
<div class ="encounter">
    <div class = "monster">
        <p class = "name">Monster name</p>
        <p>HP:<span class = "currenthp">100</span>/<span class = "maxhp">100</span></p>
        <p>Resistance Value:<span class ="resistance Value">6</span>
        <ul>
            <li class = "trust">trust</li>
            <li>bash</li>
            <li>trzy</li>
            <li>cztery</li>
        </ul>
        <button id = "reset">Reset</button>
    </div>
</div>
<script>
var list = $("li");
var banner = $("#banner-message")
var button = $("button")
var trust = $(".trust");
var currHp = $(".currenthp");
var reset = $("#reset");
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

reset.on("click", function(){
  currHp.text("100");
})

//button.on("click",alert("kliknieto"));
// handle click and add class
button.on("click", function(){
  banner.toggleClass("alt")
})
</script>