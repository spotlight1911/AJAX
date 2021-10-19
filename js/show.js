let loadBtn = document.getElementById('load');
loadBtn.onclick = function () {
    let xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                let respText = xhr.responseText;
                let names = JSON.parse(respText);
                let user = Object.entries(names);
                let userShow = '<table><tr><th>#</th><th>Name</th><th>Surname</th><th>Photo</th></tr><tr>';
                for(let i=0; i<user.length; i++){
                    if(i<3){
                        userShow += '<td>'+user[i][1]+'</td>';
                    } else{
                        userShow += '<td><img src="'+user[i][1]+'"></td>';
                    }
                }
                userShow += '</tr></table>';
                document.getElementById('content').innerHTML = userShow;
            } else {
                console.error('script js 8line bad response from API');
            }
        }
    };
    xhr.open('GET', '/api.php');
    xhr.send();
};