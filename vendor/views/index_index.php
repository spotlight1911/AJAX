<style>
    *{
        margin: 5px;
    }
    table,tr,th,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    .add{
        display: block;
    }
</style>
<h2>Users</h2>
<table>
    <tr>
        <th>№</th>
        <th>Name</th>
        <th>Surname</th>
        <th>Pfoto</th>
        <th>Create</th>
        <th>Delete</th>
    </tr>
    <?php if(count($newsAll)>0):?>
    <?php foreach ($newsAll as $news):?>
    <tr>
        <td><?=$news['id']?></td>
        <td><?=$news['title']?></td>
        <td><?=$news['text']?></td>
        <td><?=$news['createdate']?></td>
        <td><?=$news['updatedate']?></td>
        <td><?=$news['author']?></td>
        <td><form action="/news/edit" method="get">
                <input type="hidden" name="id" value="<?= $news['id']?>">
                <input type="submit" value="edit" >
            </form>
        </td>
        <?php endforeach;?>
        <?php endif;?>
    </tr>
</table>
<form action="">
    <input type="submit" value="Add user">
</form>
<form class="add">
    <label>Enter name:
        <input type="text" name="name"></label>
    <label>Enter surname:
        <input type="text" name="surname"></label>
    <label>Select pfoto:
        <input type="file" name="pfoto"></label>
</form>