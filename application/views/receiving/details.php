<h1>Product Details</h1>

<!--Still need an action here for form submission-->
<table class="table">
    <form action="">
        <tr>
            <th>Product ID</th>
            <td><?= $ingredient['id'] ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?= $ingredient['name'] ?></td>
        </tr>
        <tr>
            <th>Price</th>
            <td><?= $ingredient['price'] ?></td>
        </tr>
        <tr>
            <th>Category</th>
            <td><?= $ingredient['type'] ?></td>
        </tr>
        <tr>
            <th>Quantity per</th>
            <td><?= $ingredient['perBox'] ?></td>
        </tr>
        <tr>
            <th>Quantity received:</th>
            <td><input name={name} type="number" min="0" max="50" step="1"></td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-primary" type="submit" value="Receive Order"><td>
        </tr>
    </form>
</table>
<button onclick="location.href='<?php echo base_url()?>receiving'">Return</button>
