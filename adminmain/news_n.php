<?php
session_start();
require_once '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News List</title>
<link href="css/admin-skin.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

<script src="js/jquery-3.3.1.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>


</head>

<body>
<?php include("header.php"); ?>
<div class="bodybar">

  <table width="1000" align="center" cellpadding="0" cellspacing="0">
  <tr>
  <td width="180" align="left" valign="top"><?php include('left.php'); ?>
  </td>
  <td width="1000" align="left" valign="top">
  <table width="1000" cellspacing="0" cellpadding="4" border="0" bgcolor="silver" align="center" class="bordertable" >
  <tr bgcolor="#e5e5e5">
    <td class="header_td">News List </td>
  </tr>
 </table>
   <form method="post">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th style="text-align:left;">S.No</th>
                <th style="text-align:left;">Title</th>
                <th style="text-align:left;">Description</th>
                <th style="text-align:left;">Link</th>
                <th style="text-align:left;">Photo</th>
                <th style="text-align:left;">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query = mysqli_query($conn, "SELECT id, title, description, link, photo FROM tbl_news WHERE 1");
        $i = 1;
        while($res = mysqli_fetch_array($query)){
        ?>
          <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo stripslashes($res['title']); ?></td>
              <td><?php echo stripslashes($res['description']); ?></td>
              <td><?php echo stripslashes($res['link']); ?></td>
              <td><img width="100px" height="100px" src="uploads/news/<?php if($res['photo']) echo $res['photo']; else echo 'Na.png';?>"></td>
              <td><a href="editnews_n.php?id=<?php echo $res['id'];?>">Edit</a></td>
          </tr>
        <?php $i++; }?>
        </tbody>
    </table>

  </form>
  </td>
  </tr>
  </table>
</div>

<?php include('footer.php'); ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();

    $('select').change(function() {
      console.log(this.value);
      var userId = this.value;
      window.location.href="/dbms/admin/authority_list.php?userId=" + userId;
    })

  });
</script>
</body>
</html>
