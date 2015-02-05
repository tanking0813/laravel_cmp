<?php
/*
 *消息管理
 */
?>
<div class="row">
    <div class="col-xs-12 msg-wrap">
        @if(null !== Session::get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>{{ Session::get('success') }}</strong>
                </div>
        @elseif($errors->first())
                <div class="msg-wrap alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>{{ $errors->first()  }}</strong>
                </div>
        @elseif(null !== (Session::get('info')))
                <div class="msg-wrap alert alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>{{ Session::get('info')  }}</strong>
                </div>
        @elseif(null !== (Session::get('warning')))
                <div class="msg-wrap alert alert-warning alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <strong>{{ Session::get('warning')  }}!</strong>
                </div>
        @endif
    </div>
</div>
<script>
 jQuery('.alert-success,.alert-info').delay(2000).slideUp(1000);
</script>

