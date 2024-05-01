<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #eaf9c5;
    }
</style>
<style>
    .center {
        background-color: aliceblue;
        padding: 20px;
        width: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50vh;
        transition: all 0.5s ease;
        border-radius: 10px;
    }
    .center:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

    h2 {
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 30px;
}
    button:hover {
        background-color: green ;
    }
</style>


<script>
    $(document).ready(function(){
        $("form").hide(); // Sembunyikan form terlebih dahulu
        $("form").fadeIn(2500); // Tampilkan form dengan efek fadeIn selama 2 detik
    });
</script>

<div class="center">
    <form action="<?php echo site_url('menu/store'); ?>" method="post" style="margin-top: 20px;">
    <h2>Tambah Menu Makanan</h2>
        <label for="name" style="display: block; margin-bottom: 5px; font-size:30px;">Nama</label>
        <input type="text" name="name" required style="font-size:20px; padding: 10px; height:50px; width: 300px; border: 1px solid #ccc; border-radius: 10px;">
        <label for="price" style="display: block; margin-top: 10px; margin-bottom: 10px;font-size:30px;">Harga</label>
        <input type="number" name="price" required style="font-size:20px; padding: 10px; width: 300px; height:50px; border: 1px solid #ccc; border-radius: 10px;"><br><br>
        <button type="submit" style=" font-size:25px; padding: 10px 20px; height:70px; width:300px; background-color: #44b2ff; color: azure; border: none; border-radius: 10px; cursor: pointer;">Simpan</button>
    </form>
</div>