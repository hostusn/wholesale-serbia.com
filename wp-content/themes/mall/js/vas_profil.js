let url_string = window.location.href;
let url = new URL(url_string);
let package_type = url.searchParams.get("value");

    //let values = "Basic";
    // get list of radio buttons with name 'your-profile'
    var radios = document.getElementsByName('your-profile');

    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        var r = radios[i]; // current radio button
            if ( r.value === package_type ) { 
                r.checked = true; // set checked
            } 
    }