<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "include/in_head.php"?>
</head>

<body class="skin-2">
  <?php include "include/in_navbar.php"?>
  <div class="main-container ace-save-state" id="main-container">
    <?php include "include/in_sidebar.php"?>
    <div class="main-content">
      <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
          <ul class="breadcrumb">
            <li>
              <i class="ace-icon fa fa-home home-icon"></i>
              <a href="Char_index.php">首页</a>
            </li>
            <li>
              <a href="javascript:void(0)">广告数据修改</a>
            </li>
            <li>
              <a href="Ad_edit.php">广告数据修改</a>
            </li>
          </ul><!-- /.breadcrumb -->
        </div>
        <div class="page-content">
          <?php include "include/in_menu_set.php"?>
          <div class="row">
            <div class="col-xs-12">
              <!-- 主要内容 开始 -->
              <form class="form-horizontal newoil-form" method="post"
                action="#">
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <div class="widget-box widget-color-blue2">
                      <div class="widget-header">
                        <h4 class="widget-title lighter smaller">广告数据修改</h4>
                      </div>
                      <div class="widget-body">
                        <div class="widget-main padding-8">
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">出现位置</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="kind" id="kind" data-placeholder="请选择"
                                required>
                                <option value="1" selected>Banner輪播</option>
                                <option value="2">內頁Banner</option>
                                <option value="3">QT電子Banner</option>
                                <option value="4">BS電子Banner</option>
                              </select>
                            </div>
                          </div>
                          <!-- 语系選擇 -->
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">语系</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="language_id" id="language_id"
                                data-placeholder="请选择">
                                <option value="0">0.English</option>
                                <option value="1">1.繁體中文</option>
                                <option value="2" selected>2.简体中文</option>
                                <option value="3">3.မြန်မာ</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">标题</label>
                            <div class="col-xs-12 col-sm-5">
                              <input type="text" class="form-control" id="subject" name="subject" value="test4"
                                placeholder="主题" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">发布日期</label>
                            <div class="col-xs-12 col-sm-1">
                              <input type="text" class="form-control jqdate" id="buildtime" name="buildtime"
                                value="2022-04-22 09:59:01" placeholder="发布日期" required />
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">开放时间</label>
                            <div class="col-xs-12 col-sm-4">
                              <div class="input-daterange  input-group">
                                <input type="text" class="form-control jqdate" name="selltime1" id="selltime1" value=""
                                  placeholder="开始日期" />
                                <span class="input-group-addon">
                                  <i class="fa fa-exchange"></i>
                                </span>
                                <input type="text" class="form-control jqdate" name="selltime2" id="selltime2" value=""
                                  placeholder="结束日期" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">状态</label>
                            <div class="col-xs-12 col-sm-5">
                              <select class="form-control select2" name="view" id="view" data-placeholder="请选择"
                                required>
                                <option value="Y" selected>显示</option>
                                <option value="N">关闭</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">备注</label>
                            <div class="col-xs-12 col-sm-5">
                              <textarea id="demo" name="demo" class="form-control  autosize-transition"
                                placeholder="备注"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning"
                              class="col-xs-12 col-sm-3 control-label no-padding-right">图片</label>
                            <div class="col-xs-12 col-sm-5">
                              <input class="form-control file" name="upload" id="upload" type="file" />
                              <span class="help-block">
                                <a class='btn btn-info btn-white'
                                  href="//game99.demonsupervisor.com/upload/banner/banner_20220422095957_.png"
                                  data-rel="colorbox" data-geo="">浏览已上传图片</a>
                                <div class="checkbox-inline text-danger">
                                  <label>
                                    <input type="checkbox" class="ace" name="delpic" value="Y">
                                    <span class="lbl">删除此张图片</span>
                                  </label>
                                </div>
                              </span>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputWarning" class="col-sm-3 control-label no-padding-right"></label>
                            <div class="col-xs-12 col-sm-5">
                              <button type="submit" class="btn btn-primary">送出</button>
                              <a class='btn btn-danger'
                                href='Ad_index.php'>取消</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              <!-- 主要内容 结束 -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div>
        <!-- /.page-content -->
      </div>
    </div><!-- /.main-content -->
    <?php include "include/in_footer.php"?>
  </div><!-- /.main-container -->
  <div id="sound"></div>
  <!-- ace scripts -->
  <script src="js/ace-elements.min.js"></script>
  <script src="js/ace.min.js"></script>
</body>

</html>