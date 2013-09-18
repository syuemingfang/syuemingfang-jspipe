<!DOCTYPE HTML>
<html>
<head>
  <meta charset='utf-8'>
  <title>jsPipe</title>
  <link rel='stylesheet' href='css/bootstrap-3.min.css' type='text/css'>
  <script src='http://code.jquery.com/jquery-1.8.3.min.js'></script>
  <script>
    var j$183=$.noConflict(true);
  </script>
</head>
<body>
<div class='jumbotron'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-12 text-center'><h1>jsPipe</h1>
          <p class='lead text-muted'>HTML, CSS and JavaScript Debugging Web-Applicatio.</p>
        </div>
      </div>
      <form method='POST' action='http://html.cxm.tw'>
        <div class='row'>
          <div class='col-sm-12 col-lg-12'>
            <h4 class="text-muted">Loading Your HTML</h4>
          </div>
        </div>
        <div class='row'>
          <div class='col-sm-10 col-lg-10'>
            <input type='hidden' name='jspipe' value='true' />
            <input type='text' name='url' class='form-control input-lg' placeholder='Your URL' />
          </div>
          <div class='col-sm-2 col-lg-2 text-right'>
           <input type='submit' class='btn btn-success btn-lg' value='Here We Go' />
         </div>
       </div>
      </form>
      <div class='row'>
        <div class='col-sm-12 col-lg-12'>
          <hr />
          <h4 class="text-muted">Coding</h4>
        </div>
      </div>
      <form method='POST' action='main.php'>
        <div class='row'>
          <div class='col-lg-12'><h5 class='text-muted'>View</h5></div>
        </div>
        <div class='row'>
          <div class='col-lg-12'>
            <iframe src='sub.html' name='view' id='view' class='col-lg-12' style='width:100%; border:0'></iframe>
          </div>
        </div>
        <div class='row'>
          <div class='col-lg-12'><hr /></div>
        </div>
        <div class='row'>
          <div class='col-lg-3 text-left'>
          <h5 class='text-muted'>Library</h5>
            <select id='select_bootstrap'>
              <option value='null' selected>- Bootstrap</option>
              <option value='css/bootstrap-2.3.2.min.css'>+ Bootstrap 2.3.2</option>
              <option value='css/bootstrap-3.min.css'>+ Bootstrap 3</option>
            </select>
            <input type='hidden' id='lib_css' />
            <select id='select_jquery'>
              <option value='null' selected>- jQuery</option>
              <option value='js/jquery-1.10.1.min.js'>+ jQuery 1.10.1</option>
              <option value='js/jquery-2.0.2.min.js'>+ jQuery 2.0.2</option>
            </select>
            <input type='hidden' id='lib_js' />   
          </div>
          <div class='col-lg-3 text-left'>
            <h5 class='text-muted'>CSS</h5>       
            <textarea id='css' class='form-control' rows='10'></textarea>
          </div>
          <div class='col-lg-3'>
            <h5 class='text-muted'>Javascript</h5>
            <textarea id='js' class='form-control' rows='10'></textarea>   
          </div>
          <div class='col-lg-3'>
            <h5 class='text-muted'>HTML</h5>
            <textarea id='html' class='form-control' rows='10'></textarea>         
          </div>
          <div class='row'>
            <div class='col-lg-12'><h5 class='text-muted'>All Source</h5></div>
          </div>
          <div class='row'>
            <div class='col-lg-12'><textarea id='source' class='form-control' rows='10'><?php echo $html ?></textarea></div>
          </div>
          <div class='row'>
            <div class='col-lg-12'><hr /></div>
          </div>
        </div>
      </form>
  </div>
</div>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-12 col-sm-12 text-muted visible-lg'>
      <a href='http://comment.cxm.tw/?url=https://raw.github.com/syuemingfang/syuemingfang-jspipe/master/comment.json'>Documentation</a> |
      <a href='http://html.cxm.tw/?url=https://raw.github.com/syuemingfang/syuemingfang-jspipe/master/example.html'>Example</a> |
      <a href='http://syue.cxm.tw'>Official Website</a> |
      <a href='mailto:syuemingfang@yahoo.com.tw'>Contact US</a>
      Made in Taiwan.<br />
      This license allows for redistribution, commercial and non-commercial, as long as it is passed along unchanged and in whole, with credit to you.
      </div>
   </div>
 </div>
<script src='js/jspipe.js'></script>
</body>
</html>


