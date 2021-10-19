let loadBtn = document.getElementById('add');
loadBtn.onclick = function (){
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                //main action
                let respText = xhr.responseText
                let users = JSON.parse(respText);
                let content = '<form method="get">' +
                    '<input type="text" name="name" id="new_name">' +
                    '<input type="text" name="surname" id="new_surname">' +
                    '<input type="file" name="photo" id="new_photo">'+
                    '<input type="submit" value="добавить" id="save">'+
                    '</form>';
                console.log(content);
                document.getElementById('add_user').innerHTML = content;

            } else {
                console.error('script js 8line bad response from API');
            }
        }
    };
    xhr.open('GET', '/api.php');
    xhr.send();
}
