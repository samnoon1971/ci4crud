<!DOCTYPE html>
<html>
    <head>
        <title>User List</title>
    </head>
    <body>
        <h1>User List</h1>
        <?php if(!empty($result)):?>
            <table border="1">
            <tr>
                <th>firstname</th>
                <th>lastname</th>
                <th>email</th>
                <th>password</th>
            </tr>
            <?php foreach($result as $user):?>
            <tr>
                <td><?= $user->firstname;?></td>
                <td><?= $user->lastname;?></td>
                <td><?= $user->email;?></td>
                <td><?= $user->password;?></td>
            </tr>
            <?php endforeach;?>
            
        </table>
        <?php else:?>
        <h1>Sorry! No records FOund</h1>
        <?php endif;?>
        
        
    </body>
</html>