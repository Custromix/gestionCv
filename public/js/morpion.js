
let choosePlayer = true;

function getPlayerList(){
    let Players = document.getElementsByName("gamer");
    return Players;
}

function setTitle(){
    let printPlayer = document.getElementsByTagName("h2")
    let gamer = getPlayerList();

    if (choosePlayer){
        printPlayer[0].innerHTML = "C'est au tour de <strong>" + gamer[0].value +"</strong>";
    }else{
        printPlayer[0].innerHTML = "C'est au tour de <strong>" + gamer[1].value +"</strong>";
    }
}


function lunchGame(){

    let gamer = getPlayerList();

    let c = 0;
    for (let i = 0; i < gamer.length; i++) {
        if (gamer[i].value != ""){
            c++;
        }
    }

    if (c == 2){
        let divStart = document.getElementById("start");
        divStart.setAttribute("class", "hidden");

        let divCentral = document.getElementById("central");
        divCentral.setAttribute("class", "visible");
    }else{
        alert("Veuillez remplir tous les champs !")
    }
    setTitle();
}

function setCase(id){
    let caseGame = document.getElementById(id);

    if (choosePlayer){
        caseGame.innerHTML = "<span class=\"attribut\">X</span>";
        caseGame.setAttribute("onclick", "");
        caseGame.setAttribute("name", "x");
        choosePlayer = false;
        setTitle();
        checkEnd();

    }else{
        caseGame.innerHTML = "<span class=\"attribut\">O</span>";
        caseGame.removeAttribute("onclick");
        caseGame.setAttribute("name", "o");
        choosePlayer = true;
        setTitle();
        checkEnd();

    }
}

function checkEnd(){
    let allId = new Array();
    let allX = document.getElementsByName("x");
    let allO = document.getElementsByName("o");
    console.clear();

    if (!choosePlayer){
        for (let i = 0; i < allX.length; i++) {

            allId[i] = parseInt(allX[i].getAttribute("id"));
        }
    }else{
        for (let i = 0; i < allO.length; i++) {

            allId[i] = parseInt(allO[i].getAttribute("id"));
        }
    }


    checkWin(allId,0,1,2);
    checkWin(allId,3,4,5);
    checkWin(allId,6,7,8);
    checkWin(allId,0,3,6);
    checkWin(allId,1,4,7);
    checkWin(allId,2,5,8);
    checkWin(allId,0,4,8);
    checkWin(allId,2,4,6);


}



function checkWin(allId,fId, sId, tId){
    if (allId.includes(fId) && allId.includes(sId) && allId.includes(tId)){
        let printPlayer = document.getElementsByTagName("h2");
        let gamer = getPlayerList();
        let fCase = document.getElementById(fId).getElementsByTagName('span');
        let sCase = document.getElementById(sId).getElementsByTagName('span');
        let tCase = document.getElementById(tId).getElementsByTagName('span');

        fCase[0].style.color = "red";
        sCase[0].style.color = "red";
        tCase[0].style.color = "red";

        endGame();

        if (!choosePlayer){
            printPlayer[0].innerHTML = "<strong>" + gamer[0].value +"</strong> a remporté la partie";
        }else{
            printPlayer[0].innerHTML = "<strong>" + gamer[1].value +"</strong> a remporté la partie";
        }
    }
}

function endGame(){
    let oCase = document.getElementsByClassName("case");
    for (let i = 0; i < oCase.length; i++) {
        oCase[i].removeAttribute("onclick");
    }
}


function reloadGame(){
    let gamer = getPlayerList();
    let oCase = document.getElementsByClassName("case");
    let span = document.getElementsByTagName("span");
    let countSpan = span.length;
    for (let i = 0; i < countSpan; i++) {
        span[0].remove();
    }
    for (let i = 0; i < oCase.length; i++) {
        oCase[i].setAttribute("onclick", "setCase("+ i +")");
        oCase[i].removeAttribute("name");
    }
    choosePlayer = true;
    setTitle();
}


