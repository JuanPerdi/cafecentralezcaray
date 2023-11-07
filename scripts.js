//script para las flechas del centenario
window.addEventListener('load',function(){
    var flechas=document.getElementsByName('flecha');
    for(let i=0;i<flechas.length;i++){
        flechas[i].addEventListener('click',function(){
            if(flechas[i].className=='bi bi-arrow-down-square-fill'){
                flechas[i].className='bi bi-arrow-up-square-fill';
                document.getElementById('row'+flechas[i].id).style.display='none';
            }
            else{
                flechas[i].className='bi bi-arrow-down-square-fill';
                document.getElementById('row'+flechas[i].id).style.display='';
            }
        })
    }
})




