<h1>Menu List</h1>

<table>
    <tr>
        <th>Nama</th>
        <th>Harga</th>
        <th>Tindakan</th>
    </tr>
    <?php foreach ($menu as $menu_item): ?>
    <tr>
        <td><?php echo $menu_item['name']; ?></td>
        <td><?php echo $menu_item['price']; ?></td>
        <td>
            <a href="<?php echo site_url('menu/edit/'.$menu_item['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('menu/delete/'.$menu_item['id']); ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table><br>
<div id="menulist" >
    <button>
        <a href="<?php echo site_url('menu/create'); ?>" style=" font-size:25px; text-decoration: none; color: white;">Tambahkan Menu Baru</a> 
    </button>
</div>
<style>
    h1 {
        font-size: 40px;
    }
    #menulist {
        margin-bottom: 20px;

    }
    button {
        border-radius:10px;
        background-color: #44b2ff;
        color: white;
        padding: 10px 20px;
        border: none; 
        cursor: pointer;
    }

    button:hover {
    background-color: blue;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        font-size: 25px;
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    tr:hover {
        background-color: #bedfd4;
    }

    th {
        background-color: #dba502;
        color: white;
    }
</style>