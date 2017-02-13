<?php if ( isset($results) && is_array($results) && count($results) > 0): ?>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Data One</th>
                <th>Data Two</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($results as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['dataone']; ?></td>
                <td><?php echo $row['datatwo']; ?></td> 
                 </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No data to display.</p>
<?php endif; ?>