<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Pages
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-9">
          <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body pad">
                
              <form action="<?php echo base_url();?>Admin/AddPagesController/updatepagedata" method="post">
                <?php
                    if (isset($uppage)) {
                      foreach ($uppage as $updata):
                   		//print_r($updata);
                  ?>
                <div class="form-group">
                	<input type="hidden" name="pageid" value="<?php echo $updata->id;?>">
                  <label for="exampleInputEmail1"><h2>Add New Page</h2></label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title Here" name="uppagetitle" value="<?php echo $updata->name;?>">
                  <input type="hidden" name="uppagedate" value="<?php
                        $datestring = 'Published <br> %Y/  %m/  %d';
                        $time = time();
                        echo mdate($datestring, $time);
                        ?>">
                </div>
                <textarea id="textarea" name="uppagecontent"><?php echo $updata->data;?></textarea>
            </div>
          	
          </div>
          </div>
          <div class="col-md-3">
            <div class="box box-info">
            <!-- /.box-header -->
            <div class="box-body pad">
                <div class="form-group">
                  <h3>Publish</h3>
                  <div class="box-footer">
                    <label for="exampleInputEmail1">Parent Page</label>
                    <select name="parent_menu" class="form-control">
                      <option value="" hidden="">Select Parent Page</option>
                    </select>
                  </div>
                 <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div><?php endforeach;
          }?>
              </form>
            </div>
          </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->

 <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=9se4kux7ms9zlv0ejdi1vxk4muvas39sd7m7m7xqzwjznyfh"></script>
 
<script>
  tinymce.init({
  selector: '#textarea',
  height: 500,
  theme: 'modern',
  plugins: 'print preview fullpage powerpaste searchreplace autolink directionality advcode visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount tinymcespellchecker a11ychecker imagetools mediaembed  linkchecker contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
</script>