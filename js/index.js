let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            //main action
            let respText = xhr.responseText
            let users = JSON.parse(respText);
            let content = '<tr><th>№</th><th>Имя</th><th>фамилия</th><th>Фото</th></tr>';
            for (const [key, value] of Object.entries(users)) {
                content += '<tr><td>' + value['id'] + '</td>' +
                    '<td>' + value['name'] +'</td>'+
                    '<td>' + value['surname'] +'</td>'+
                    '<td><img src=" ' + value['photo'] +'" alt = "photo"/></td>'+
                    '<td><form method="get"><button name="create_'+value['id']+'" value="'+value['id']+'">изменить</button></form></td>'+
                    '<td><button name="del" value="'+value['id']+'">удалить</button></td>'+
                    '</tr>'
            }
            document.getElementById('content').innerHTML = content;

        } else {
            console.error('script js 8line bad response from API');
        }
    }
};
xhr.open('GET', '/api.php');
xhr.send();