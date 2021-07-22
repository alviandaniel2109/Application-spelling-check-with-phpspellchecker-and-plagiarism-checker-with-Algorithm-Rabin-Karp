<div>
    <div class="_f80345-wrap">
        <div class="_0218f4-header">Profile</div>
            <div class="_a499ad-tabs"><a href="/profile" class="_a499ad-tab _a499ad-active" data-name="Personal dictionary">Account</a></div>
                <div class="_c50227-tabContent">
                    <div>
                        <div class="card-panel teal">
                            <?php $user = (array)$this->session->userdata('user');?>
                            <span class="white-text">Hai, <?php echo $user['nama']?> </span>
                        </div>
                        <div data-name="words-list" class="_9bec40-words"></div>
                        <div>
                            <h2>Data Pribadi</h2>
                        </div>
                        <div style="margin-top: 20px;" class="form-group">
                            <label>Email</label>
                        </div>
                        <div class="form-group" style="margin-top: 20px;">
                            <?php echo $user['username']?>
                        </div>
                        <div style="margin-top: 20px;" class="form-group">
                            <label>Foto</label>
                        </div>
                        <div class="form-group" style="margin-top: 20px;">
                            <img src="<?php echo $user['foto']?>" width="250">
                        </div>
                        <div style="margin-top: 20px;" class="form-group">
                            <button onclick="myFunction()">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url()."assets/js/jquery.min.js"?>"></script>
<script type="text/javascript">
    function myFunction(){
        if (confirm("Do you want to delete")){
            window.location.replace("delete");
        }
    }
</script>