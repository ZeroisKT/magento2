var config = {
    paths:{
        "jquery" : " https://code.jquery.com/jquery-3.6.3.min.js",
        "jquery.bootstrap":"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    },
    shim:{
        'jquery.bootstrap':
        {
            "bootstrap" : { "deps" :['jquery'] }
        }
    }
};