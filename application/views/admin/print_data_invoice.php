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

<h2>Laporan Data Pesanan</h2>
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
                        <th>ID INVOICE</th>
                        <th>NAMA PEMESAN</th>
                        <th>ALAMAT PENGIRIMAN</th>
                        <th>NO TLP</th>
                        <th>EMAIL</th>
                        <th>JASA KIRIM</th>
                        <th>KE BANK</th>
                        <th>TGL PEMESANAN</th>
                        <th>JUMLAH TRANSFER</th>
                        <th>BANK PENGIRIM</th>
                        <th>NAMA PENGIRIM</th>
                      </tr>
                          </thead>
                          <tbody>

                   <?php foreach ($data as $inv) : ?>

                      <tr>
                          <td><?php echo $inv->id ?></td>
                          <td><?php echo $inv->nama ?></td>
                          <td><?php echo $inv->alamat ?></td>
                          <td><?php echo $inv->no_telephone ?></td>
                          <td><?php echo $inv->email ?></td>
                          <td><?php echo $inv->jasa ?></td>
                          <td><?php echo $inv->bank ?></td>
                          <td><?php echo $inv->tgl_pesan ?></td>
                          <td><?php echo number_format($inv->jumlah_tranfer, 0, ',','.') ?></td>
                          <td><?php echo $inv->ke_bank ?></td>
                          <td><?php echo $inv->nama_pengirim ?></td>
                      </tr>
                    <?php endforeach; ?>
                      </tbody>  
                </table>
                
              </div>
            </div>
            <script >
                  window.print();
                </script>