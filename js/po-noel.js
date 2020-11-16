// Fonction pour l'affichage des cadeaux
var catSetsCadeauPourElle       = document.querySelector('.cat-sets-cadeau-pour-elle');
var setsCadeauPourElle          = document.querySelector('.sets-cadeau-pour-elle');
var catSetsCadeauPourLui        = document.querySelector('.cat-sets-cadeau-pour-lui');
var setsCadeauPourLui           = document.querySelector('.sets-cadeau-pour-lui');
var catSetsCadeauPourJeunes     = document.querySelector('.cat-sets-cadeau-pour-jeunes');
var setsCadeauPourJeunes        = document.querySelector('.sets-cadeau-pour-jeunes');
var catSetsCadeauMaquillage     = document.querySelector('.cat-sets-cadeau-maquillage');
var setsCadeauMaquillage    = document.querySelector('.sets-cadeau-maquillage');

// POUR ELLE
function showSetsCadeauPourElle(){
    setsCadeauPourElle.classList.toggle('show');
    if(setsCadeauPourLui.className == 'sets-cadeau-pour-lui show'){
        setsCadeauPourLui.classList.toggle('show');
        catSetsCadeauPourLui.classList.toggle('img-small');
    };
    if(setsCadeauPourJeunes.className == 'sets-cadeau-pour-jeunes show'){
        setsCadeauPourJeunes.classList.toggle('show');
        catSetsCadeauPourJeunes.classList.toggle('img-small');
    };
    if(setsCadeauMaquillage.className == 'sets-cadeau-maquillage show'){
        setsCadeauMaquillage.classList.toggle('show');
        catSetsCadeauMaquillage.classList.toggle('img-small');
    };
    
}
catSetsCadeauPourElle.addEventListener('click', showSetsCadeauPourElle);

// POUR LUI
function showSetsCadeauPourLui(){
    setsCadeauPourLui.classList.toggle('show');
    if(setsCadeauPourElle.className == 'sets-cadeau-pour-elle show'){
        setsCadeauPourElle.classList.toggle('show');
        catSetsCadeauPourElle.classList.toggle('img-small');
    };
    if(setsCadeauPourJeunes.className == 'sets-cadeau-pour-jeunes show'){
        setsCadeauPourJeunes.classList.toggle('show');
        catSetsCadeauPourJeunes.classList.toggle('img-small');
    };
    if(setsCadeauMaquillage.className == 'sets-cadeau-maquillage show'){
        setsCadeauMaquillage.classList.toggle('show');
        catSetsCadeauMaquillage.classList.toggle('img-small');
    };
}
catSetsCadeauPourLui.addEventListener('click', showSetsCadeauPourLui);

// POUR JEUNES
function showSetsCadeauPourJeunes(){
    setsCadeauPourJeunes.classList.toggle('show');
    if(setsCadeauPourElle.className == 'sets-cadeau-pour-elle show'){
        setsCadeauPourElle.classList.toggle('show');
        catSetsCadeauPourElle.classList.toggle('img-small');
    };
    if(setsCadeauPourLui.className == 'sets-cadeau-pour-lui show'){
        setsCadeauPourLui.classList.toggle('show');
        catSetsCadeauPourLui.classList.toggle('img-small');
    };
    if(setsCadeauMaquillage.className == 'sets-cadeau-maquillage show'){
        setsCadeauMaquillage.classList.toggle('show');
        catSetsCadeauMaquillage.classList.toggle('img-small');
    };
}
catSetsCadeauPourJeunes.addEventListener('click', showSetsCadeauPourJeunes);

// MAQUILLAGE
function showSetsCadeauMaquillage(){
    setsCadeauMaquillage.classList.toggle('show');
    if(setsCadeauPourElle.className == 'sets-cadeau-pour-elle show'){
        setsCadeauPourElle.classList.toggle('show');
        catSetsCadeauPourElle.classList.toggle('img-small');
    };
    if(setsCadeauPourLui.className == 'sets-cadeau-pour-lui show'){
        setsCadeauPourLui.classList.toggle('show');
        catSetsCadeauPourLui.classList.toggle('img-small');
    };
    if(setsCadeauPourJeunes.className == 'sets-cadeau-pour-jeunes show'){
        setsCadeauPourJeunes.classList.toggle('show');
        catSetsCadeauPourJeunes.classList.toggle('img-small');
    };
}
catSetsCadeauMaquillage.addEventListener('click', showSetsCadeauMaquillage);

// Fonction pour la taille des cadeaux
var catSetsCadeauPourElle   = document.querySelector('.cat-sets-cadeau-pour-elle');
var catSetsCadeauPourLui    = document.querySelector('.cat-sets-cadeau-pour-lui');
var catSetsCadeauPourJeunes = document.querySelector('.cat-sets-cadeau-pour-jeunes');
var catSetsCadeauMaquillage = document.querySelector('.cat-sets-cadeau-maquillage');

function tailleTuileElle(){
    catSetsCadeauPourElle.classList.toggle('img-small');
}
catSetsCadeauPourElle.addEventListener('click', tailleTuileElle);

function tailleTuileLui(){
    catSetsCadeauPourLui.classList.toggle('img-small');
}
catSetsCadeauPourLui.addEventListener('click', tailleTuileLui);

function tailleTuileJeunes(){
    catSetsCadeauPourJeunes.classList.toggle('img-small');
}
catSetsCadeauPourJeunes.addEventListener('click', tailleTuileJeunes);

function tailleTuileMaquillage(){
    catSetsCadeauMaquillage.classList.toggle('img-small');
}
catSetsCadeauMaquillage.addEventListener('click', tailleTuileMaquillage);