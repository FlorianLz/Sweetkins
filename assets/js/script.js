document.body.onload = function(e){
    setTimeout(()=>{ 
        document.getElementById("loader__logo__image").classList.add("logo-rotate")
        document.getElementById("loader__logo").classList.add("loader__logo--left")
        setTimeout(()=>{ 
            document.getElementById("loader").classList.add("loader-fade")
            setTimeout(()=>{
                document.getElementById('loader').style.display = "none"
            }, 1000)
        }, 3000);
    }, 1500);
}