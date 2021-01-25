"use strict";
let parts = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
let installedTrueParts = [];


function shuffle(arr) {
    let result = [];
    while (arr.length > 0) {
        let random = getRandomInt(0, arr.length - 1);
        let part = arr.splice(random, 1)[0];
        result.push(part);
    }
    return result;

}

let result = shuffle(parts);

function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

let cards = document.querySelector(".cards");
for (let i = 0; i < result.length; i++) {
    let part = document.createElement('img');
    part.className = `card a${result[i]}`;
    part.src = `/EDUCATION/testDiplom/images/${catalog}/part${result[i]}.png`;
    cards.appendChild(part);
}

let cardsImage = document.querySelectorAll(".card");
for (let card of cardsImage) {
    card.addEventListener("mousedown", dragCard);
}


function dragCard(event) {
    let currentDroppable = null;

    event.preventDefault();//отключает призрак
    let card = this; //event.currentTarget

    let shiftX = event.clientX - card.getBoundingClientRect().left;
    let shiftY = event.clientY - card.getBoundingClientRect().top;

    card.style.position = "absolute";
    card.style.zIndex = '9999';
    document.body.append(card);

    let belowElement = null;

    moveAt(event.pageX, event.pageY);

    function moveAt(pageX, pageY) {
        card.style.top = (pageY - shiftY) + "px";
        card.style.left = (pageX - shiftX) + "px";
    }

    function onMouseMove(event) {
        moveAt(event.pageX, event.pageY);

        card.hidden = true;
        belowElement = document.elementFromPoint(event.clientX, event.clientY);
        card.hidden = false;

        if (!belowElement)
            return;

        let droppableBelow = belowElement.closest('.box .col');

        if (currentDroppable !== droppableBelow) {
            if (currentDroppable) {
                leaveDroppable(currentDroppable);
            }

            currentDroppable = droppableBelow;

            if (currentDroppable) {
                enterDroppable(currentDroppable);
            }
        }
    }

    document.addEventListener("mousemove", onMouseMove);

    card.onmouseup = function handler(event) {
        document.removeEventListener("mousemove", onMouseMove);
        card.onmouseup = null;
        
        card.hidden = true;
        belowElement = document.elementFromPoint(event.clientX, event.clientY);
        card.hidden = false;
        
        if (!belowElement)
            return;
        
        let droppableBelow = belowElement.closest('.box .col');
        
        let cardNumber = card.className.split(' ')[1];
        
        deleteTruePart(cardNumber);
        
        if (!droppableBelow) {
            droppableBelow = document.querySelector('.cards');
        } else {        
            if ((droppableBelow.className.split(' ')).includes(cardNumber)) {
                
                installedTrueParts.push(cardNumber);
                if (installedTrueParts.length === result.length) {
                    puzzleMade();
                }
            }
        }
        
        card.style.position = "static";
        droppableBelow.append(card);

    };

    function leaveDroppable(elem) {
        elem.style.backgroundColor = 'white';
    }

    function enterDroppable(elem) {
        elem.style.backgroundColor = 'pink';
    }

    function deleteTruePart(cardNumber) {
        let alreadyInstalledPos = installedTrueParts.indexOf(cardNumber);
        
        if (alreadyInstalledPos >= 0) {
            installedTrueParts.splice(alreadyInstalledPos);
        }
    }
    
    function puzzleMade() {
        document.querySelector(".btn").textContent = 'Повторим?!';
        document.querySelector("h1").textContent = "Ура! Картинка собрана!!";
        document.querySelector("h1").style.color = "red";
        document.querySelector(".dino").style.display = "none";
    }

    card.ondragstart = function () {
        return false;
    };
}

let button = document.querySelector(".btn");
button.onclick = () => {
    window.location.reload();
};

