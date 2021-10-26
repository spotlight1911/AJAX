let xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
        if (xhr.status === 200) {
            //main action
            let respText = xhr.responseText
            let users = JSON.parse(respText);
            let userDbId = [];
            let i = 0;
            let content = '<tr><th>№</th><th>Имя</th><th>фамилия</th><th>Фото</th></tr>';
            for (const [key, value] of Object.entries(users)) {
                userDbId[i]=value['id'];
                i++;
                content += '<tr><td>' + value['id'] + '</td>' +
                    '<td>' + value['name'] +'</td>'+
                    '<td>' + value['surname'] +'</td>'+
                    '<td><img src=" ' + value['photo'] +'" alt = "photo"/></td>'+
                    '<td><button name="create" id="create_'+value['id']+'">изменить</button></td>'+
                    // '<td><form method="get"><button name="create_'+value['id']+'" value="'+value['id']+'">изменить</button></form></td>'+
                    '<td><button name="del" value="'+value['id']+'">удалить</button></td>'+
                    '</tr>'
            }

            document.getElementById('content').innerHTML = content;
            console.log(document.getElementsByName('create'), userDbId);
            let editBtn = document.getElementById('create_1');
            editBtn.onclick = function (e) {
                e.preventDefault();
                let xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            let respText = xhr.responseText;
                            let names = JSON.parse(respText);
                            console.log(names);
                            let user = Object.entries(names);
                            let userShow = '<form method="get">' +
                            '<input type="text" name="name" value="'+user[0][1]+'" readonly>' +
                            '<input type="text" name="name" value="'+user[1][1]+'">' +
                            '<input type="text" name="surname" value="'+user[2][1]+'">' +
                            '<input type="text" name="photo" value="'+user[3][1]+'" readonly>' +
                            '<input type="file" name="photo" value="'+user[3][1]+'">';
                            document.getElementById('content').innerHTML = userShow;
                        } else {
                            console.error('script js 8line bad response from API');
                        }
                    }
                };
                xhr.open('GET', '/api_edit.php');
                xhr.send();
            };
        } else {
            console.error('script js 8line bad response from API');
        }
    }
};
xhr.open('GET', '/api.php');
xhr.send();