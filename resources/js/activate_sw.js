if('serviceWorker' in navigator){
    window.addEventListener('load', ()=>{
        navigator.serviceWorker.register('hieworks_service_worker.js').then((obj)=>{
    }).catch((err)=>{
         return err;
        })
    })
}