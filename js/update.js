let loadBtn = document.getElementById('save');
loadBtn.onclick = function (){
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {


            } else {
                console.error('script js 8line bad response from API');
            }
        }
    };
    xhr.open('GET', '/api.php');
    xhr.send();
}