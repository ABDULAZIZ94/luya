<h1>Detail</h1>
<table class="striped">
<? foreach ($data as $key => $value): ?>
<tr>
    <td style="width:20%"><?= $key; ?></td>
    <td style="width:80%"><?= $value; ?></td>
</tr>
<? endforeach; ?>
</table>