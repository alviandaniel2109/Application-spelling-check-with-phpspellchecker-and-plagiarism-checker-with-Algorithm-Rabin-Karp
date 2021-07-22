<div style="padding: 25px 10px 25px 39px;">
  <!-- <div class="jumbotron"> -->
    <h1>Check Plagrisme dengan Algoritma Rabin Karp</h1>
    <p>
    <form action="<?php echo base_url()."index.php/check_plagiarism/uploadx" ?>" method="post" id="target">
      <!-- <form action="" method="post" id="target"> -->
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">File Source</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="source" rows="10"></textarea>
        </div>
      </div>

      </br>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">File Perbanding 1</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="pertama" rows="10"></textarea>
        </div>
      </div> 

      </br>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">File Perbanding 2</label>
        <div class="col-sm-10">
          <textarea class="form-control" name="kedua" rows="10"></textarea>
        </div>
      </div>
      </br>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">K-GRAM</label>
        <div class="col-sm-1">
          <input type="txt" name="gram"  class="form-control gram">
        </div>
      </div><br>
      
      <div style="margin-left: 15px;">
        <a href="<?php echo base_url()."index.php/page/file" ?>">
          <button class="btn btn-success btn-lg" type="button">Back</button>
        </a>
        <button class="btn btn-primary btn-lg" type="submit">Process</button>
      </div>
    </form>
    </p>
  <!-- </div> -->
</div>
