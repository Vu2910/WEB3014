<?php
    //Đã có biến $tours từ controller trước khi include view
?>
<h1>DAT TOUR</h1>
    <tbody>
        <?php foreach ($tours as $key => $ts) : ?>
            <tr>
                <br>
            <br>
                <td><h3>ID:<?= $ts['id'] ?>| NAME:<?= $ts['name'] ?></td>
                <td><h3>TOUR:<?= $ts['cate_name'] ?></h3></td>
                <td>
                <a href="./index.php?url=create-tour">Them</a>
                    <a href="./index.php?url=edit-tour&id=<?= $ts['id'] ?>">Sua</a>
                   
                    <a onclick="return confirm('Bạn có muốn xóa?')" href="./index.php?url=destroy-tour&id=<?= $ts['id'] ?>">Xoa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>