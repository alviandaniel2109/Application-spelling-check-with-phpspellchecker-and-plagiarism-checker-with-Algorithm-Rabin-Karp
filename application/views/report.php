<div class="bs-example" data-example-id="simple-responsive-table" style="padding: 25px 10px 25px 39px;">
  <div class="table-responsive">
	  <h2 id="tables-hover-rows">Report</h2>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>File Source</th>
          <th>File Perbanding 1</th>
          <th>File Perbanding 2</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>File Asli</th>
          <?php 
            foreach ($file->result() as $dt) { 
          ?>
            <td>
              <textarea disabled id="exampleInputFile" class="form-control" rows="10"><?= $a=$dt->source;?></textarea>
            </td>
            <td>
              <textarea disabled id="exampleInputFile" class="form-control" rows="10"><?= $b=$dt->pertama;?></textarea>
            </td>
            <td>
              <textarea disabled id="exampleInputFile" class="form-control" rows="10"><?= $c=$dt->kedua;?></textarea>
            </td>
          <?php 
            } 
          ?>
        </tr>

        <tr>
          <th scope="row">Pre Processing</th>
          <td>
            <textarea disabled class="form-control" rows="10"><?= $d=hapus_simbol($a);?></textarea>
          </td>
          <td>
            <textarea disabled class="form-control" rows="10"><?= $e=hapus_simbol($b);?></textarea>
          </td>
          <td>
            <textarea disabled class="form-control" rows="10"><?= $f=hapus_simbol($c);?></textarea>
          </td>
        </tr> 

        <tr>
          <?php 
            $x=$this->uri->segment(4);$h4nk=$this->uri->segment(5);
          ?>
          <th scope="row">Tokenizing K-Gram</th>
          <td><?= kgram($d,$x);?></td>
          <td><?= kgram($e,$x);?></td>
          <td><?= kgram($f,$x);?></td>
        </tr> 

        <tr>
          <th scope="row">Hashing</th>
          <td><?= hasing($d, $x, $h4nk);?></td>
          <td><?= hasing($e, $x, $h4nk);?></td>
          <td><?= hasing($f, $x, $h4nk);?></td>
        </tr>

        <tr>
          <th scope="row">Finger</th>
          <td>
            <?php
              foreach ($source->result_array() as $dt) {
                echo $ff=hasing($dt['source'],$x, $h4nk);
              }
            ?>    
          </td>
          <td>
            <?php 
              foreach ( $pertama->result_array() as $dt) {
                echo hasing($dt['source'],$x, $h4nk);
              }
            ?>
          </td>
          <td>
            <?php
              foreach ( $kedua->result_array() as $dt) {
                echo hasing($dt['source'],$x, $h4nk);
              }
            ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div><!-- /.table-responsive -->

	<div class="table-responsive">
		<h2 id="tables-hover-rows">Dice’s Similarity</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Similarity  Dokumen A & Pembading 1 (B)</th>
          <th>Similarity  Dokumen A & Pembading 2 (C)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>
            <?php 
              $a=$this->plagrismemodel->count_a();
              $b=$this->plagrismemodel->count_b();
              $x=$this->plagrismemodel->count_ab();
              if($a != 0 && $b != 0 && $x != 0){
                $xf= round((2*$x/($a+$b))*100,2);
              }else{
                $xf = 0;
              }
            ?>
            Skema hash File (Asli) = <?= $a;?></br>  
            Skema hash File (Pembanding 1) = <?= $b;?> <br> 
            Skema Hash sama File Asli dan File Pembanding 1 = <?= $x;?> <br>
            Similarity (2*X/(A+B))*100 = <?= $xf;?> %
          </td>

          <td>
            <?php 
              $ax=$this->plagrismemodel->count_a();
              $c=$this->plagrismemodel->count_c();
              $xx=$this->plagrismemodel->count_ac();
              if($a != 0 && $c != 0 && $xx != 0){
                $xxx= round((2*$xx/($ax+$c))*100,2);
              }else{
                $xxx = 0;
              }
            ?>
            Skema hash File (Asli) = <?= $ax;?></br>  
            Skema hash File (Pembanding C)= <?= $c;?> <br> 
            Skema Hash sama File Asli dan Pembanding 2 = <?= $xx;?> <br>  
            Similarity (2*X/(A+C))*100 = <?= $xxx;?> %
		      </td>      
        </tr>
      </tbody>
    </table>
  </div>
  <br>
  <a href="<?php echo base_url()."index.php/page/plagrisme" ?>">
    <button class="btn btn-success btn-lg" type="button" style="margin-left: 1px;">Back</button>
  </a>
</div>