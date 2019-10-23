<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];
?>
<table border="1" cellspacing="0" cellpadding="6">
    <tr>
        <th>Tên khóa học</th>
    </tr>
    <?php foreach($arrs as $key => $value): ?>
        <tr>
            <td>
                <?php echo $value; ?>
                <!--            --><?//= $value; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>