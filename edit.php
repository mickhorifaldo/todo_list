<?php
    include 'koneksi.php';

    $q_select = "select * from task where taskid = '".$_GET['id']."' ";
    $run_q_select = mysqli_query($conn, $q_select);
    $d = mysqli_fetch_object($run_q_select);

    if(isset($_POST['edit'])){
        $q_update = "update task set tasklabel = '".$_POST['task']."' where taskid = '".$_GET['id']."' ";
        $run_q_update = mysqli_query($conn, $q_update);
        
        header('Refresh:0; url=todo.php');
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
            color: #fff;
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
                <a href="todo.php"><i class='bx bx-chevron-left'></i></a>
                <span>Back</span>
            </div>
            <div class="description">
                <?= date ("l, d M Y"); ?>
            </div>
        </div>

        <div class="content">
            <div class="card">
                <form action="" method="POST">
                    <input type="text" name="task" class="add-control" placeholder="edit Task" value="<?= $d->tasklabel ?>">

                    <div class="text-add">
                        <button type="submit" name="edit">edit</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
</body>
</html>