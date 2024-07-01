<?php


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    
    <header> <h1>To do list</h1></header>

    <main id="app">

    <section class="content">

    <div class="container">


            <div class="row">

                            <form method="POST">
                                <div class="mb-3">
                                    <label for="taskName" class="form-label">Task Name</label>
                                    <input type="text" class="form-control" id="taskName" name="taskName">
                                </div>
                                <div class="mb-3">
                                    <label for="taskStatus" class="form-label">Task Status</label>
                                    <select class="form-select" id="taskStatus" name="taskStatus">
                                        <option value="true">True</option>
                                        <option value="false">False</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>





                   <div class="col-12">

                <div class="task-list">
                    <ul>
                        <li v-for="task in tasks">{{ task.task }}</li>
                    </ul>
                </div>


                   </div>
            </div>



    </div>


    </section>

    
    </main>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js" integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js"></script>
</body>
</html>