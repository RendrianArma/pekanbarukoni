<?php include('page_header.php');?>
<div class="content content-full">
  <div class="block block-rounded block-bordered">
    <div class="block-header block-header-default text-center">
      <h3 class="block-title">Data Atlet </h3>
    </div>
    <div class="block-content block-content-full">
      <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
        <thead>
          <tr>
            <th class="text-center" style="width: 80px;">#</th>
            <th>Nama Lengkap</th>
            <th class="d-none d-sm-table-cell" style="width: 30%;">Cabor</th>
            <th class="d-none d-sm-table-cell" style="width: 15%;"></th>

          </tr>
        </thead>
        <tbody>
          <?php
          include 'data/alldata.php';
          for ($i=1; $i < 50; $i++) 
          { 
            $namanya = generateName();
            echo '<tr>
            <td class="text-center">'.$i.'</td>
            <td class="font-w600">
            <a href="be_pages_generic_blank.html">'.$namanya['nama'].'</a>
            </td>
            <td class="d-none d-sm-table-cell">
            '.$namanya['cabor'].'
            </td>
            <td class="d-none d-sm-table-cell text-center">
            <a class="btn btn-sm btn-primary px-3 mr-1 my-1" href="/details/atlet/'.$namanya['link'].'">
            Detail
            </a>
            </td>

            </tr>';
          }

          ?>
          


        </tbody>
      </table>
    </div>
  </div>



  <?php include('page_footer.php');?>
