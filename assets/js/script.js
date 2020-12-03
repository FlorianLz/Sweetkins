document.body.onload = function(e){
    setTimeout(()=>{ 
        let loader = document.getElementById("loader__logo__image");
        let logo = document.getElementById("loader__logo")
        if(loader && logo){
            document.getElementById("loader__logo__image").classList.add("logo-rotate")
            document.getElementById("loader__logo").classList.add("loader__logo--left")    
            setTimeout(()=>{ 
                document.getElementById("loader").classList.add("loader-fade")
                setTimeout(()=>{
                    document.getElementById('loader').style.display = "none"
                }, 1000)
            }, 3000);
        }
    }, 1500);
}

document.querySelector('#main-nav-burger').addEventListener('click', (e)=>{
    console.log('clic')
    const nav = document.querySelector('#main-nav');
    const btn = e.target;
    if(btn.getAttribute("aria-expanded") === "false"){
        btn.setAttribute("aria-expanded", "true")
        nav.classList.add("is-active")
        document.getElementById('main-header-logo').classList.add('devant');
    }else{
        if(btn.getAttribute("aria-expanded") === "true"){
            btn.setAttribute("aria-expanded", "false")
            nav.classList.remove("is-active")
            document.getElementById('main-header-logo').classList.remove('devant');

        }
    }
    
})

function inc(element) {
    let el = document.querySelector(`[name="${element}"]`);
    let nb = document.querySelector(`span[data-nb="${element}"]`);
    el.value = parseInt(el.value) + 1;
    if(el.value > 0){
        document.querySelector(`button[data-tag="${element}"]`).style.background = '#FF7401';
        nb.innerHTML = el.value;
    }
    majprix()
}
  
function dec(element) {
    let el = document.querySelector(`[name="${element}"]`);
    let nb = document.querySelector(`span[data-nb="${element}"]`);
    if (parseInt(el.value) > 0) {
        el.value = parseInt(el.value) - 1;
        nb.innerHTML = el.value;
    }
    if(el.value == 0){
        document.querySelector(`button[data-tag="${element}"]`).style.background = "#E9E2D1";
    }
    majprix()
}

function majprix(){
    let nbchauvesouris = parseInt(document.querySelector(`span[data-nb="chauve-souris"]`).innerHTML);
    let nbfantome = document.querySelector(`span[data-nb="fantome"]`).innerHTML;
    let nbaraignee = document.querySelector(`span[data-nb="araignee"]`).innerHTML;
    let nbzombie = document.querySelector(`span[data-nb="zombie"]`).innerHTML;
    let nbsquelette = document.querySelector(`span[data-nb="squelette"]`).innerHTML;

    let total = (nbchauvesouris*0.05) + (nbfantome*0.07) + (nbaraignee*0.06) + (nbzombie*0.05) + (nbsquelette*0.12);
    document.querySelector(`span[data-tag="total"]`).innerHTML = parseFloat(total).toFixed(2);
}