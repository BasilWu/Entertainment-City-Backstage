<script type="text/javascript">
$(function() {
  $('#ace-settings-container').css('display', 'none'); //隐藏右侧浮动选单
  $('#ace-settings-compact').trigger('click'); //触发改变选单样式
});
</script>
<div class="ace-settings-container" id="ace-settings-container">
  <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
    <i class="ace-icon fa fa-cog bigger-130"></i>
  </div>
  <div class="ace-settings-box clearfix" id="ace-settings-box">
    <div class="pull-left width-50">
      <div class="ace-settings-item" style="display:none">
        <div class="pull-left">
          <select id="skin-colorpicker" class="hide">
            <option data-skin="no-skin" value="#438EB9">#438EB9</option>
            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
          </select>
        </div>
        <span>&nbsp; 选择色系</span>
      </div>
      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off"
          checked />
        <label class="lbl" for="ace-settings-navbar"> 上选单浮动</label>
      </div>
      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off"
          checked />
        <label class="lbl" for="ace-settings-sidebar"> 左选单浮动</label>
      </div>
      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs"
          autocomplete="off" checked />
        <label class="lbl" for="ace-settings-breadcrumbs"> 导览列浮动</label>
      </div>
    </div><!-- /.pull-left -->
    <div class="pull-left width-50">
      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
        <label class="lbl" for="ace-settings-hover"> 子选单浮动</label>
      </div>
      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
        <label class="lbl" for="ace-settings-compact"> 左选单大图标</label>
      </div>
      <div class="ace-settings-item">
        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
        <label class="lbl" for="ace-settings-highlight"> 左选单选采样式</label>
      </div>
    </div><!-- /.pull-left -->
  </div><!-- /.ace-settings-box -->
</div> <!-- /.ace-settings-container -->
<div class="page-header" style="display:none">
  <h1>
    jQuery UI
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Restyling jQuery UI Widgets and Elements
    </small>
  </h1>
</div>
<!-- /.page-header -->
