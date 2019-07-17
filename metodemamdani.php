<?php
    /**
    * 
    */
    class Login extends CI_Controller
    {
 
    public function __construct()
    {
            parent::__construct();
            $this->load->model('m_mamdani');
            
        }

    public function perhitungan(){   

        $data['bulan'] = $this->input->post('bulan');
        $data['tahun'] = $this->input->post('tahun');
        $data['gol_darah']= $this->input->post('gol_darah');
        $data['kegiatan'] = $this->input->post('kegiatan');
        $data['pendonor']= $this->input->post('pendonor');
        $data['kebutuhan'] = $this->input->post('kebutuhan');

    /*    $select_row =  $this->m_mamdani->getRow(array('id_prediksi'=>$data['id']),"tr_transaksi");
        if(count($select_row) > 0 ){
            $explode = explode("-", $select_row->tanggal); 
            if($explode[0] == date('Y')){

                echo "false";//json_encode($parsing_json);
            }

        }*/

        else{

               
        
            /*Start Rumus*/
            /*
             | Step 1 Inisialisasi Variable
             */
            $in_kegiatan            = $data['kegiatan'];
            $in_pendonor            = $data['luaspendonor'];
            $in_kebutuhan           = $data['kebutuhan'];
            $kegiatan_min        =  10;
            $kegiatan_max        =  30;
            
        $data['kegiatan_sedikit']         = ( (round((10 - $in_kegiatan) / (20),3) > 0 )  ? round((10 - $in_kegiatan) / (20),3) : 0 ); 
        $data['kegiatan_sedang']    = ( (round((20- $in_kegiatan) / (20),3) > 0 ) ? round((20 - $in_kegiatan) / (20),3) : 0); 
        $data['kegiatan_banyak']   = ( (round(($in_kegiatan - 30 ) / (20),3) > 0 ) ? round(($in_kegiatan - 30 ) / (20),3) : 0); 


        $data['pendonor_banyak']        = ( (round((2000 - $in_pendonor) / (1500),3) > 0 ) ? round((2000 - $in_pendonor) / (1500),3) : 0);   
        $data['pendonor_sedang']         = ( (round(($in_pendonor - 1000) / (1500),3) > 0 ) ? round(($in_pendonor - 1000) / (1500),3) : 0);     
        $data['pendonor_sedikit']               = ( (round(($in_pendonor - 500) / (1500),3) > 0 ) ? round(($in_pendonor - 500) / (1500),3) : 0);
        

        $data['kebutuhan_sedikit']        = ( (round((1000 - $in_kebutuhan) / (2000),3) > 0 ) ? round((1000 - $in_kebutuhan) / (2000),3) : 0); 
        $data['kebutuhan_sedang']       = ( (round(($in_kebutuhan - 2000) / (2000),3) > 0 ) ? round(($in_kebutuhan - 2000) / (2000),3) : 0); 
        $data['kebutuhan_banyak']        = ( (round(($in_kebutuhan - 3000) / (2000),3) > 0 ) ? round(($in_kebutuhan - 3000) / (2000),3) : 0);  

        
       /* $data['bantuan']               = ( (round(($in_pendonor - 300000) / (200000),3) > 0 ) ? round(($in_pendonor - 300000) / (200000),3) : 0); */
        
        $kegiatan_banyak            = $data['kegiatan_banyak'];
        $kegiatan_sedang            = $data['kegiatan_sedang'];
        $kegiatan_sedikit           = $data['kegiatan_sedikit'];
        
        $pendonor_banyak            = $data['pendonor_banyak'];
        $pendonor_sedang            = $data['pendonor_sedang'];
        $pendonor_sedikit           = $data['pendonor_sedikit'];
        
        $kebutuhan_banyak           = $data['kebutuhan_banyak'];
        $kebutuhan_sedang           = $data['kebutuhan_sedang'];
        $kebutuhan_sedikit          = $data['kebutuhan_sedikit'];

        /*
         | Step 2 Fungsi Implikasi Rule (MIN)
         */
        $data['a_r1']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_banyak);
        $data['a_r2']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_sedang);
        $data['a_r3']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_sedikit);
        $data['a_r4']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_banyak);
        $data['a_r5']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_sedang);
        $data['a_r6']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_sedikit);
        $data['a_r7']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_banyak);
        $data['a_r8']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_sedang);
        $data['a_r9']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_sedikit);
        $data['a_r10'] = min($kegiatan_sedang,$pendonor_banyak,$kebutuhan_banyak);
        $data['a_r11'] = min($kegiatan_sedang,$pendonor_banyak,$kebutuhan_sedang);
        $data['a_r12'] = min($$kegiatan_sedang,$pendonor_banyak,$kebutuhan_sedikit);
        $data['a_r13'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_banyak);
        $data['a_r14'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_sedang);
        $data['a_r15'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_sedikit);
        $data['a_r16'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_banyak);
        $data['a_r17'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_sedang);
        $data['a_r18'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_sedikit);
        $data['a_r19'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_banyak);
        $data['a_r20'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_sedang);
        $data['a_r21'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_sedikit);
        $data['a_r22'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_banyak);
        $data['a_r23'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_sedang);
        $data['a_r24'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_sedikit);
        $data['a_r25'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_banyak);
        $data['a_r26'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_sedang);
        $data['a_r27'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_sedikit);

        /*
         | Step 3 Komposisi Aturan (Agregasi) (MAX)
         */
        $data['b_r1']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_banyak);
        $data['b_r2']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_sedang);
        $data['b_r3']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_sedikit);
        $data['b_r4']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_banyak);
        $data['b_r5']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_sedang);
        $data['b_r6']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_sedikit);
        $data['b_r7']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_banyak);
        $data['b_r8']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_sedang);
        $data['b_r9']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_sedikit);
        $data['b_r10'] = min($kegiatan_sedang,$pendonor_banyak,$kebutuhan_banyak);
        $data['b_r11'] = min($kegiatan_sedang,$pendonor_banyak,$kebutuhan_sedang);
        $data['b_r12'] = min($$kegiatan_sedang,$pendonor_banyak,$kebutuhan_sedikit);
        $data['b_r13'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_banyak);
        $data['b_r14'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_sedang);
        $data['b_r15'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_sedikit);
        $data['b_r16'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_banyak);
        $data['b_r17'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_sedang);
        $data['b_r18'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_sedikit);
        $data['b_r19'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_banyak);
        $data['b_r20'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_sedang);
        $data['b_r21'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_sedikit);
        $data['b_r22'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_banyak);
        $data['b_r23'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_sedang);
        $data['b_r24'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_sedikit);
        $data['b_r25'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_banyak);
        $data['b_r26'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_sedang);
        $data['b_r27'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_sedikit);

        
        /*
         | Step 4 Defuzzyfikasi
         */
        $D1 = 90; //Dummy
        $D2 = 40; //Dummy
        
        $min            = min($data['a_r1'],$data['a_r2'],$data['a_r3'],$data['a_r4'],$data['a_r5'],$data['a_r6'],$data['a_r7'],$data['a_r8'],$data['a_r9'],$data['a_r10'],$data['a_r11'],$data['a_r12'],$data['a_r13'],$data['a_r14'],$data['a_r15'],$data['a_r16'],$data['a_r17']$data['a_r18']$data['a_r19'],$data['a_r20'],$data['a_r21'],$data['a_r22'],$data['a_r23'],$data['a_r24'],$data['a_r25'],$data['a_r26'],$data['a_r27']);
        $data['min']    = $min;


        $max           = max($data['b_r1'],$data['b_r2'],$data['b_r3'],$data['b_r4'],$data['b_r5'],$data['b_r6'],$data['b_r7'],$data['b_r8'],$data['b_r9'],$data['b_r10'],$data['b_r11'],$data['b_r12'],$data['b_r13'],$data['b_r14'],$data['b_r15'],$data['b_r16'],$data['b_r17']$data['b_r18']$data['b_r19'],$data['b_r20'],$data['b_r21'],$data['b_r22'],$data['b_r23'],$data['b_r24'],$data['b_r25'],$data['b_r26'],$data['b_r27']);
        $data['max']    = $max;


        $a1             = ( $D2 + ( $min *  ($D1 - $D2) ) );
        $a2             = ( $D2 + ( $max *  ($D1 - $D2) ) );
        $data['a1']     = $a1;
        $data['a2']     = $a2;
        
        $data['M1']     = ($min / 2) * ($a1 * $a1);
      
        $Ma     = ( ( 1 /  $a2 ) / 3);
        $Mb     = ( $Ma * ($a2*$a2*$a2));
        $Mg     = ( ( 1 /  $a2 ) / 3);
        $Mh     = ( $Mg * ($a1*$a1*$a1));
        $Mc     = ($Mb-$Mh);
        $Md     = ( ( ( $D2 / $a2) / 2 ) * ($a2 *$a2) );
        $Me     = ( ( ( $D2 / $a2) / 2 ) * ($a1 *$a1) );
        $Mf     = ($Md-$Me);

        $data['M2']     = ($Mc-$Mf);
        $data['M3']     = (($max/2*($D1*$D1)) - ($max/2*($a2*$a2)));
        
        $data['L1']     = ($min * $a1);
        
        $La     = $min + $max;
        $Lb     = $a2 - $a1;
        $Lc     = $La * $Lb;
        
        $data['L2']     = ($Lc / 2);
        $data['L3']     = ( $max * ($D1 - $a2) ) ;
        
        $data['z'] =( ($data['M1'] + $data['M2'] + $data['M3']) /  ($data['L1'] + $data['L2'] + $data['L3']) );

        $s_a = 100 - intval($data['z']);
        if ($s_a >=10 && $s_a <= 60) {
            $status = "Stok Darah Harus Ditmabah";            
        }
        elseif ($s_a >=61 && $s_a <= 90) {
            $status = "Stok Darah Tetap";            
        }

        /*$data['status'] = $status;
       
            $save_data = array(
                'id_reffjompo'=>$this->input->post('idx'),
                'bobot'=>$data['z'],
                'status'=>$status,
                'tanggal'=>date('Y-m-d'),
                );
            $this->mgeneral->save($save_data,'tr_transaksi');            
            $this->mgeneral->update(array('id'=>$data['idx']),array('status'=>1,'tanggal_bantuan'=>date("Y-m-d")),'ref_jompo');            
            $this->load->view('hitungs',$data);
        }
    }*/

    public function perhitungan_detail(){

        $data['kegiatan']           = $this->input->post('kegiatan');
        $data['luaspendonor']      = $this->input->post('luaspendonor');
        $data['kebutuhan']    = $this->input->post('kebutuhan');
        
        /*Start Rumus*/
        /*
         | Step 1 Inisialisasi Variable
         */
        $in_kegiatan            = $data['kegiatan'];
            $in_pendonor            = $data['luaspendonor'];
            $in_kebutuhan           = $data['kebutuhan'];
            $kegiatan_min        =  10;
            $kegiatan_max        =  30;
            
        $data['kegiatan_sedikit']         = ( (round((10 - $in_kegiatan) / (20),3) > 0 )  ? round((10 - $in_kegiatan) / (20),3) : 0 ); 
        $data['kegiatan_sedang']    = ( (round((20- $in_kegiatan) / (20),3) > 0 ) ? round((20 - $in_kegiatan) / (20),3) : 0); 
        $data['kegiatan_banyak']   = ( (round(($in_kegiatan - 30 ) / (20),3) > 0 ) ? round(($in_kegiatan - 30 ) / (20),3) : 0); 


        $data['pendonor_banyak']        = ( (round((2000 - $in_pendonor) / (1500),3) > 0 ) ? round((2000 - $in_pendonor) / (1500),3) : 0);   
        $data['pendonor_sedang']         = ( (round(($in_pendonor - 1000) / (1500),3) > 0 ) ? round(($in_pendonor - 1000) / (1500),3) : 0);     
        $data['pendonor_sedikit']               = ( (round(($in_pendonor - 500) / (1500),3) > 0 ) ? round(($in_pendonor - 500) / (1500),3) : 0);
        

        $data['kebutuhan_sedikit']        = ( (round((1000 - $in_kebutuhan) / (2000),3) > 0 ) ? round((1000 - $in_kebutuhan) / (2000),3) : 0); 
        $data['kebutuhan_sedang']       = ( (round(($in_kebutuhan - 2000) / (2000),3) > 0 ) ? round(($in_kebutuhan - 2000) / (2000),3) : 0); 
        $data['kebutuhan_banyak']        = ( (round(($in_kebutuhan - 3000) / (2000),3) > 0 ) ? round(($in_kebutuhan - 3000) / (2000),3) : 0);  

        
       /* $data['bantuan']               = ( (round(($in_pendonor - 300000) / (200000),3) > 0 ) ? round(($in_pendonor - 300000) / (200000),3) : 0); */
        
        $kegiatan_banyak            = $data['kegiatan_banyak'];
        $kegiatan_sedang            = $data['kegiatan_sedang'];
        $kegiatan_sedikit           = $data['kegiatan_sedikit'];
        
        $pendonor_banyak            = $data['pendonor_banyak'];
        $pendonor_sedang            = $data['pendonor_sedang'];
        $pendonor_sedikit           = $data['pendonor_sedikit'];
        
        $kebutuhan_banyak           = $data['kebutuhan_banyak'];
        $kebutuhan_sedang           = $data['kebutuhan_sedang'];
        $kebutuhan_sedikit          = $data['kebutuhan_sedikit'];

        /*
         | Step 2 Fungsi Implikasi Rule (MIN)
         */
        $data['a_r1']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_banyak);
        $data['a_r2']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_sedang);
        $data['a_r3']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_sedikit);
        $data['a_r4']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_banyak);
        $data['a_r5']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_sedang);
        $data['a_r6']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_sedikit);
        $data['a_r7']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_banyak);
        $data['a_r8']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_sedang);
        $data['a_r9']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_sedikit);
        $data['a_r10'] = min($kegiatan_sedang,$pendonor_banyak,$kebutuhan_banyak);
        $data['a_r11'] = min($kegiatan_sedang,$pendonor_banyak,$kebutuhan_sedang);
        $data['a_r12'] = min($$kegiatan_sedang,$pendonor_banyak,$kebutuhan_sedikit);
        $data['a_r13'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_banyak);
        $data['a_r14'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_sedang);
        $data['a_r15'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_sedikit);
        $data['a_r16'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_banyak);
        $data['a_r17'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_sedang);
        $data['a_r18'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_sedikit);
        $data['a_r19'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_banyak);
        $data['a_r20'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_sedang);
        $data['a_r21'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_sedikit);
        $data['a_r22'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_banyak);
        $data['a_r23'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_sedang);
        $data['a_r24'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_sedikit);
        $data['a_r25'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_banyak);
        $data['a_r26'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_sedang);
        $data['a_r27'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_sedikit);

        /*
         | Step 3 Komposisi Aturan (Agregasi) (MAX)
         */
        $data['b_r1']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_banyak);
        $data['b_r2']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_sedang);
        $data['b_r3']  = min($kegiatan_banyak,$pendonor_banyak,$kebutuhan_sedikit);
        $data['b_r4']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_banyak);
        $data['b_r5']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_sedang);
        $data['b_r6']  = min($kegiatan_banyak,$pendonor_sedang,$kebutuhan_sedikit);
        $data['b_r7']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_banyak);
        $data['b_r8']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_sedang);
        $data['b_r9']  = min($kegiatan_banyak,$pendonor_sedikit,$kebutuhan_sedikit);
        $data['b_r10'] = min($kegiatan_sedang,$pendonor_banyak,$kebutuhan_banyak);
        $data['b_r11'] = min($kegiatan_sedang,$pendonor_banyak,$kebutuhan_sedang);
        $data['b_r12'] = min($$kegiatan_sedang,$pendonor_banyak,$kebutuhan_sedikit);
        $data['b_r13'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_banyak);
        $data['b_r14'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_sedang);
        $data['b_r15'] = min($$kegiatan_sedang,$pendonor_sedang,$kebutuhan_sedikit);
        $data['b_r16'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_banyak);
        $data['b_r17'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_sedang);
        $data['b_r18'] = min($$kegiatan_sedang,$pendonor_sedikit,$kebutuhan_sedikit);
        $data['b_r19'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_banyak);
        $data['b_r20'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_sedang);
        $data['b_r21'] = min($kegiatan_sedikit,$pendonor_banyak,$kebutuhan_sedikit);
        $data['b_r22'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_banyak);
        $data['b_r23'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_sedang);
        $data['b_r24'] = min($kegiatan_sedikit,$pendonor_sedang,$kebutuhan_sedikit);
        $data['b_r25'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_banyak);
        $data['b_r26'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_sedang);
        $data['b_r27'] = min($kegiatan_sedikit,$pendonor_sedikit,$kebutuhan_sedikit);

        
        /*
         | Step 4 Defuzzyfikasi
         */
        $D1 = 90; //Dummy
        $D2 = 40; //Dummy
        
        $min            = min($data['a_r1'],$data['a_r2'],$data['a_r3'],$data['a_r4'],$data['a_r5'],$data['a_r6'],$data['a_r7'],$data['a_r8'],$data['a_r9'],$data['a_r10'],$data['a_r11'],$data['a_r12'],$data['a_r13'],$data['a_r14'],$data['a_r15'],$data['a_r16'],$data['a_r17']$data['a_r18']$data['a_r19'],$data['a_r20'],$data['a_r21'],$data['a_r22'],$data['a_r23'],$data['a_r24'],$data['a_r25'],$data['a_r26'],$data['a_r27']);
        $data['min']    = $min;


        $max           = max($data['b_r1'],$data['b_r2'],$data['b_r3'],$data['b_r4'],$data['b_r5'],$data['b_r6'],$data['b_r7'],$data['b_r8'],$data['b_r9'],$data['b_r10'],$data['b_r11'],$data['b_r12'],$data['b_r13'],$data['b_r14'],$data['b_r15'],$data['b_r16'],$data['b_r17']$data['b_r18']$data['b_r19'],$data['b_r20'],$data['b_r21'],$data['b_r22'],$data['b_r23'],$data['b_r24'],$data['b_r25'],$data['b_r26'],$data['b_r27']);
        $data['max']    = $max;


        $a1             = ( $D2 + ( $min *  ($D1 - $D2) ) );
        $a2             = ( $D2 + ( $max *  ($D1 - $D2) ) );
        $data['a1']     = $a1;
        $data['a2']     = $a2;
        
        $data['M1']     = ($min / 2) * ($a1 * $a1);
      
        $Ma     = ( ( 1 /  $a2 ) / 3);
        $Mb     = ( $Ma * ($a2*$a2*$a2));
        $Mg     = ( ( 1 /  $a2 ) / 3);
        $Mh     = ( $Mg * ($a1*$a1*$a1));
        $Mc     = ($Mb-$Mh);
        $Md     = ( ( ( $D2 / $a2) / 2 ) * ($a2 *$a2) );
        $Me     = ( ( ( $D2 / $a2) / 2 ) * ($a1 *$a1) );
        $Mf     = ($Md-$Me);

        $data['M2']     = ($Mc-$Mf);
        $data['M3']     = (($max/2*($D1*$D1)) - ($max/2*($a2*$a2)));
        
        $data['L1']     = ($min * $a1);
        
        $La     = $min + $max;
        $Lb     = $a2 - $a1;
        $Lc     = $La * $Lb;
        
        $data['L2']     = ($Lc / 2);
        $data['L3']     = ( $max * ($D1 - $a2) ) ;
        
        $data['z'] =( ($data['M1'] + $data['M2'] + $data['M3']) /  ($data['L1'] + $data['L2'] + $data['L3']) );

        $this->load->view('hitung_details',$data);           
    }
    public function indexkeg(){
        
       $this->template->build('index');        
    }
    public function perhitungankeg(){
        $data['isA1'] = $this->input->post('A1');
        $data['isA2'] = $this->input->post('A2');
        $data['isB1'] = $this->input->post('B1');
        $data['isB2'] = $this->input->post('B2');
        $data['isC1'] = $this->input->post('C1');
        $data['isC2'] = $this->input->post('C2');
        $data['isX'] = $this->input->post('X');
        $data['isY'] = $this->input->post('Y');
        $this->load->view('hitungkeg',$data);           
    }
    
    $this->M_mamdani->update_hasil($data,$where);
    redirect('admin/data_prediksi');
    
	
}


/* End of file role.php */
/* Location: ./application/modules/acl/controllers/role.php */