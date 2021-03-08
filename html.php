<?php 
$url = "https://dev.farizdotid.com/api/daerahindonesia/provinsi";
$data = file_get_contents($url);
$array = json_decode($data,true)['provinsi'];
?>
<style>
    table {
        border-collapse: collapse;
        text-align: left;
        margin:auto;
        margin-top: 20px;
    }
</style>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nama Propinsi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $nomor = 1;
        foreach($array as $k => $v){
            ?>
            <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $v['nama']?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>

