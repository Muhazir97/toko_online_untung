   <head>
        <title>PT. Toko Online Untung</title>
           <link rel ="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/1. LatihanMenu3.css ?>">
      <link rel ="icon" type="image/png" href="KS.png">
    </head>
    <body>
    <div id="layout">
    <div class="header">
    <img src="<?php echo base_url() ?>assets/img/warung.png" class="header">
</div>
    </div> 
     
<br>

<h2>Laporan Data Barang</h2>
  <hr>
<br>
<br>
<style type="text/css">
    body {
      font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
    }
    
    /* Table */
    .demo-table {
      border-collapse: collapse;
      font-size: 13px;
    }
    .demo-table th, 
    .demo-table td {
      border: 1px solid black;
      padding: 7px 17px;
    }
    .demo-table .title {
      caption-side: bottom;
      margin-top: 12px;
    }
    
    /* Table Header */
    .demo-table thead th {
      background-color: #blue;
      color: #FFFFFF;
      border-color: #6ea1cc !important;
      text-transform: uppercase;
    }
    
    /* Table Body */
    .demo-table tbody td {
      color: #353535;
    }
    .demo-table tbody td:first-child,
    .demo-table tbody td:last-child,
    .demo-table tbody td:nth-child(4) {
      text-align: center;
    }
    .demo-table tbody tr:nth-child(odd) td {
      background-color: #f4fbff;
    }
    .demo-table tbody tr:hover td {
      background-color: #ffffa2;
      border-color: #ffff0f;
      transition: all .2s;
    }
    
    /* Table Footer */
    .demo-table tfoot th {
      background-color: #e5f5ff;
    }
    .demo-table tfoot th:first-child {
      text-align: left;
    }
    .demo-table tbody td:empty
    {
      background-color: #ffcccc;
    }
  </style>
</head>
 <div class="card-body">
              <div class="table-responsive">
                <table class="demo-table">
                  <thead>
                     <tr bgcolor="#6495ED">
                        <th>NO</th>
                        <th>IMG BARANG</th>
                        <th>NAMA BARANG</th>
                        <th>HARGA</th>
                        <th>KATEGORI</th>
                        <th>DESKRIPSI</th>
                        <th>STOCK</th>
                       <th>TGL POST</th>

                      </tr>
                          </thead>
                          <tbody>

                   <?php 
                      $no=1;
                      foreach ($data as $brg) : 
                   ?>

                      <tr>
                          <td><?php echo $no++ ?></td>
                          <td style="width: 10%;"><img style="width: 100%;" src="<?php echo base_url(). '/upload/'.$brg->gambar ?>">
                          </td>
                          <td><?php echo $brg->nama_brg ?></td>
                          <td><?php echo number_format($brg->harga, 0, ',','.') ?></td>
                          <td><?php echo $brg->kategori ?></td>
                          <td><?php echo $brg->deskripsi ?></td>
                          <td><?php echo $brg->stock ?></td>
                          <td><?php echo $brg->tgl_post ?></td>
                          
                      </tr>
                    <?php endforeach; ?>
                      </tbody>  
                </table>
                <script >
                  window.print();
                </script>
              </div>
            </div>