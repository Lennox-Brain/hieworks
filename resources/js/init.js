(function(){
    tinymce.init({
        selector: '#description',
        plugins: "lists, advlist, link, autolink autosave",        
        menubar: false,
        toolbar:  `| 
                    'italic backcolor | alignleft aligncenter ' 
                    'alignright alignjustify | bullist numlist outdent indent | ' 
                    'italic underline blockquote bold | link | removeformat restoredraft`, 
                    
        allow_unsafe_link_target: true,
        link_default_protocol: "https",  
        force_br_newlines : true,
        force_p_newlines : false, 
        forced_root_block : ''  
    })


    tinymce.init({
        selector: '#article-description',
        plugins: "lists, advlist, link, autolink image imagetools autosave",        
        menubar: false,
        toolbar:  `| 
                    'italic backcolor | alignleft aligncenter ' 
                    'alignright alignjustify | bullist numlist outdent indent | ' 
                    'italic underline blockquote bold | link image | removeformat restoredraft`, 
                    
        imagetools_cors_hosts: ['127.0.0.1', 'hieworks.com'],
        // imagetools_proxy: 'proxy.php',
        allow_unsafe_link_target: true,
        link_default_protocol: "https",
        force_br_newlines : true,
        force_p_newlines : false, 
        forced_root_block : ''  
    })
   
})()


// toolbar:  `undo redo | formatselect | 
// 'bold italic backcolor | alignleft aligncenter ' 
// 'alignright alignjustify | bullist numlist outdent indent | ' 
// 'removeformat | underline`, 

// formats: {
//     removeformat: [
//       {
//         selector: 'b,strong,em,i,font,u,strike,sub,sup,dfn,code,samp,kbd,var,cite,mark,q,del,ins',
//         remove: 'all',
//         split: true,
//         block_expand: true,
//         expand: false,
//         deep: true
//       },
//       { selector: 'span', attributes: ['style', 'class'], remove: 'empty', split: true, expand: false, deep: true },
//       { selector: '*', attributes: ['style', 'class'], split: false, expand: false, deep: true }
//     ]
//   }