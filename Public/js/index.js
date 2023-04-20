
//table ask leave
//table planning
//table conge
document.addEventListener('DOMContentLoaded',function(){
    loadHTMLTableleave([]);
    loadHTMLTableplanning([]);
    loadHTMLTableagent([]);
})
function loadHTMLTableleave(data){
    const table = document.querySelector('table tbody');
    if(data.length === 0){
        table.innerHTML = "<tr><td class ='no-data' colspan='6'>Pas de données</td></tr>";
    }
}
function loadHTMLTableplanning(data){
    const table = document.querySelector('table tbody');
    if(data.length === 0){
        table.innerHTML = "<tr><td class ='no-data' colspan='7'>Pas de données</td></tr>";
    }
}
function loadHTMLTableagent(data){
    const table = document.querySelector('table tbody');
    if(data.length === 0){
        table.innerHTML = "<tr><td class ='no-data' colspan='10'>Pas de données</td></tr>";
    }
}

// window call
const conge = document.querySelector('.leave');
conge.addEventListener('click',fenetre)
function fenetre(){
    window.open('/home/conge', 'mozillaWindow', 'left=300,top=150,width=850,height=500');
    
}
const planning = document.querySelector('.planning');
planning.addEventListener('click',fenetreplanning)
function fenetreplanning(){
    window.open('/home/planning', 'mozillaWindow', 'left=300,top=150,width=850,height=500');
   
}
const agent = document.querySelector('.agent');
agent.addEventListener('click',fenetreagent)
function fenetreagent(){
    window.open('/home/agent', 'mozillaWindow', 'left=300,top=150,width=850,height=500');
    
}
