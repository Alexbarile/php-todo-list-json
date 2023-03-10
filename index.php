<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>PHP Todo List</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-4">
                    <h1 class="text-center">Todo List</h1>
                    <ul class="list-group mt-4">
                        <li class="list-group-item" v-for="todo in todoList">
                            {{todo.language}}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-4">
                <div class="col-4">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" v-model="language" placeholder="Inserisci elemento" @keyup.enter="addTodoList">
                        <button type="submit" class="btn btn-primary" @click="addTodoList">Inserisci</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>