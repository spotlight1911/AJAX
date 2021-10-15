let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            //main action
            let respText = xhr.responseText
            let names = JSON.parse(respText);
            document.getElementById('content').innerHTML = names.reduce(function(total, name){
                return total + '<li>'+name+'</li>';
            }, '<ol>')+'</ol>';
        } else {
            console.error('script js 8line bad response from API');
        }
    }
};