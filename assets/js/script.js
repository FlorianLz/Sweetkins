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