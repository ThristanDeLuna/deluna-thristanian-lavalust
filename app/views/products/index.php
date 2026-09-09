<h1>📦 Product List</h1>
<a href="<?= site_url('products/create') ?>" class="btn-add">➕ Add Product</a>
<table>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($products as $p): ?>
    <tr>
        <td><?= html_escape($p['product_name']) ?></td>
        <td>$<?= number_format($p['price'], 2) ?></td>
        <td><?= html_escape($p['quantity']) ?></td>
        <td>
            <a href="<?= site_url('products/edit/' . $p['id']) ?>" class="btn-edit">✏️ Edit</a>
            <a href="<?= site_url('products/delete/' . $p['id']) ?>" class="btn-delete" onclick="return confirm('Delete this product?')">🗑️ Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>