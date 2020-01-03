<table border="1"> 
	<thead>
            <tr>
            	<th>ID</th>
                <th>Post Name</th>
                <th>Created At</th>
                <th>Body</th>
                <th>CheckOut</th>
               
            
            </tr>
        </thead>
<tbody  id="example" class="table table-striped table-bordered" style="width:100%">
	<?php   foreach($posts as $post): ?>

			<tr>
				<td><?php echo $post['id']; ?></td>
				<td><?php echo $post['title']; ?></td>
				<td><?php echo $post['created_at'] ?> </td>
				<td> <?php echo $post['body'] ?></td>
				<td> <a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More </a></td>
			</tr>

	<?php endforeach; ?>
	

</tbody>
 </table>