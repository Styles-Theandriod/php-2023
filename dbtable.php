<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>

    <?php while (＄row = mysqli_fetch_array(＄results)) { ?>
        <tr>
            <td><?php echo ＄row['name']; ?></td>
            <td><?php echo ＄row['address']; ?></td>
            <td>
                <a href="index.php?edit=<?php echo ＄row['id']; ?>" class="edit_btn">Edit</a>
            </td>
            <td>
                <a href="server.php?del=<?php echo ＄row['id']; ?>" class="del_btn">Delete</a>
            </td>
        </tr>
     } ?>
</table>

<form>