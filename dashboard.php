<?php include('header.php'); ?>
<?php // print_r($articels);
?>

<style>
    th,td{
        padding-left: 50px;
        padding-right: 50px;
    }
</style>
<div class="container" style="margin-top: 50px">
    <div class="table">
        <table >
            <thead>
            <tr >
                <th>ID</th>
                <th>Artical Title</th>
                <th>Edit</th>
                <th>Delete</th>
                
            </tr>
            </thead>

            <tbody>
                <!-- make data dynamic -->
       <?php if (is_array($articels) && count($articels)): ?>
    <?php foreach ($articels as $key => $value): ?>
        <tr>
            <td><?= $key + 1 ?></td>
            <td><?= $value->artical_title ?></td>
            <td><a href="#" class="btn btn-primary">Edit</a></td>
            <td><a href="#" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="4">Not found</td>
    </tr>
<?php endif; ?>


            </tbody>
        </table>

    </div>
</div>

    <?php include('footer.php'); ?> 