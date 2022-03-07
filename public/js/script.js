let a = 2;
let b = 0;

let p = [5,6];
//let b = parseInt(prompt("Entrer un nombre quelconque"));

//alert(a + b);

//console.log(a + b);




//var unGens = new gens("fe",25);

class person{
    constructor(aName, anAge){
        this.name = aName;
        this.age = anAge;
    }

    getName(){
        return this.name;
    }

    getAge(){
        return this.age;
    }
}

let unePersonne = new person("fe",25);

console.log(unePersonne.getAge());


/*for (let i = 0; i < p.length; i++) {
    
    console.log(p[i]);
}

p.forEach(element => {
    console.log(element);
});


let c = 0;
while (c < p.length) {
    console.log(p[c]);
    c++;
}*/




let h1All = document.querySelectorAll('h1');

for (let i = 0; i < h1All.length; i++) {

    let h1 = h1All[i];

    h1.addEventListener('click', function(e) {
        h1.classList.toggle('red');
    })
}


let h2 = document.querySelector('h2');

h2.onkeypress = function () {
    h2.classList.toggle('red');
};


const log = document.getElementById('log');

document.addEventListener('keypress', logKey);

function logKey(e) {
  //log.textContent =`${e.code}`;
}


let actor = document.getElementById('actor');
let velocity =10;
let trans = 0;
document.addEventListener('keypress', function(e) {
  if (`${e.code}` == 'KeyA') {
      if (trans >= (-(screen.width/2))+(actor.width/2)+velocity) {
          trans -= velocity;
          actor.setAttribute("style", "transform : translate("+ trans +"px)");
          log.textContent = trans;
      }
  }else if(`${e.code}` == 'KeyD'){
      if (trans <= (screen.width/2)-(actor.width/2)-velocity) {
          trans += velocity;
          actor.setAttribute("style", "transform : translate("+ trans +"px)");
          log.textContent = trans;
      }
  }
});

function test(){
    console.log("gtf");
}




