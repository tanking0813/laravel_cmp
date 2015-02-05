<li class="col-xs-12" style="display:inline-block;"> 
	<table class="table table-condensed">
      <thead>
        <tr>
          <th>商品</th>
          <th>金额</th>
          <th>发布11时间</th>
          <th>过期时间</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody id="salebrand">
    @foreach($datas as $data)
        <tr id='data_{{ $data->id }}'>
          <td valign="middle"> 
              <a href="" class="fl"><img src="../../images/uCenter/nail.jpg" width="80" height="80"></a>
              <div class="fl">
                   <a href=""><span class="orange"> [{{$datas->goodscate}}] </span>{{ $data->title }}</a>
                   <p>编码：150120691011</p> 
              </div>
          </td>
          <td><span class="orange">￥{{ $data->price }}</span></td>
          <td>{{ $data->created_at }}</td>
          <td>2014-12-26</td>
           <td>
           		<a  class="icon icon-eye-open tip0"  data-toggle="tooltip" data-placement="top" title="查看"></a> | 
           		<a href="{{ route('member.publish.saler.edit',[$data->id,$datas->goodscate]) }}" class="icon  icon-edit tip0" data-toggle="tooltip" data-placement="top" title="编辑"></a>
          	<br />
          		<a onclick="downGoods({{ $data->id }});" class="icon  icon-chevron-down tip0" data-toggle="tooltip" data-placement="top" title="下架"></a> | 
          		<a onclick="deleteGoods({{ $data->id }});" class="icon icon-remove tip0"  data-toggle="tooltip" data-placement="top" title="删除"></a>
          </td>
        </tr>
    @endforeach
      		<tfoot>
      			<tr> <td cols='5' > {{ $datas->links() }} </td></tr>
      		</tfoot>
      </tbody>
    </table>
</li>