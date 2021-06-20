<table class="table table-success table-striped">
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Địa chỉ</th>
        <th>Số tiền</th>
    </tr>
    <?php foreach ($data as $key => $item): ?>
        <tr>
            <td><?php echo $key + 1 ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['address'] ?></td>
            <td><?php echo $item['denominations'] ?></td>
        </tr>
    <?php endforeach; ?>
    <button onclick="goBack()" class="btn btn-success">Trở lại</button>
</table>
<script>
    function goBack() {
        window.history.back();
    }
</script>