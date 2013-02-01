            <div class="span12"><h2>SUNTING CERITA</h2></div>
<!--form relawan registration-->
    
            <div class="span9">
  	
               <form class="form-horizontal well">
	                 
                    <div class="control-group">
						<label class="control-label" for="inputjudul">Judul Cerita</label>
                            <div class="controls">
                                <input type="text" id="inputname" placeholder="Judul cerita ditulis disini"> 
                            </div>
                    </div>
					<div class="control-group">
                        <label class="control-label" for="kota">Tipe Cerita :</label>
                            <div class="controls">
                               
									<select id="subject" name="subject" class="span3">
										<option value="na" selected="">pilih tipe cerita:</option>
										<option value="cat">Catatan</option>
										<option value="gal">Galeri</option>
										<option value="doc">Dokumen</option>
									</select>
								
                            </div>
                    </div>
		   
					<div class="control-group">
                        <label class="control-label" for="ho-ktp">Info Lot :</label>
                             <div class="controls">
                                    <textarea name="message" id="message" class="input-xlarge span5" rows="10"></textarea>
                                </div> 
                    </div>
					
					<div class="control-group">
                        <label class="control-label" for="img">Tambahkan gambar :</label>
                             <div class="controls">
                                   <input type="file" id="img" placeholder="">
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
            
            
<!--form relawan registration-->
