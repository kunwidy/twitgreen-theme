            <div class="span12"><h2>EDIT PROFILE</h2></div>
<!--form profile user-->
    
            <div class="span9">
		
                <div class="accordion" id="accordion2">
                    <div class="accordion-group">
                        <div class="accordion-heading">
                             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                              <h4>Public Profile</h4>
                             </a>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
                            <div class="accordion-inner">
                                
                                <form class="form-horizontal well">
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="inputnama">Nama Lengkap</label>
                                        <div class="controls">
                                            <input type="text" id="inputname" placeholder="Sigit"> <input type="text" id="inputname" placeholder="Sedayu">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="facebook">Facebook profile :</label>
                                        <div class="controls">
                                            Facebook/ <input type="text" id="inputfb" placeholder="sigit">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="twitter">Twitter profile :</label>
                                        <div class="controls">
                                            Twitter/@ <input type="text" id="inputtwit" placeholder="sigit">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="submit-profile" type="submit" class="btn btn-info">Simpan</button> <button type="reset" class="btn">batal</button>
                                        </div>
                                    </div>
                                </form>
                                
                                <div style="display: none;" id="alert-profile-message" class="alert alert-success alert-message"> 
                                    <strong>Success!</strong> Data berhasil disimpan.
                                </div>
                                                               
                            </div>
                        </div>
                     </div>
                    
                    <div class="accordion-group">
                         <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                             <h4>Biodata</h4>
                            </a>
                         </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <form class="form-horizontal well">
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="inputnama">Jenis Kelamin</label>
                                        <div class="controls">
                                            <select>
                                                <option>Laki-laki</option>
                                                 <option>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="agama">Agama :</label>
                                        <div class="controls">
                                            <input type="text" id="inputagm" placeholder="islam">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="sd">SD :</label>
                                        <div class="controls">
                                            <input type="text" id="inputsd" placeholder="SDN 09 Subang">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="sltp">SLTP :</label>
                                        <div class="controls">
                                            <input type="text" id="inputsltp" placeholder="SLTPN 01 Subang">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="smu">SMU :</label>
                                        <div class="controls">
                                            <input type="text" id="inputsmu" placeholder="SMUN 01 Subang">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="un">Universitas :</label>
                                        <div class="controls">
                                            <input type="text" id="inputun" placeholder="ILKOM-UPI 2007">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="sd">Upload Resume* :</label>
                                        <div class="controls">
                                            <input type="file" id="inputresume" placeholder="">
                                            <p class="tiny">Download template resume di <a href="#">disini</a>. Unggah resume dalam format .pdf atau .doc dengan ukuran file maksimal 50 KB</p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="submit-profile" type="submit" class="btn btn-info">Simpan</button> <button type="reset" class="btn">batal</button>
                                        </div>
                                    </div>
                                </form>
                                    <div style="display: none;" id="alert-biodata-message" class="alert alert-success alert-message"> 
                                    <strong>Success!</strong> Data berhasil disimpan.
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-group">
                        <div class="accordion-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                <h4>Private Profile</h4>
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="accordion-inner">
                                <form class="form-horizontal well">
                                    
                                    <div class="control-group">
                                        <label class="control-label" for="email">Email :</label>
                                        
                                        <div class="controls">
                                            <input type="text" id="inputemail" placeholder="sigitsedayu@saklik.com">
                                                <div class="alert alert-error">
                                                     <a class="close" data-dismiss="alert" href="#">&times;</a>Email sudah digunakan!
                                                </div>
                                        </div>
                                        
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="ho">No HP :</label>
                                        <div class="controls">
                                            <input type="text" id="input-hp" placeholder="08571234567">
                                        </div>
                                    </div>
                                     <div class="control-group">
                                        <label class="control-label" for="ho-tlp">No Tlp :</label>
                                        <div class="controls">
                                            <input type="text" id="inputno-tlp" placeholder="022-9878467">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="ho-ktp">No KTP :</label>
                                        <div class="controls">
                                            <input type="text" id="inputno-ktp" placeholder="009834356786753434">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="ho-ktp">Pekerjaan :</label>
                                        <div class="controls">
                                            <input type="text" id="inputno-job" placeholder="Macul">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="ho-ktp">Tempat Lahir :</label>
                                        <div class="controls">
                                            <input type="text" id="inputtglhir" placeholder="Bandung">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="ho-ktp">Tanggal Lahir :</label>
                                        <div class="controls">
                                            <div class="input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
  <input class="span2" size="16" type="text" value="12-02-2012">
  <span class="add-on"><i class="icon-th"></i></span>
</div>
                                        </div> 
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="ho-ktp">Alamat :</label>
                                        <div class="controls">
                                           <textarea rows="3"></textarea>
                                        </div> 
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="kota">Kabupaten/Kota :</label>
                                        <div class="controls">
                                            <input type="text" id="inputkota" placeholder="Bandung">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="prov">Provinsi :</label>
                                        <div class="controls">
                                            <input type="text" id="inputprov" placeholder="Jawa Barat">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label" for="sd">Pindai KTP* :</label>
                                        <div class="controls">
                                            <input type="file" id="inputscanktp" placeholder="">
                                            <p class="tiny">Unggah hasil pindaian KTP dalam format .jpg, .gif atau .png dengan ukuran file maksimal 50 KB</p>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <button id="submit-biodata" type="submit" class="btn btn-info">Simpan</button> <button type="reset" class="btn">batal</button>
                                        </div>
                                    </div>
                                </form>
                                
                                <div style="display: none;" id="alert-biodata-message" class="alert alert-success alert-message"> 
                                    <strong>Success!</strong> Data berhasil disimpan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
	    </div>
            
            <div class="span3">
                <div id="profil-foto">
                <div class="fileupload fileupload-new" data-provides="fileupload">
                     <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" /></div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                                <span class="btn btn-file"><span class="fileupload-new">Ganti Foto</span><span class="fileupload-exists">Ganti</span><input type="file" /></span>
                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Hapus</a>
                            </div>
                </div>
                </div>
            </div>
<!--form profile user-->
