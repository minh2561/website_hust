<?php
include 'header-sinhvien.php';
include 'menu.php';

?>
<div class="main-content">
<div class="wrapper">
    <h1>Các môn học đã đăng kí</h1>
    <table class="tbl-full">
        <tr>
            <th class ='px-3'>STT</th>
            <th>Lớp học phần</th>
            <th>Tên học phần</th>
            <th>Trạng thái</th>
            <th>Tổng sinh viên</th>
            <th>Số sinh viên</th>
            <th>Tên phòng</th>
            <th>Tuần học</th>
            <th>Gio học</th>
            <th>Trạng thái đăng kí</th>
            <th>Hủy học phần</th>
        </tr>
        <?php
        include '../config.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM dang_ki_tin_chi WHERE lop_id ='$id'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)>0){
           
            while($row=mysqli_fetch_assoc($res)){
                echo '<tr>';
                echo '<td>'.$row['lop_id'].'</td>';
                echo '<td>'.$row['lop_hoc_phan'].'</td>';
                echo '<td>'.$row['lop_ten_hoc_phan'].'</td>';
                echo '<td>'.$row['lop_trang_thai'].'</td>';
                echo '<td>'.$row['lop_max_sv'].'</td>';
                echo '<td>'.$row['lop_current_sv'].'</td>';
                echo '<td>'.$row['lop_ten_phong'].'</td>';
                echo '<td>'.$row['lop_tuan_hoc'].'</td>'; 
                echo '<td>'.$row['lop_gio_hoc'].'</td>';
                echo '<td>'.$row['lop_trang_thai_dang_ki'].'</td>'; 
                echo '<td><a href ="delete.php?id='.$row['lop_id'].'"><i class="fas fa-window-close text-danger"></i></a></td>';
                echo '</tr>';
              
            }
        }
        ?>


        
    </table>
    
</div>
</div>


<?php
include '../index/footer.php'
?>
