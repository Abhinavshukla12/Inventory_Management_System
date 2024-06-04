<?= $this->extend('IMSViews/Layout/default') ?>

<?= $this->section('content') ?>

<div class="feature-container">
    <h1>Features</h1>
    <button onclick="location.href='<?= base_url('IMS/product_information') ?>';" type="button" class="btn btn-primary">Product Information Management</button>
    <button onclick="location.href='<?= base_url('IMS/order') ?>';" type="button" class="btn btn-primary">Order Management</button>
    <button onclick="location.href='<?= base_url('IMS/supplier') ?>';" type="button" class="btn btn-primary">Supplier Management</button>
    <button onclick="location.href='<?= base_url('IMS/purchase_order') ?>';" type="button" class="btn btn-primary">Purchase Order Management</button>
    <button onclick="location.href='<?= base_url('IMS/sales_order') ?>';" type="button" class="btn btn-primary">Sales Order Management</button>
    <button onclick="location.href='<?= base_url('IMS/warehouse') ?>';" type="button" class="btn btn-primary">Warehouse Management</button>
    <button onclick="location.href='<?= base_url('IMS/return_and_refund') ?>';" type="button" class="btn btn-primary">Return and Refund Management</button>
</div>
<?= $this->endSection() ?>