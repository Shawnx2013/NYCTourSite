var ind = 0;
smallshow(ind);
sautomatic();
           
function addsmallShow(n){
    smallshow(ind += n);
}
            
function smallshow(n){
    var i;
    var x = document.getElementsByClassName("smallslides");
    if(n > x.length){
        ind = 1;
    }
    if(n < 1){
        ind = x.length;
    }
    for(i=0;i<x.length;i++){
        x[i].style.display = "none";
    }
    x[ind-1].style.display = "block";
}
            
function sautomatic(){
    var i;
    var x = document.getElementsByClassName("smallslides");
    for(i=0;i<x.length;i++){
        x[i].style.display = "none";
    }
    ind++;
    if(ind > x.length){
        ind = 1;
    }
    x[ind-1].style.display = "block";
    setTimeout(sautomatic, 10000); //every ten seconds
}
//setInterval(automatic, 2000);
