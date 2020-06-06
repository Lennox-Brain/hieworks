

const version = 'v1'
// install event 
self.addEventListener('install', ()=>{

})

//activate event
self.addEventListener('activate', e=>{
    e.waitUntil(
        caches.keys().then(versions =>{
            return Promise.all(versions.map(cacheObj =>{
                if(cacheObj !== version){
                    return caches.delete(cacheObj);
                }
            }))
        })
    )
   
})



// fetch event 
self.addEventListener('fetch', e =>{
    e.respondWith(
        fetch(e.request)
        .then(response => {
            const copy = response.clone();
            caches.open(version)
            .then(cache => cache.put(e.request, copy) );
            return response;
        }).catch(err =>caches.match(e.request).then(res => res) )
    )
})




