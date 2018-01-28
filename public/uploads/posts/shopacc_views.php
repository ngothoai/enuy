<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
    function getUrlFilter($type,$value){
        $url = '';
        if($type == 'rank'){
            if(isset($_GET['gia']) && isset($_GET['tentuong'])){
                $gia = $_GET['gia'];
                $tentuong = $_GET['tentuong'];
                $url = "?rank=$value&gia=$gia&tentuong=$tentuong";
            }else if(isset($_GET['gia'])){
                $gia = $_GET['gia'];
                $url = "?rank=$value&gia=$gia";
            }else if(isset($_GET['tentuong'])){
                $tentuong = $_GET['tentuong'];
                $url = "?rank=$value&tentuong=$tentuong";
            }else{
                $url = "?rank=$value";
            }
        };
        if($type =='gia'){
            if(isset($_GET['tentuong']) && isset($_GET['rank'])){
                $rank = $_GET['rank'];
                $tentuong = $_GET['tentuong'];
                $url = "?gia=$value&rank=$rank&tentuong=$tentuong";
            }else if(isset($_GET['rank'])){
                $rank = $_GET['rank'];
                $url = "?gia=$value&rank=$rank";
            }else if(isset($_GET['tentuong'])){
                $tentuong = $_GET['tentuong'];
                $url = "?rank=$value&tentuong=$tentuong";
            }else{
                $url = "?gia=$value";
            }
        }
        echo $url;
    };
    function getUrlPhantrang($trang){
        $rank = '';
        $gia = '';
        if(isset($_GET['gia']) & isset($_GET['rank']) && isset($_GET['tentuong'])){
            $gia = $_GET['gia'];
            $rank = $_GET['rank'];
            $tentuong = $_GET['tentuong'];
            return "?rank=$rank&gia=$gia&tentuong=$tentuong&trang=$trang";
        }else if(isset($_GET['gia']) & isset($_GET['rank'])){
            $gia = $_GET['gia'];
            $rank = $_GET['rank'];
            return "?rank=$rank&gia=$gia&trang=$trang";
        }else if(isset($_GET['gia']) & isset($_GET['tentuong'])){
            $gia = $_GET['gia'];
            $tentuong = $_GET['tentuong'];
            return "?gia=$gia&tentuong=$tentuong&trang=$trang";
        }else if(isset($_GET['tentuong']) & isset($_GET['rank'])){
            $rank = $_GET['rank'];
            $tentuong = $_GET['tentuong'];
            return "?rank=$rank&tentuong=$tentuong&trang=$trang";
        }else if(isset($_GET['tentuong'])){
            $tentuong = $_GET['tentuong'];
            return "?tentuong=$tentuong&trang=$trang";
        }else if(isset($_GET['gia'])){
            $gia = $_GET['gia'];
            return "?gia=$gia&trang=$trang";
        }else if(isset($_GET['rank'])){
            $rank = $_GET['rank'];
            return "?rank=$rank&trang=$trang";
        }else{
            return "?trang=$trang";
        }
    }
   function time_stamp($time)
   {

      $periods = array("giây", "phút", "giờ", "ngày", "tuần", "tháng", "năm", "thập kỉ");
      $lengths = array("60","60","24","7","4.35","12","10");

      $now = time();

          $difference     = $now - $time;
          $tense         = "trước";

      for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
          $difference /= $lengths[$j];
      }

      $difference = round($difference);



      return "Cách đây $difference $periods[$j]";
   }
   $today = 0;
   $memmuacc ='';
   foreach($queryall as $row){
     $time_agoa = strtotime($row['date']);
   $today++;
   $time_agoa = strtotime($row['date']);
   $memmuacc .=' <a href="#"><span class="text-success">'.$row['name'].'</span></a>';
   $memmuacc .=' đã mua Tài khoản <span class="text-primary">Liên Quân</span> #';
   $memmuacc .= $row['idacc'] .' Giá ';
   $memmuacc .= '<span class="text-danger">'.number_format($row['price']).'</span>';
   $memmuacc .= '<sup class="text-muted">đ</sup> - ';
   $memmuacc .= '<span class="text-muted"><i>';
   }
   $this->load->view('template_head');
   ?>
   <div class="statistic-area">
    <div class="container">
        <?php $this->load->view('thongkenapthe'); ?>
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="panel-title">TOP NẠP THẺ THÁNG <?=date("m")?></p>
                    </div>
                    <div class="panel-body">
                        <div class="block">
                            <ul class="nav nav-tabs nav-tabs-alt vai1" data-toggle="tabs">
                                  <li class="active vai">
                                     <a href="#top">TOP THÁNG</a>
                                  </li>
                                  <li class="vai">
                                     <a href="#phanthuong">PHẦN THƯỞNG</a>
                                  </li>
                            </ul>
                            <div class="tab-content">
                                <div class="block tab-pane active" id="top">
                                    <div class="table-responsive mygrid-wrapper-div">
                                        <table class="table table-striped table-vcenter">
                                            <tbody>
                                                <?php $i=0; foreach($top->result_array() as $row): ?>
                                                <?php $i++; ?>
                                                <tr>
                                                 <td class="text-primary">#<?=$i?></td>
                                                  <td class="text-muted">
                                                                        <?php if (isset($admin)): ?>
                                                <a href="#" target="blank"><?=$row['name']?></a>
                                                <?php else: ?>
                                                <a href="#"><?=$row['name']?></a>
                                                <?php endif;?>
                                                 </td>
                                                <td class="font-w600 text-success"><?=number_format($row['tien'])?> <sup class="text-muted">vnđ</sup></td>
                                                <td>
                                                <strong class="font-w600 text-danger">Updating...
                                                </strong></td>

                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="block tab-pane" id="phanthuong">
                                    <table class="table table-striped table-vcenter">
                                        <tbody>
                                            <tr>
                                                <td style="width: 10%;"></td>
                                                <td style="width: 20%;"><p><b><font="color:#ab4343"><b class="text-success">TOP 1</b></font></b></p></td>
                                                <td style="width: 70%;"><b class="text-danger">Cộng 200k VND Trên Shop</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;"></td>
                                                <td style="width: 20%;"><p><b><font="color:#ab4343"><b class="text-success">TOP 2</b></font></b></p></td>
                                                <td style="width: 70%;"><b class="text-danger"> Cộng 150k VND Trên Shop</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;"></td>
                                                <td style="width: 20%;"><p><b><font="color:#ab4343"><b class="text-success">TOP 3</b></font></b></p></td>
                                                <td style="width: 70%;"><b class="text-danger">Cộng 100k VND Tren Shop</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;"></td>
                                                <td style="width: 20%;"><p><b><font="color:#ab4343"><b class="text-success">TOP 4</b></font></b></p></td>
                                                <td style="width: 70%;"><b class="text-danger">Cộng 50k VND Tren Shop</b></td>
                                            </tr>
                                            <tr>
                                                <td style="width: 10%;"></td>
                                                <td style="width: 20%;"><p><b><font="color:#ab4343"><b class="text-success">TOP 5</b></font></b></p></td>
                                                <td style="width: 70%;"><b class="text-danger">Cộng 50k VND Tren Shop</b></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 ">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title"><u>Shop Liên Quân</u></h1>
                      <center>  <h2><font color= "#00FF00" size= "3">HướnG Dẫn Mua Acc Liên Quân Tại <u><b>lienquannick.vn</b></u></font> </h2></center>
                    </div>

                    <div class="panel-body">
                       <h2 align= "left"><font color= "white" size= 3.5 >- Ba Bước Để Sở Hữu Acc Liên Quân Cực Chất Tại <u><b>lienquannick.vn</b></u></font></h2>
                    <p align= "left" style = "font-weight:bold;" ><font color= "white" size= 2.5>+ Bước 1: Đăng Nhập Để Tham Gia Thành Viên Web</font></p>
                    <p align= "left" style = "font-weight:bold;"><font color= "white" size= 2.5>+ Bước 2: 100k Thẻ Điện Thoại Được 100k Tài khoản Web, Hãy Nạp Tài Khoàn Web Đủ Giá Trị Acc Muốn Mua </font></p>
                    <p align= "left" style = "font-weight:bold;"><font color= "white" size= 2.5>+ Bước 3: Click Vào Acc Muốn Mua Để Xem Thêm Chi Tiết Về Acc Và Ấn Mua Ngay Nếu Thực Sự Thích </font></p>
                    <p align= "left" style = "font-weight:bold;"><font color= "red" size= 3.5 >+ Note: Liên hệ Admin nếu muốn GD qua ATM ( Giảm 20% giá trị acc ) Hoặc Cần Hỗ Trợ</font></p>

                  <div>
                    <a href="https://www.facebook.com/Pvm.Shoplol" rel = "nofollow" target = "_blank" class="myButton">Cày Thuê Liên Quân</a>


                    </div>
                    </div>
                </div>
                </div>

        </div>
        </div>
    </div>
    <div class="account-area">
        <div class="container">
            <div class="block">

                <div class="tab-content">
                    <div class="block tab-pane active" id="lmht">
                        <div class="block-header remove-padding-b remove-padding-all">
                        <div class="row">
                <div class="col-md-12">
                     <marquee scrollamount="5">
                        <img src="/image/khicon.gif" alt="loading" longdesc="36">    <b>Chúc cả nhà ngày mới tốt lành và thật nhiều may mắn ạ, Liên hệ Facebook hoặc SĐT mình nếu cần hỗ trợ nhé cả nhà ^_^ </b>
                     </marquee>
                </div>
              </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-group dachai-filter">
                                        <div class="input-group-addon">Lọc theo Rank</div>
                                        <li class="dropdown form-control">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if(isset($_GET['rank'])){echo $_GET['rank'];}else{echo 'Tất cả';} ?><b class="caret"></b></a>
                                          <ul class="dropdown-menu">
                                            <li><a href="<?php getUrlFilter('rank','TATCA'); ?>">Tất cả</a></li>
                                            <li><a href="<?php getUrlFilter('rank','CHUARANK'); ?>">Chưa rank</a></li>
                                            <li><a href="<?php getUrlFilter('rank','DONG'); ?>">Đồng đoàn</a></li>
                                            <li><a href="<?php getUrlFilter('rank','BAC'); ?>">Bạc đoàn</a></li>
                                            <li><a href="<?php getUrlFilter('rank','VANG'); ?>">Vàng đoàn</a></li>
                                            <li><a href="<?php getUrlFilter('rank','BACHKIM'); ?>">Bạch Kim</a></li>
                                            <li><a href="<?php getUrlFilter('rank','KIMCUONG'); ?>">Kim Cương</a></li>
                                            <li><a href="<?php getUrlFilter('rank','CAOTHU'); ?>">Cao Thủ</a></li>
                                            <li><a href="<?php getUrlFilter('rank','THACHDAU'); ?>">Thách Đấu</a></li>
                                          </ul>
                                        </li>
                                        <!--<select class="form-control" id="filterbyrank" name="filterbyrank" size="1">-->
                                        <!--<option value="0">Tất cả</option> <option value="1">Chưa Rank</option> <option value="2">Đồng đoàn</option> <option value="3">Bạc đoàn</option> <option value="4">Vàng đoàn</option> <option value="5">Bạch Kim</option> <option value="6">Kim Cương</option> <option value="7">Cao Thủ</option> <option value="8">Thách Đấu</option> </select>-->
                                        </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group dachai-filter">
                                        <div class="input-group-addon">
                                            Lọc theo Giá
                                        </div>
                                        <li class="dropdown form-control">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php if(isset($_GET['gia'])){echo $_GET['gia'];}else{echo 'Tất cả';} ?><b class="caret"></b></a>
                                          <ul class="dropdown-menu">
                                            <li><a href="<?php getUrlFilter('gia','TATCA'); ?>">Tất cả</a></li>
                                            <li><a href="<?php getUrlFilter('gia','DUOI50'); ?>">Dưới 50k</a></li>
                                            <li><a href="<?php getUrlFilter('gia','TU50DEN100'); ?>">Từ 50k đến 100k</a></li>
                                            <li><a href="<?php getUrlFilter('gia','TU100DEN200'); ?>">Từ 100k đến 200k</a></li>
                                            <li><a href="<?php getUrlFilter('gia','TU200DEN500'); ?>">Từ 200k đến 500k</a></li>
                                            <li><a href="<?php getUrlFilter('gia','TU500DEN1000'); ?>">Từ 500k đến 1 Triệu</a></li>
                                            <li><a href="<?php getUrlFilter('gia','TREN1000'); ?>">Từ 1 Triệu trở lên</a></li>
                                          </ul>
                                        </li>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group dachai-filter">
                                        <div class="input-group-addon">
                                            Lọc theo tên tướng
                                        </div>
                                        <input class="form-control" type="text" id="searchtentuong"/>
                                        <div id="listtentuong"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-content remove-padding-rl">
                            <div class="js-lmht-list row items-push-2x text-center">
                               <?php foreach($querylmht->result() as $row): ?>
                                <div class="col-sm-4 col-md-3 remove-margin-b group" data-filter-tentuong="<?php if(empty($row->tentuong)){echo "0";}else{echo $row->tentuong;}?>">
                                <div class="account-item">
                                   <a href="/tai-khoan-<?=$row->id?>.html" target="_blank">
                                    <div class="block block-bordered account-item-image block-link-hover3 remove-padding-b" data-id="<?=$row->id?>">
                                        <div class="wrapper-label" style="margin:-9px">

                                        </div>
                                        <div class="block-content block-content-full text-center bg-image" style="background-image: url('<?=$row->anhnen?>');margin-bottom: 2px;padding: 68px;">
                                            <br>
                                        </div>
                                    </div>
                                    <div class="block-content text-center bg-gray-lighter remove-padding-b border-b" data-id="<?=$row->id?>" style="position: relative; color: #0f0">
                                        <div class="push-5">
                                            <div class="font-w600 text-success pull-right" style="z-index: 2">
                                                <button class="btn btn-success btn-buy">Mã Số #<?=$row->id?></button>
                                            </div>
                                            <div class="font-w600 text-left title"><?=number_format($row->gia, 0, '.', '.');?><sup class="text-muted">đ</sup>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content text-center block block-bordered block-link-hover3 remove-padding-b" style="padding:0px;padding-top: 20px">
                                        <table style="width:100%">
                                            <tbody>
                                                <tr>
                                                    <th colspan="2" style="width: 25%;text-align: center;border-right: solid 1px #82580d">Rank</th>
                                                    <th colspan="2" style="width: 25%;text-align: center;border-right: solid 1px #82580d">Tướng</th>
                                                    <th colspan="2" style="width: 25%;text-align: center;border-right: solid 1px #82580d">Skin</th>

                                                    <th colspan="2" style="width: 25%;text-align: center;">Ngọc</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                       <?=$row->rankChitiet?>
                                                    </td>
                                                    <td colspan="2"><?=$row->sochamp?></td>
                                                    <td colspan="2"><?=$row->soskin?></td>
                                                    <td colspan="2"><?=$row->songoc?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr style="width:100%;margin-top: 5px;padding: 0">
                                        <div class="font-s12" style="height:17px;white-space: nowrap; overflow: hidden;text-overflow: ellipsis;margin-bottom: 10px;margin-top: -13px;"><font color="#FF9966"> <?=$row->noidung?> </font></div>
                                    </div>
                                    </a>
                                </div>
                                </div>
                              <?php endforeach; ?>
                            </div>
                            <?php
                                if($lienminh > $sobai){
                                    $sotrang = ceil($lienminh/$sobai);
                                    echo "<div class='phantrang'>";
                                    if($trang > 1){
                                        $oldtrang = $trang - 1;
                                        echo "<a href='".getUrlPhantrang($oldtrang)."'>←</a>";
                                    }
                                    for($i = 1;$i <= $sotrang;$i++){
                                        echo "<a href='".getUrlPhantrang($i)."'>$i</a>";
                                    }
                                    if($trang < $sotrang){
                                        $pretrang = $trang + 1;
                                        echo "<a href='".getUrlPhantrang($pretrang)."'>→</a>";
                                    }
                                    echo "</div>";
                                }
                            ?>
                        </div>
                    </div>

                </div>

            </div>
    </div>
</div>
<?php $this->load->view('template_foot') ?>

