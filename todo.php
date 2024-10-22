<?php
    session_start();
    include 'koneksi.php';

    if(isset($_POST['add'])){
        $q_insert = "insert into task (tasklabel, taskstatus) value (
        '".$_POST['task']."',
        'open'
        )";
        $run_q_insert = mysqli_query($conn, $q_insert);

        if($run_q_insert){
                header('Refresh:0; url=todo.php');
        }
    }

    $q_select = "select * from task order by taskid desc";
    $run_q_select = mysqli_query($conn, $q_select);

    if(isset($_GET['delete'])){
        $q_delete= "delete from task where taskid = '".$_GET['delete']."' ";
        $run_q_delete = mysqli_query($conn, $q_delete);

        header('Refresh:0; url=todo.php ');
    }

    if(isset($_GET['done'])){
        $status = 'close';

        if($_GET['status'] == 'open'){
            $status = 'close';
        }else {
            $status = 'open';
        }
        $q_update = "update task set taskstatus = '".$status."' where taskid = '".$_GET['done']."'";
        $run_q_update = mysqli_query($conn, $q_update);

        header('Refresh:0; url=todo.php ');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: #00d2ff;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .container{
            width: 590px;
            height: 100vh;
            margin: 0 auto;
        }
        .header{
            padding: 15px;  
            color: #fff;
        }
        .title{
            display: flex;
            align-items: center;
            margin-bottom: 7px;
        }
        .title i{
            font-size: 24px;
            margin-right: 10px;
        }
        title span{
            font-size: 18px;
        }
        .description{
            font-size: 13px;
        }
        .content{
            padding: 15px;
        }
        .card{
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .add-control{
            width: 100%;
            display: block;
            padding: 0.5rem;
            font-size: 1rem;
            margin-bottom: 10px;
        }
        .text-add{
            text-align: right;
        }
        .text-add:hover{
            opacity: 0.8;
        }
        button{
            padding: 0.5rem 1rem;
            font-size: 1rem;
            cursor: pointer;
            background: #B2FEFA;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #0ED2F7, #B2FEFA);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #0ED2F7, #B2FEFA); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #fff;
            border: 1px solid;
            border-radius: 3px;
        }
        .task-item{

            display: flex;
            justify-content: space-between;
            
        }
        .edit{
            color: orange;
        }
        .trash{
            color: red;
        }
        .task-item.done span{
            text-decoration: line-through;
            color: #ccc;
        }
        .logout-btn{
            position: absolute;
            bottom: 15px;
            left: 15px;
        }
        .logout-btn:hover{
            transform: scale(1.1);
            transition: transform 0.2s;

        }
        .no_task{
            color: #fff;
            text-align: center;
            margin-top: 2rem;
        }
        @media (max-width: 768px){
            .container{
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
       
        <div class="header">
            <div class="title">
                <i class='bx bx-sun'></i>
                <span>To Do List</span>
            </div>
            <div class="description">
                <?= date ("l, d M Y"); ?>
            </div>
        </div>

        <div class="content">
            <div class="card">
                <form action="" method="POST">
                    <input type="text" name="task" class="add-control" placeholder="Add Task">

                    <div class="text-add">
                        <button type="submit" name="add">Add</button>
                    </div>
                </form>
            </div>
            
            <?php
                if(mysqli_num_rows($run_q_select) > 0){
                    while($r = mysqli_fetch_array($run_q_select)){
            ?>
            <div class="card">
                <div class="task-item <?= $r['taskstatus'] == 'close' ? 'done':'' ?>">
                    <div>
                        <input type="checkbox" onclick="window.location.href = '?done=<?= $r['taskid'] ?>&status=<?= $r['taskstatus'] ?>'"
                        <?= $r['taskstatus'] == 'close' ? 'checked':'' ?>>
                        <span><?= $r['tasklabel'] ?></span>
                    </div>

                    <div>
                        <a href="edit.php?id= <?= $r['taskid'] ?>" class="edit" title="edit"><i class='bx bx-edit'></i></a>
                        <a href="?delete=<?= $r ['taskid'] ?>" class="trash" title="remove" onclick="return confirm('are you sure') "> <i class='bx bx-trash'></i></a>
                    </div>
                </div>
            </div>
            <?php
                }} else{ ?>
                <div class="no_task">belum ada task</div>
                <?php
                }
                ?>

        </div>

        <form action="logikalogout.php" method="POST" class="logout-btn">
            <button type="submit" name="logout">Logout</button>
        </form>
    </div>
    
</body>
</html>