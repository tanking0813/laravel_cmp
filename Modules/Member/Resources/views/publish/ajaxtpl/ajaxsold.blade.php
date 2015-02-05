<thead>
	<tr>
		<th>商品</th>
		<th>金额</th>
		<th>发布时间</th>
		<th>过期时间</th>
		<th>操作</th>
	</tr>
</thead>
<tbody>
<?php 
	foreach($data as $d){
?>
	<tr id="data_<?php echo  $d->id; ?>" >
	  <td valign="middle"><a href=""><img src="../images/uCenter/nail.jpg" width="80" height="80"/><?php echo $d->title ; ?></a></td>
	  <td>9999元11</td>
	  <td><?php echo $d->created_at; ?></td>
	  <td><?php echo $d->validity_date; ?></td>
	   <td><i class="icon icon-eye-open tip0"  data-toggle="tooltip" data-placement="top" title="查看"></i> | 
	   		<a href="<?php echo route('member.publish.saler.edit',[$d->id,$data->goodscate]);  ?>" class="icon  icon-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
	  	<br />
<i class="icon icon-chevron-up tip0" onclick="upGoods(<?php echo  $d->id; ?>);"  data-toggle="tooltip" data-placement="top" title="上架"></i> |	  		
<i class="icon icon-remove tip0" onclick="deleteGoods(<?php echo  $d->id; ?>);"  data-toggle="tooltip" data-placement="top" title="删除"></i>
	  </td>
	</tr>
<?php
	}
?>
</tbody>
<tfoot>
	<tr>
		<td cols='5' > <?php echo $data->links('page.page'); ?></td>
	</tr>
</tfoot>
