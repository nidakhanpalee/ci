<!-- Page Content -->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <h1 class="page-header">จัดการหมวดหมู่ข่าว</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-12">
        <table class="table">
            <tr>
                <div class="text-right">
                <a href="<?php echo base_url('admin/add_category')?>" class="btn btn-xs btn-primary">
                <i class="fa fa-plus"></i>เพิ่มหมวดหมู่
                </a>
                <th>#</th>
                <th>ชื่อหมวดหมู่</th>
                <th>จัดการ</th>
            </tr>
            <?php if($categories->num_rows() > 0){
                foreach ($categories->result() as $category){?>
            <tr>
                <td>1</td>
                <td><?php echo $category->name ?> </td>
                <td>
                    <a href="<?php echo base_url('admin/edit_category/'. $category->category_id)?>" class="btn btn-xs btn-warning">
                       <i class="fa fa-edit">แก้ไข</i>
                    </a>
                    <a href="<?php echo base_url('admin/delete_category/'. $category->category_id)?>" class="btn btn-xs btn-danger">
                    <i class="fa fa-edit">ลบ</i>
                    </a>
                </td>
            </tr>
            <?php }}else { ?>
                <tr>
                    <td colspan="3">== ไม่มีข้อมูล ==</td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->